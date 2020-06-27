<?php

namespace App\Http\Middleware;

use Closure;

class AuthLayer2
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

        if ($request->user() && $request->user()->role_id !=1){
            return redirect()->back();
        }
        return $next($request);
    }
}
