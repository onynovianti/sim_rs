<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Apoteker
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
        if(session('role') != 'apoteker'){
            return redirect('/');
        }
        return $next($request);
    }
}
