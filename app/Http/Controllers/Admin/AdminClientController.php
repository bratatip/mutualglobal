<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Client\PolicyStoreRequest;
use App\Models\ClientRegistration;
use App\Services\Auth\RegistrationService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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
        sleep(1);
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
        dd($request->all());
    }
}
