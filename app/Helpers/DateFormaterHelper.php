<?php

namespace App\Helpers;

use Illuminate\Support\Carbon;

class DateFormaterHelper
{
    public static function convertDateToYMD($dateString)
    {
        return Carbon::createFromFormat('d-M-y', $dateString)->format('Y-m-d');
    }
}
