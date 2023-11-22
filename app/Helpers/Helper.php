<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use Carbon\Carbon;

class Helper
{
    public static function convertMinutesToHoursAndDays($minutes)
    {

        // Extract hours and minutes from the duration
        $hours = floor($minutes / 60);
        $minutes = $minutes % 60;

        // Calculate days
        $days = floor($hours / 24);
        $hours = $hours % 24;



        $string = $days>0 ? round($days)." Days ":"";
        $string .= $hours > 0 ? round($hours)." Hours ":"";
        $string .= $minutes > 0 ? round($minutes)." Minutes ":"";
        return [
            $string,
            [
                'Days' => $days,
                'Hours' => $hours,
                'Minutes' => $minutes,
            ]
        ];
    }
}
