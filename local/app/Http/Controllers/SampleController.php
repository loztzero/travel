<?php namespace App\Http\Controllers;

use Illuminate\Routing\UrlGenerator;
use Input, Request, Uuid, Hash, Auth, Redirect, Session;
use App\User;
use App\Models\UserDetail;
use App\Models\Passenger;
use App\Libraries\Helpers;
class Samplecontroller extends Controller {

	public function getIndex()
	{
		return view('layouts.frontpage');
	}

}
