<?php

namespace App\Http\Middleware;

use Closure;

class edit
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
        if (auth()->user()->empresa == "ICTS") {

           return $next($request);
            //return $next($request);
        }else{
            return redirect('/home');
        }
    }
}
