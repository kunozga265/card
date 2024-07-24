<?php

namespace App\Http\Middleware;

use App\Models\Visit;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

class CacheVisit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = Http::get("https://ipinfo.io/{{$request->ip()}}?token=db4aea6246dfbf");
        $ip_info = $response->json();

        Visit::create([
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
        ]);

        return $next($request);

    }
}
