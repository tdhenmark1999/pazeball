<?php

namespace App\Laravel\Middleware\System;

use Closure, Session;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // $guard = 'user';
       
        if (!Auth::guard($guard)->check() ) {
            
            $redirect_uri = $request->url();
            $redirect_key = base64_encode($redirect_uri);
            session()->put($redirect_key, $redirect_uri);

            // return redirect()->route('frontend.auth.login', [$redirect_key]);
            return redirect()->route('system.auth.login');
        }

        return $next($request);
    }
}
