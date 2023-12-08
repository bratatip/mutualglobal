<?php

namespace App\Helpers;

use Illuminate\Support\Carbon;

class DateFormaterHelper
{
    public static function convertDateToYMD($dateString)
    {

        //  date in the format of 01-sep-2023
        // return Carbon::createFromFormat('d-M-y', $dateString)->format('Y-m-d');  


        //  date in the format of 23-12-2023
        return Carbon::createFromFormat('d-m-Y', $dateString)->format('Y-m-d');
    }
}
