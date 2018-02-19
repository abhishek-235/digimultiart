<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Auth;
//use Validator;
//use Hash;
//use DB;
use Redirect;
//use App\Http\Requests\Request;
use Request;
//use View;

class AdminController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
		//$this->BannerModel = new Banner();
		//$this->CategoryModel = new Category();
	}

	function index() {
		return redirect('kwaleo/dashboard');
	}
	
	function login() {
		die("here");
		return redirect('/kwaleo/dashboard');
	}
	
	function logout() {
		//return redirect('/auth/logout/');	
		Auth::logout();
		return redirect('kwaleo/login');
	}
    
}
