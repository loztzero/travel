<?php namespace App\Http\Controllers;

use Illuminate\Routing\UrlGenerator;
class MainController extends Controller {

	public function index()
	{
		return view('home.home-browse', array('data' => 'bebek'));
	}

}
