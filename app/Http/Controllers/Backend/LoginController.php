<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//Auth facade
use Auth;
use Illuminate\Support\Facades\Input;
use Redirect;

class LoginController extends Controller
{
	//Where to redirect seller after login.
    protected $redirectTo = '/seller_home';

    //Trait
    use AuthenticatesUsers;

    //Custom guard for seller
    protected function guard()
    {
      return Auth::guard('web_admin');
    }

    //Shows seller login form
   	public function showLoginForm()
   	{
    	return view('backend.auth.login');
   	}

   	//function login() {
   	
        //if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')), Input::get('remember'))) {
   		/*if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
            return Redirect::to('/kwaleo/dashboard');
        } else {
            //Session::flash('error', Lang::get('message.error.invalid_login'));
            return Redirect::route('seller_login')->withInput();
        }*/
    
   		/*echo '<pre>';print_r($request); exit();
		$request->session()->regenerate();
		$this->clearLoginAttempts($request);
		return $this->authenticated($request, $this->guard()->user())
		?: redirect($this->redirectTo);*/
		//return redirect('/kwaleo/dashboard');
	//}
/*
	function logout() {
		die("logout");
		return redirect('/kwaleo/dashboard');
	}*/
}
