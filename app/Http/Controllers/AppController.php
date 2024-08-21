<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\ConnectionException;

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

    public function cacheVisit(Request $request, $page_area, $comments = null)
    {
       try{
            $response = Http::get("https://ipinfo.io/{{$request->ip()}}?token=db4aea6246dfbf");

           if($response->successful()){
               $ip_info = $response->json();

               Visit::create([
                   "page_area_id"=> $page_area->id,
                   'visitor_id' => Crypt::encryptString($request->ip()),
                   "ip" => $request->ip(),
                   "city" => $ip_info["city"],
                   "region" => $ip_info["region"],
                   "country" => $ip_info["country"],
                   "loc" => $ip_info["loc"],
                   "org" => $ip_info["org"],
                   "postal" => $ip_info["postal"],
                   "timezone" => $ip_info["timezone"],
                   "platform" => $request->server('HTTP_SEC_CH_UA_PLATFORM'),
                   "path" => $request->path(),
                   "method" => $request->method(),
                   "comments" => $comments
               ]);
           }

       }catch (ConnectException $exception){
           Log::error($exception);
       }

    }
}
