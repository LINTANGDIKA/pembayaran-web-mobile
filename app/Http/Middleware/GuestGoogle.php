<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GuestGoogle
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
        if ($request->session()->exists('tokenGoogle')) {
            // user value cannot be found in session
            return redirect('/');
        }
        return $next($request);
    }
}
