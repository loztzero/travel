<?php namespace App\Http\Controllers;

use Input, Session, htmlentites;
use App\Models\Sample;
class Samplecontroller extends Controller {

	public function getIndex(){
		$sample = Sample::all();
		return view('sample.sample-browse')->with('sample', $sample);
	}

	public function getInput(){
		return view('sample.sample-input');
	}

	public function postSave(){
		$data = Input::all();
		$sample = new Sample();
		$errorBag = $sample->rules($data);
		
		if(count($errorBag) > 0){

			Session::flash('error', $errorBag);
			return redirect('sample/input')
				->withInput($data);	
		} else {

			$sample->doParams($sample, $data);
			$sample->save();
			return redirect('sample')->with('message', array('Data sample telah berhasil di buat'));
		}
	}
}
