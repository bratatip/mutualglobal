<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Uhid;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function clientIndex()
    {
        return view('client.index');
    }
    public function clientUhidShow(Request $request)
    {
        $validatedData = $request->validate([
            'policy_name' => 'required|string|exists:uhids,policy_name',
            'insured_name' => 'required|string|exists:uhids,insured_name',
            'dob' => 'nullable|date|exists:uhids,dob|required_without:emp_id',
            'emp_id' => 'nullable|string|exists:uhids,emp_id|required_without:dob',
        ]);
        try {

            $data = Uhid::where([
                'policy_name' => $validatedData['policy_name'],
                'insured_name' => $validatedData['insured_name'],
            ])->where(function ($query) use ($validatedData) {
                $query->where(function ($subquery) use ($validatedData) {
                    if (!empty($validatedData['dob'])) {
                        $subquery->where('dob', $validatedData['dob']);
                    }
                    if (!empty($validatedData['emp_id'])) {
                        $subquery->orWhere('emp_id', $validatedData['emp_id']);
                    }
                });
            })->first();

            if ($data) {
                $data = $data->toArray();
            } else {
                $data = [];
            }


            if (array_key_exists('insurer', $data)) { // Check if 'insurer' is set in the first record
                $insurer = $data['insurer'];

                if ($insurer === 'icici') {
                    $viewName = 'client.cardViews.uhid-view-icici';
                } elseif ($insurer === 'care') {
                    $viewName = 'client.cardViews.uhid-view-care';
                } elseif ($insurer === 'hdfc') {
                    $viewName = 'client.cardViews.uhid-view-hdfc';
                } elseif ($insurer === 'reliance') {
                    $viewName = 'client.cardViews.uhid-view-reliance';
                } elseif ($insurer === 'tata') {
                    $viewName = 'client.cardViews.uhid-view-tata';
                } else {
                    // Handle the case where 'insurer' doesn't match any known values
                    abort(404); // You can return a 404 error or handle it differently as needed.
                }
            } else {

                return back()->with('error', 'Details not found !');
            }

            return view($viewName, compact('data'));
        } catch (\Exception $e) {
            // Return a custom error message (optional)
            return back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }

    public function downloadUhid($id)
    {
        try {
            $data = Uhid::where('uuid', $id)->first()->toArray();

            if (!$data) {
                return redirect()->back()->with('error', 'Record not found');
            }

            if ($data['insurer'] == 'icici') {
                $view = 'client.cardDownloads.uhid-download-icici';
            } elseif ($data['insurer'] == 'care') {
                $view = 'client.cardDownloads.uhid-download-care';
            } elseif ($data['insurer'] == 'hdfc') {
                $view = 'client.cardDownloads.uhid-download-hdfc';
            } elseif ($data['insurer'] == 'reliance') {
                $view = 'client.cardDownloads.uhid-download-reliance';
            } elseif ($data['insurer'] == 'tata') {
                $view = 'client.cardDownloads.uhid-download-tata';
            } else {
                // Handle the case where 'insurer' is not recognized.
                return redirect()->back()->with('error', 'Invalid insurer');
            }

            $pdf = PDF::loadView($view, ['data' => $data]);
            // $pdf->setOptions(['dpi' => 600]); 

            $fileName = $data['uuid'] . '-' . $data['insurer'] . '.pdf';
            return $pdf->download($fileName, ['Attachment' => false]);
        } catch (\Throwable $th) {
            // Handle any exceptions that may occur
            return redirect()->back()->with('error', 'An error occurred');
        }
    }


    public function clientUhidShowMgib(Request $request)
    {
        $validatedData = $request->validate([
            'policy_name' => 'required|string|exists:uhids,policy_name',
            'insured_name' => 'required|string|exists:uhids,insured_name',
            'dob' => 'nullable|date|exists:uhids,dob|required_without:emp_id',
            'emp_id' => 'nullable|string|exists:uhids,emp_id|required_without:dob',
        ]);
        try {

            $data = Uhid::where([
                'policy_name' => $validatedData['policy_name'],
                'insured_name' => $validatedData['insured_name'],
            ])->where(function ($query) use ($validatedData) {
                $query->where(function ($subquery) use ($validatedData) {
                    if (!empty($validatedData['dob'])) {
                        $subquery->where('dob', $validatedData['dob']);
                    }
                    if (!empty($validatedData['emp_id'])) {
                        $subquery->orWhere('emp_id', $validatedData['emp_id']);
                    }
                });
            })->first();

            if ($data) {

                $viewName = 'client.cardViews.uhid-view-mgib';
            } else {

                return back()->with('error', 'Details not found !');
            }

            return view($viewName, compact('data'));
        } catch (\Exception $e) {

            return back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }

    public function downloadUhidMgib($id)
    {
        try {
            $data = Uhid::where('uuid', $id)->first();
            $randomNumber = Str::random(16);


            if (!$data) {
                return redirect()->back()->with('error', 'Record not found');
            }

            $view = 'client.cardDownloads.uhid-download-mgib';

            $pdf = PDF::loadView($view, ['data' => $data->toArray()]);
            // $pdf->setOptions(['dpi' => 600]); 

            $fileName = $randomNumber . '-' . $data->insured_name . '-' . $data->insurer . '.pdf';

            return $pdf->download($fileName, ['Attachment' => false]);
        } catch (\Throwable $th) {
            // Handle any exceptions that may occur
            return redirect()->back()->with('error', 'An error occurred');
        }
    }
}
