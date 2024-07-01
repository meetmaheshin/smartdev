<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth; 
class EnsureEmailIsVerified
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

        if (Auth::check() && !Auth::user()->hasVerifiedEmail() && Auth::user() instanceof MustVerifyEmail) {

            return $request->expectsJson()
                        ? abort(403, 'Your email address is not verified.')
                        : redirect()->route('verification.notice');
        }


        return $next($request);
    }
}
