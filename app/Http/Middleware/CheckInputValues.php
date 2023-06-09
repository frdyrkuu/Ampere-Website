<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckInputValues
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $circuit_Number = $request->input('circuitNumber');
        $ampere_trip = $request->input('ampereTrip');
        $real_current = $request->input('realCurrent');

        if (!$circuit_Number || !$ampere_trip || !$real_current) {
            return redirect()->back();
        }
        return $next($request);
    }
}
