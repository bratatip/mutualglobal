<?php

namespace App\Http\Controllers\Admin;

use App\Exports\RejectedUhidExport;
use App\Http\Controllers\Controller;
use App\Imports\ClientUhidImport;
use App\Jobs\Admin\DeleteUHIDcsvJob;
use App\Jobs\Admin\ImportUHIDcsvJob;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class AdminSettingsController extends Controller
{
    public function adminImportUhidForm()
    {
        try {
            return view('admin.import-uhid-form');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function adminDeleteUhidForm()
    {
        try {
            return view('admin.delete-uhid-form');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function downloadSampleCSV(Request $request)
    {
        $csvFilePath = public_path('/files/csv/import_uhid_sample.csv');
        $csvFileName = 'import_uhid_sample.csv';
        return response()->download($csvFilePath, $csvFileName);
    }

    
    public function downloadSampleCSVForDelete(Request $request)
    {
        $csvFilePath = public_path('/files/csv/delete_uhid_sample.csv');
        $csvFileName = 'delete_uhid_sample.csv';
        return response()->download($csvFilePath, $csvFileName);
    }
    
    // public function adminStoreUhid(Request $request)
    // {
    //     try {
    //         $request->validate([
    //             'excel_uhid' => 'required|mimes:csv,txt|max:10240'
    //         ]);

    //         $filePath = $request->file('excel_uhid')->storeAs('temp', 'import_uhid.csv');

    //         $filename =  'skipped_rows_' . time() . '.csv';
    //         $filename = preg_replace('#[ -]+#', '-', $filename);

    //         $skippedRowsFilePath = storage_path('app/temp/' . $filename);
    //         // $skippedRowsFile = ImportUHIDcsvJob::dispatchNow($filePath, $skippedRowsFilePath);

    //         $skippedRowsFile =   dispatch(new ImportUHIDcsvJob($filePath, $skippedRowsFilePath));
            
    //         // if ($skippedRowsFile && is_string($skippedRowsFile) && file_exists($skippedRowsFile)) {
    //         //     dd("hi");
    //         //     return response()->download($skippedRowsFile)->deleteFileAfterSend(true);
    //         // }
    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'Data imported successfully.',
    //             'skippedFileUrl' => $skippedRowsFilePath,
    //         ]);
    //     } catch (\Exception $e) {
    //         return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
    //     }
    // }


    public function adminStoreUhid(Request $request)
    {
        $message = '';
        $rejectedUhids = [];
        $status = 'success';

        if ($request->hasFile('excel_uhid')) {
            $file = $request->file('excel_uhid');

            $import = new ClientUhidImport();

            try {
                Excel::import($import, $file);
                $message = $import->getMessage();
                $rejectedUhids = $import->getRejectedUhids();
            } catch (QueryException $e) {
                Log::error('Database error during import: ' . $e->getMessage());
                $message = 'An error occurred during import';
                $status = 'error';
            } catch (\Exception $e) {
                Log::error('General error during import: ' . $e->getMessage());
                $message = 'An error occurred during import';
                $status = 'error';
            }
        } else {
            $message = 'No file uploaded';
            $status = 'error';
        }
        if (!empty($rejectedUhids)) {

            $adjustedNow = now();

            $filename = 'rejected_uhids_' . $adjustedNow->format('Y-m-d_H:i:s') . '.xlsx';

            Excel::store(new RejectedUhidExport($rejectedUhids), 'rejected/' . $filename, 'public');

            $download_url = asset('storage/rejected/' . $filename);
            // dd($message);
            return response()->json(['message' => $message, 'status' => $status, 'download_url' => $download_url]);
        }

        return response()->json(['message' => $message, 'status' => $status]);
    }








    public function  adminDeleteUhid(Request $request)
    {
        try {
            $request->validate([
                'uhid_delete_csv' => 'required|mimes:csv,txt|max:10240'
            ]);
            $filePath = $request->file('uhid_delete_csv')->storeAs('temp', 'uhid_delete_csv.csv');

            $filename =  'skipped_rows_' . time() . '.csv';
            $filename = preg_replace('#[ -]+#', '-', $filename);

            $skippedRowsFilePath = storage_path('app/temp/' . $filename);
            DeleteUHIDcsvJob::dispatch($filePath, $skippedRowsFilePath);
            return response()->json([
                'status' => 'success',
                'message' => 'Data Deleted successfully.',
                'skippedFileUrl' => $skippedRowsFilePath,
            ]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
