<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function getTimestamp($dateTimeString, $timeString = null)
    {
        $date=explode('-',$dateTimeString);
        $hour = 0;
        $minutes = 0;

        if($timeString != null){
            $time=explode(':',$timeString);
            $hour = $time[0];
            $minutes = $time[1];
        }

        return  Carbon::create($date[0],$date[1],$date[2],$hour,$minutes,0)->getTimestamp();
    }
}
