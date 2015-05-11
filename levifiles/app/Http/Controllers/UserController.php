<?php namespace App\Http\Controllers;

use Illuminate\Routing\UrlGenerator;
class Usercontroller extends Controller {

	public function getIndex()
	{
		return view('user.user-browse', array('data' => 'bebek'));
	}

}
