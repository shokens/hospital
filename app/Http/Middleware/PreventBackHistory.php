<?php

namespace App\Http\Middleware;

use Closure;

class PreventBackHistory
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
        return $next($request);
        return $response->header('Cache-Control','nocache,no-store,max-age=0;must-revalidate')
                        ->header('Program','no-cache')
                        ->header('Expires','Sun, 02 Jan 1990 00:00:00 GMT');
   
    }
}
