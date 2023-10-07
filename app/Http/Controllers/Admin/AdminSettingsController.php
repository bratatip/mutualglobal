<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\Admin\ImportUHIDcsvJob;
use Illuminate\Http\Request;

class AdminSettingsController extends Controller
{
    public function adminImportUhidForm()
    {
        try {
            return view('admin.import-uhid-form');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function adminStoreUhid(Request $request)
    {
        try {
            $request->validate([
                'excel_uhid' => 'required|mimes:csv|max:10240'
            ]);

            $filePath = $request->file('excel_uhid')->storeAs('temp', 'import_uhid.csv');

            $filename =  'skipped_rows_' . time() . '.csv';
            $filename = preg_replace('#[ -]+#', '-', $filename);

            $skippedRowsFilePath = storage_path('app/temp/' . $filename);
            ImportUHIDcsvJob::dispatch($filePath, $skippedRowsFilePath);

            return redirect()->back();
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
