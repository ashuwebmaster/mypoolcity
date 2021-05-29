<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class UserAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        $auth_user = '';
		if(session()->has('user')){
			$auth_user = $request->session()->get('user');
		}
        view()->share('auth_user', $auth_user);
        return $next($request);
    }
}
