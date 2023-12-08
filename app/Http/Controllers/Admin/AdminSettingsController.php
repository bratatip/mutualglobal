<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\Admin\DeleteUHIDcsvJob;
use App\Jobs\Admin\ImportUHIDcsvJob;
use Illuminate\Http\Request;

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
    
    public function adminStoreUhid(Request $request)
    {
        try {
            $request->validate([
                'excel_uhid' => 'required|mimes:csv,txt|max:10240'
            ]);

            $filePath = $request->file('excel_uhid')->storeAs('temp', 'import_uhid.csv');

            $filename =  'skipped_rows_' . time() . '.csv';
            $filename = preg_replace('#[ -]+#', '-', $filename);

            $skippedRowsFilePath = storage_path('app/temp/' . $filename);
            $skippedRowsFile = ImportUHIDcsvJob::dispatchNow($filePath, $skippedRowsFilePath);

            // if ($skippedRowsFile && is_string($skippedRowsFile) && file_exists($skippedRowsFile)) {
            //     return response()->download($skippedRowsFile)->deleteFileAfterSend(true);
            // }
            return response()->json([
                'status' => 'success',
                'message' => 'Data imported successfully.',
                'skippedFileUrl' => $skippedRowsFilePath,
            ]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
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
