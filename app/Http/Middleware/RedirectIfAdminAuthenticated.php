<?php

namespace App\Http\Middleware;

use Closure;

//Auth Facade
use Auth;

class RedirectIfAdminAuthenticated
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
        //If request comes from logged in user, he will
        //be redirect to home page.
        if (Auth::guard()->check()) {
            return redirect('/home');
        }
        /*if (!Auth::guard('web_admin')->check()) {
            return redirect('seller_login');
        }*/

        //If request comes from logged in seller, he will
        //be redirected to seller's home page.
        if (Auth::guard('web_admin')->check()) {
            return redirect('/seller_home');
        }
        return $next($request);
    }
}
