<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\RedirectClientTrait;

class ClientProfile
{
    use RedirectClientTrait;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (auth()->user()->is_admin == User::TYPE['client']) {
                $route = $this->redirectClient(auth()->user()->id);
                if ($route == 'dashboard') {
                    return $next($request);
                } else {
                    return redirect()->route($route);
                }
            }
        }

        return $next($request);
    }
}
