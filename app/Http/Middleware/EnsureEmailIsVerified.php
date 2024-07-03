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
        // if(Auth::check()){
        //     if(!Auth::user()->hasVerifiedEmail()){
        //         return $request->expectsJson()
        //         ? abort(403, 'Your email address is not verified.')
        //         : redirect()->route('auth.verify');
        //     }
        // }else{
        //     return $request->expectsJson()
        //                 ? abort(403, 'Your email address is not verified.')
        //                 : redirect()->route('auth.verify');
        // }

        if (Auth::check() && !Auth::user()->hasVerifiedEmail() ) {
            return $request->expectsJson()
                        ? abort(403, 'Your email address is not verified.')
                        : redirect()->route('auth.verify');
        }
        return $next($request);
    }
}
