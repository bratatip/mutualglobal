<?php

namespace App\Helpers;

use Illuminate\Support\Carbon;

class DateFormaterHelper
{
    public static function convertDateToYMD($dateString)
    {
        $formats = [
            'd/m/Y' => 'DD/MM/YYYY',
            'Y/m/d' => 'YYYY/MM/DD',
            'Y-m-d' => 'YYYY-MM-DD',
            'd-m-Y' => 'DD-MM-YYYY',
            'd F Y' => 'DD Month YYYY',
            'F d, Y' => 'Month DD, YYYY',
            'M d, Y' => 'Mon DD, YYYY',
            'Y/m/d H:i:s' => 'YYYY/MM/DD HH:MM:SS',
            'Y-m-d\TH:i:s\Z' => 'YYYY-MM-DDTHH:MM:SSZ',
        ];

        foreach ($formats as $format => $formatName) {
            $timestamp = date_create_from_format($format, $dateString);
            if ($timestamp !== false) {
                $formattedDate = $timestamp->format('Y-m-d');
                return $formattedDate;

                // return [
                //     'format' => $formatName,
                //     'date' => $formattedDate,
                // ];
            }
        }

        return null;
    }
}
