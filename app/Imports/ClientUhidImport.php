<?php

namespace App\Imports;

use App\Helpers\DateFormaterHelper;
use App\Helpers\UuidGeneratorHelper;
use App\Models\Admin\Uhid;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class ClientUhidImport implements ToCollection
{
    private $message = 'Excel file imported successfully';


    private $requiredHeaders = [
        'policy_number',
        'emp_id',
        'uhid',
        'policy_name',
        'insured_name',
        'age',
        'dob',
        'gender',
        'relationship',
        'doj',
        'doc',
        'doe',
        'sum_insured',
        'status',
        'insurer',
        'remarks',
    ];

    private $missingHeaders = [];
    protected $rejectedUhids = [];

    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        DB::beginTransaction();
        try {

            if (
                $collection->isEmpty() ||
                $this->areRequiredHeadersMissing($collection->first()) ||
                $collection->first()->contains(null)
            ) {
                throw new \Exception('The following headers are missing: ' . implode(', ', $this->missingHeaders));
            }

            // ImportedPolicy::truncate();
            $headers = $collection->shift()->map(function ($header) {
                return trim($header);
            });


            foreach ($collection as $row) {
                $data = [];
                foreach ($headers as $key => $header) {
                    $data[$header] = $row[$key];
                }
                $uhidNumber = $data['uhid'];
                $sumInsured = $data['sum_insured'] !== '' ? floatval($data['sum_insured']) : 0;

                // dd($data['policy_issue_date']);
                $existingPolicy = Uhid::where('uhid', $uhidNumber)->first();

                // dd($data['policy_request_date']);
                if ($existingPolicy) {
                    // Policy number is already present, consider it as rejected
                    // dd();
                    $data['remarks'] = "Policy No Already Exist";
                    $this->rejectedUhids[] = $data;
                } else {
                    try {
                        $user = Uhid::create([

                            'uuid' => UuidGeneratorHelper::generateUniqueUuidForTable('uhids'),
                            'policy_number' => $data['policy_number'],
                            'emp_id' => $data['emp_id'],
                            'policy_name' => $data['policy_name'],
                            'uhid' => $data['uhid'],
                            'insured_name' => $data['insured_name'],
                            'age' => $data['age'],
                            'dob' => DateFormaterHelper::convertDateToYMD($data['dob']),
                            'gender' => $data['gender'],
                            'relationship' => $data['relationship'],
                            'doj' => DateFormaterHelper::convertDateToYMD($data['doj']),
                            'doc' => DateFormaterHelper::convertDateToYMD($data['doc']),
                            'doe' => DateFormaterHelper::convertDateToYMD($data['doe']),
                            'sum_insured' => $sumInsured,
                            'status' => $data['status'],
                            'insurer' => $data['insurer'],
                            'remarks' => $data['remarks'],

                        ]);
                        DB::commit();
                    } catch (\Illuminate\Database\QueryException $e) {
                        $data['remarks'] = $e->errorInfo[2];
                        $this->rejectedUhids[] = $data;
                        $this->message = $e->errorInfo;

                        DB::rollBack();
                    } catch (\Exception $e) {
                        $this->message = $e->getMessage();
                        DB::rollBack();
                    }
                }
            }

            // dd($this->rejectedUhids);
        } catch (\Exception $e) {
            DB::rollBack();
            $this->message = $e->getMessage();
        }
        return $this->message;;
    }


    public function getMessage()
    {
        return $this->message;
    }

    public function getRejectedUhids()
    {
        return $this->rejectedUhids;
    }

    private function areRequiredHeadersMissing($headers)
    {
        $this->missingHeaders = [];
        $requiredHeaders = array_map('trim', $this->requiredHeaders);
        $excelHeaders = $headers->map(function ($header) {
            return trim($header);
        });

        foreach ($requiredHeaders as $requiredHeader) {
            if (!$excelHeaders->contains($requiredHeader)) {
                $this->missingHeaders[] = $requiredHeader;
            }
        }
        return !empty($this->missingHeaders);
    }
}
