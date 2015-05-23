<?php namespace App\Http\Controllers;

use Illuminate\Routing\UrlGenerator;
use Input;
use Auth;
use Session;
use Redirect;
use Hash;
class MainController extends Controller {

	public function getIndex()
	{
		if(Auth::check()){
			echo "welcome".Auth::user()->UserCode;
		}

		return view('home.home-browse', array('data' => 'bebek'));
	}

	public function getRegister()
	{
		return view('login.register-input');
	}

	public function getLogin()
	{
		return view('login.login-input');
	}

	public function getLogout()
	{
		return view('login.logout');
	}

	public function getSuccess(){
		return view('login.success');
	}

	public function postValidateRegister(){
		print_r(Input::all());
	}


	//untuk user login
	public function postCheck(){
		
		$userdata = array(
			'UserCode' => Input::get('UserCode'),
			'password' => Input::get('password')
		);

		if(Auth::attempt($userdata, true)){
			return Redirect::to('/main');
		} else {
			Session::flash('error', 'User atau password salah');
			//return Redirect::to('main/login');
			print_r($userdata);
			print_r(Auth::check());
		}

	}

	public function logout(){
		Auth::logout();
		return Redirect::to('/');
	}

}
