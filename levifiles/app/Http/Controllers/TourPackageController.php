<?php namespace App\Http\Controllers;

use Illuminate\Routing\UrlGenerator;
class TourPackageController extends Controller {

	public function getIndex()
	{
		return view('tourpackage.tour-package-browse', array('data' => 'bebek'));
	}

	public function getTourDetail()
	{
		return view('tourpackage.tour-package-detail', array('data' => 'bebek'));
	}

	public function getInputTourDetail()
	{
		return view('tourpackage.tour-package-input-detail', array('data' => 'bebek'));
	}


}
