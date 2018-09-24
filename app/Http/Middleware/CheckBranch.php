<?php

namespace App\Http\Middleware;

use Closure;

class CheckBranch
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
        if (Auth::check() &&  Auth::user()->branch == 1) 
        {
            return $next($request);
        }

        return redirect('home');
    }
}