<?php

namespace App\Http\Middleware;

use Closure;

class admin
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
       //
       echo "string";
        if ( auth()->user()->role == "admin") {

            //redirect()->route('admin');
            return $next($request);
        }else{
            return redirect('icts')->with('error','You have not admin access');
        }
    }
}
