<?php namespace App\Http\Controllers;

use Illuminate\Routing\UrlGenerator;
class MainController extends Controller {

	public function getIndex()
	{
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

}
