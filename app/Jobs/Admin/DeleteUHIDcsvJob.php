<?php

namespace App\Jobs\Admin;

use App\Models\Admin\Uhid;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DeleteUHIDcsvJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $filePath;
    protected $skippedRowsFilePath;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $filePath, string $skippedRowsFilePath)
    {
        $this->filePath = $filePath;
        $this->skippedRowsFilePath = $skippedRowsFilePath;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $rules = [
                'uhid' => 'required|string',
            ];


            // Read the file
            $filePath = storage_path('app/' . $this->filePath);
            $rows = array_map('str_getcsv', file($filePath));

            // Remove empty rows
            $rows = array_filter($rows, function ($row) {
                return !empty(array_filter($row, 'trim'));
            });

            // Reindex rows after filtering
            $rows = array_values($rows);
            // Remove the header row
            $header = array_shift($rows);

            // Initialize skipped rows array with header
            $skippedRows = [$header];

            // Loop through the data rows and Delete
            foreach ($rows as $row) {
                $clientUHIDData = array_combine($header, $row);

                $validator = Validator::make($clientUHIDData, $rules);
                if ($validator->fails()) {
                    $skippedRows[] = $row;
                    continue;
                }

                $uhidValue = $clientUHIDData['uhid'];
                $existingRecord = Uhid::where('uhid', $uhidValue)->first();
                if ($existingRecord) {
                    // Delete the record from the database
                    $existingRecord->delete();
                } else {
                    // Skip the record and add it to the skippedRows array
                    $skippedRows[] = $row;
                }
            }

            // Delete the temporary file after processing
            Storage::delete($this->filePath);

            // Save skipped rows to a CSV file
            if (count($skippedRows) > 1) {
                $csv = fopen($this->skippedRowsFilePath, 'w');
                foreach ($skippedRows as $row) {
                    fputcsv($csv, $row);
                }
                fclose($csv);
            }
            $skippedRowsFile = storage_path('app/' . $this->skippedRowsFilePath);

            return $skippedRowsFile;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
