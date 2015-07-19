<?php namespace App\Http\Controllers;

use Illuminate\Routing\UrlGenerator;
use Input, Auth, Request, Session, Redirect, Hash;
use App\User;
class MainController extends Controller {

	public function getIndex()
	{
		if(Auth::check()){
			//echo "welcome".Auth::user()->email;
		}

		return view('home.home-browse', array('data' => 'bebek'));
	}

	public function getRegister()
	{
		return view('login.register-input');	
	}

	public function postSave(){

		$data = Input::all();
		$user = new User();
		$errorBag = $user->rules($data);
		
		if(count($errorBag) > 0){
			return redirect('main/register')
				->withInput(Request::except('password', 'repassword'))
				->with('errors', $errorBag);	
		} else {

			$userMail = User::where('email' , '=', $data['email'])->first();
			if($userMail != null) {

				return redirect('main/register')
				->withInput(Request::except('password', 'repassword'))
				->with('errors', array('BoardingPassKu dengan Email <b>'.$data['email'].'</b> telah digunakan'));

			}

			$user = new User();
			$user->password = Hash::make($data['password']);
			$user->email = $data['email'];
			$user->role = 'User';
			$user->save();

			return redirect('main/success');
		}

		
		// print_r($errorBag);
	}

	public function getLogin()
	{
		if(Auth::check()){
			return Redirect::to('/main');
		} else {
			return view('login.login-input');
		}
	}

	public function getLogout()
	{
		Auth::logout();
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
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);

		if(Auth::attempt($userdata)){
			return Redirect::to('/main');
		} else {
			Session::flash('error', 'Email atau password salah');
			return Redirect::to('main/login');
		}

	}

}
