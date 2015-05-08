<?php namespace App\Http\Controllers;

use Illuminate\Routing\UrlGenerator;
class TourOrderController extends Controller {

	public function getIndex()
	{
		return view('tourorder.tour-order-browse', array('tourOrder' => array()));
	}

}
