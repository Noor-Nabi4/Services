<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{
    public static function convert_minutesToHours($minutes)
    {
        $hours=0;
        while ($minutes >=60){
                $hours += 1;
                $minutes-=60;
        }
        $days =0;
        while ($hours>=24){
            $days+=1;
            $hours -=24;
        }
        return [
            'Days' => $days,
            'Hours' => $hours,
            'Minutes' => $minutes,
        ];
    }
}
