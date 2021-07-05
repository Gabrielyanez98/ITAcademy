<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $DateAndTime = date('d-m-Y');  
        echo "Hoy es el día: $DateAndTime.";

        return $next($request);
    }
}
