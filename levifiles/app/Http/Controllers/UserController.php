<?php namespace App\Http\Controllers;

use Illuminate\Routing\UrlGenerator;
use Input;
use Request;
use App\User;
use App\Libraries\Helpers;
use Uuid;
use Hash;
class Usercontroller extends Controller {

	public function getIndex()
	{
		return view('user.user-browse', array('data' => 'bebek'));
	}

	public function getPassengers()
	{
		return view('user.user-browse', array('data' => 'bebek'));
	}

	public function getTampil(){
		//Helpers::mysqlID();

		$uuid = Uuid::generate(4);
		echo $uuid;
	}

	public function postSave(){

		$data = Input::all();
		$user = new User();
		$errorBag = $user->rules($data);
		
		if(count($errorBag) > 0){
			return redirect('main/register')
				->withInput(Request::except('Password', 'RePassword'))
				->with('errors', $errorBag);	
		} else {

			$userCode = User::where('UserCode' , '=', $data['UserCode'])->first();
			$userMail = User::where('Email' , '=', $data['Email'])->first();
			if($userCode != null){
				
				return redirect('main/register')
				->withInput(Request::except('Password', 'RePassword'))
				->with('errors', array('BoardingPassKu dengan ID <b>'.$data['UserCode'].'</b> telah digunakan'));

			} else if($userMail != null) {

				return redirect('main/register')
				->withInput(Request::except('Password', 'RePassword'))
				->with('errors', array('BoardingPassKu dengan Email <b>'.$data['Email'].'</b> telah digunakan'));

			}

			$user = new User();
			$user->UserCode = $data['UserCode'];
			$user->Password = Hash::make($data['Password']);
			$user->Email = $data['Email'];
			$user->save();

			return redirect('main/success');
		}

		
		// print_r($errorBag);
	}


}
