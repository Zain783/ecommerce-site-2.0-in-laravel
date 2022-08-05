<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    { //here i compare incoming request path if it is equal to login and request session has user data its mean we are already exists or user already exists
       // so we redirect to home page
    //    if($request->path()=="loginpanel" && $request->session()->has('user')){

    //     return redirect('/');
    // }
        return $next($request);
    }
}
