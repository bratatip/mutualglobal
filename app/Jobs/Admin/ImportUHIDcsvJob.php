<?php

namespace App\Jobs\Admin;

use App\Helpers\DateFormaterHelper;
use App\Helpers\UuidGeneratorHelper;
use App\Models\Admin\Uhid;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ImportUHIDcsvJob implements ShouldQueue
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
                'policy_number' => 'required|string',
                'emp_id' => 'required|string',
                'policy_name' => 'required|string',
                'uhid' => 'required|string',
                'insured_name' => 'required|string',
                'age' => 'required|string',
                'dob' => 'required|date',
                'gender' => 'required|string',
                'relationship' => 'required|string',
                'doj' => 'required|date',
                'doc' => 'required|date',
                'doe' => 'required|date',
                'sum_insured' => 'nullable|numeric',
                'status' => 'required|string',
                'insurer' => 'required|string',
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

            // Loop through the data rows and create new candidates and users
            foreach ($rows as $row) {
                // Combine the header with the row data
                $clientUHIDData = array_combine($header, $row);
                // Validate the required fields
                $validator = Validator::make($clientUHIDData, $rules);
                if ($validator->fails()) {
                    // Add skipped rows to array
                    $skippedRows[] = $row;
                    continue;
                }
                $sumInsured = $clientUHIDData['sum_insured'] !== '' ? floatval($clientUHIDData['sum_insured']) : 0;

                $clientUhid = $clientUHIDData['uhid'];
                // $client = Uhid::where('uhid', $userUhid)->first();

                if (Uhid::where('uhid', $clientUhid)->exists()) {
                    // Skip duplicate candidate
                    $skippedRows[] = $row;
                    continue;
                }
                $uhid = Uhid::create([
                    'uuid' => UuidGeneratorHelper::generateUniqueUuidForTable('uhids'),
                    'policy_number' => $clientUHIDData['policy_number'],
                    'emp_id' => $clientUHIDData['emp_id'],
                    'policy_name' => $clientUHIDData['policy_name'],
                    'uhid' => $clientUHIDData['uhid'],
                    'insured_name' => $clientUHIDData['insured_name'],
                    'age' => $clientUHIDData['age'],
                    'dob' => DateFormaterHelper::convertDateToYMD($clientUHIDData['dob']),
                    'gender' => $clientUHIDData['gender'],
                    'relationship' => $clientUHIDData['relationship'],
                    'doj' => DateFormaterHelper::convertDateToYMD($clientUHIDData['doj']),
                    'doc' => DateFormaterHelper::convertDateToYMD($clientUHIDData['doc']),
                    'doe' => DateFormaterHelper::convertDateToYMD($clientUHIDData['doe']),
                    'sum_insured' => $sumInsured,
                    'status' => $clientUHIDData['status'],
                    'insurer' => $clientUHIDData['insurer'],
                ]);
            }

            Storage::delete($this->filePath);

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
