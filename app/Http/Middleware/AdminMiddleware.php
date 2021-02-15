<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        dd(auth()->user()->role);
        if (auth()->user()->role == "admin") {

            redirect()->route('admin');
            //return $next($request);
        }else{
            return $next($request);
        }
       
    }
    }

