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
		return view('user.user-browse', array('page' => 'user'));
	}

	public function getDetailUser()
	{
		return view('user.user-detail', array('page' => 'detail'));
	}

	public function getTampil(){
		//Helpers::mysqlID();

		$uuid = Uuid::generate(4);
		echo $uuid;
	}


}
