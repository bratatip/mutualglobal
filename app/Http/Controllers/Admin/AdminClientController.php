<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\PasswordGeneratorHelper;
use App\Helpers\UuidGeneratorHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Client\PolicyStoreRequest;
use App\Models\Admin\Insurer;
use App\Models\ClientPolicy;
use App\Models\ClientRegistration;
use App\Models\User;
use App\Services\Auth\RegistrationService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class AdminClientController extends Controller
{
    public function registerClientView()
    {
        return view('admin.client.register.index');
    }

    public function addClientPolicyView()
    {
        return view('admin.client.policy.add');
    }

    public function registerClientTableJson()
    {
        // Query to fetch all users data
        $data = ClientRegistration::all();

        // Return the data using DataTables
        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('name', function ($user) {
                return ucwords($user->name);
            })
            ->editColumn('created_at', function ($user) {
                return Carbon::parse($user->created_at)->diffForHumans();
            })
            ->addColumn('action', function ($row) {
                $uuid = $row->uuid;
                $status = $row->status;
                // Pass the data to the view using compact
                return view('admin.client.register.data_table_buttons.register_client_action_button', compact('uuid', 'status'));
            })
            ->rawColumns(['action'])
            ->make(true);
    }


    public function approveClientRegistration(RegistrationService $registrationService, $registraion_id)
    {
        try {
            $registerClientData = ClientRegistration::where([['uuid', '=', $registraion_id]])->first()->toArray();

            $role = 'client';

            // throw new \Exception('This is a test error for simulation purposes.');
            $result = $registrationService->register($registerClientData, $role);

            if ($result['status'] === 'success') {

                $registerClient = ClientRegistration::where([['uuid', '=', $registraion_id]])->first();
                $registerClient->status = 'APPROVED';
                $registerClient->save();

                return back()->with('success', $result['message']);
            } else {
                return back()->with('error', $result['message']);
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return back()->with('error', 'Client registration not found!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }


    public function rejectClientRegistration($registraion_id)
    {
        try {
            $registerClient = ClientRegistration::where([['uuid', '=', $registraion_id]])->first();
            $registerClient->status = 'REJECTED';
            $registerClient->delete();

            // dispatch(new RejectedPostingClientNotificationJob($posting));

            return back()->with('success', 'Client registration rejected successfully!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function storeClientPolicy(PolicyStoreRequest $request)
    {
        // Handle the file upload
        if ($request->file('policy_copy')->isValid()) {

            $user = User::where('uuid', $request->input('client'))->first();
            $insurer = Insurer::where('uuid', $request->input('insurer'))->first();

            $file = $request->file('policy_copy');
            // Store the file or perform other actions
            // Example: $file->store('uploads');

            $client = new Client();
            if (!Cache::has('microsoft_graph_token')) {
                // Step 1: Get the access token
                $response = $client->post('https://login.microsoftonline.com/' . config('azure.tenant_id') . '/oauth2/v2.0/token', [
                    'form_params' => [
                        'grant_type' => 'client_credentials',
                        'client_id' => config('azure.client_id'),
                        'client_secret' => config('azure.client_secret'),
                        'scope' => 'https://graph.microsoft.com/.default'
                    ],
                ]);

                // $token = json_decode((string) $response->getBody(), true)['access_token'];

                $body = json_decode((string) $response->getBody(), true);
                $token = $body['access_token'];
                $expiresIn = $body['expires_in'];

                Cache::put('microsoft_graph_token', $token, now()->addSeconds($expiresIn - 30));
            } else {
                $token = Cache::get('microsoft_graph_token');
            }

            // Step 2: Use the access token to upload a file
            // $fileContent = file_get_contents('path/to/your/file.txt');
            $fileContent = file_get_contents($request->file('policy_copy')->getRealPath());

            $extension = $request['policy_copy']->getClientOriginalExtension();
            $fileName = Str::random(15) . '-' . UuidGeneratorHelper::generateUniqueUuidForTable('client_policies') . '.' . $extension;
            
            $path = $user->uuid . '/' . $fileName;
            
            // $path = $user->uuid . '/' . $insurer->name . '/' . $fileName;
            // $path = UuidGeneratorHelper::generateUniqueUuidForTable('client_policies') . '-' .$user->uuid . '/' . $fileName;

            $response = $client->put('https://graph.microsoft.com/v1.0/drives/' . config('azure.driver_id') . '/root:/' . $path . ':/content', [
                'headers' => [
                    'Authorization' => "Bearer {$token}",
                    'Content-Type' => $file->getClientMimeType(),
                ],
                'body' => $fileContent,
            ]);


            // return json_decode((string) $response->getBody(), true);

            if ($response->getStatusCode() == 201) {
                $responseData = json_decode((string) $response->getBody(), true);

                $uuid = UuidGeneratorHelper::generateUniqueUuidForTable('client_policies');

                $policy = ClientPolicy::create([
                    'uuid' =>  $uuid,
                    'customer_id' => $user->id,
                    'insurer_id' => $insurer->id,
                    'policy_no' => $request['policy_number'],
                    'policy_start_date' => $request['policy_start_date'],
                    'policy_end_date' => $request['policy_end_date'],
                    'occupancy' => $request['occupancy'],
                    'property_address' => $request['property_address'],
                    'premium_inc_gst' => $request['premium_inc_gst'],
                    'file_path' => $responseData['id'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);

                return back()->with('success', 'File uploaded successfully');
            } else {
                return back()->withErrors('File upload failed');
            }
        }

        return back()->withErrors('File upload failed');
    }
}
