<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
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
        if (Auth::guard($guard)->check()) {
        	
        	if ($request->ajax() || $request->wantsJson()) {
        		
        		return response()->json(["status"=>true,"msg"=>"Active session"],200);
        		
        	} else {
        		return redirect('/');
        	}
            
        }

        return $next($request);
    }
}
