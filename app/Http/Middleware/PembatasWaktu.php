<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PembatasWaktu
{
     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Tentukan batasan waktu
        $startTime = Carbon::createFromTime(9, 0); // Jam 9:00
        $endTime = Carbon::createFromTime(17, 0); // Jam 17:00
        $currentTime = Carbon::now();

        // Periksa apakah waktu sekarang berada di luar batas
        if ($currentTime->lt($startTime) || $currentTime->gt($endTime)) {
            return response()->view('errors.time_restricted', [], 403); // Arahkan ke halaman error
        }

        return $next($request);
    }
}
