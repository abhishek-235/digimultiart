<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class AuthenticateSeller
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
        //return $next($request);
        //If request does not comes from logged in seller
       //then he shall be redirected to Seller Login page
       if (! Auth::guard('web_admin')->check()) {
           return redirect('seller_login');
       }

       return $next($request);
    }
}
