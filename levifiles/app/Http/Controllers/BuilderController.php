<?php namespace App\Http\Controllers;

use Illuminate\Routing\UrlGenerator;
use Input;
use DB;
use Session;
use Redirect;
use Hash;
class BuilderController extends Controller {

	public function getIndex()
	{
		echo "<pre>";
		//$result = DB::select(DB::raw('SHOW COLUMNS FROM users'));
		$result = DB::select(DB::raw('select * from information_schema.tables where TABLE_SCHEMA = "boardingpassku"
			order by TABLE_NAME '));
		print_r($result);
		echo "</pre>";
		return view('builder.builder-browse', array('tables' => $result));
	}

	public function getFields($table)
	{
		echo "<pre>";
		$result = DB::select(DB::raw('SHOW COLUMNS FROM ' . $table));
		print_r($result);
		echo "</pre>";
		echo '"bebek"';
		//return view('builder.builder-browse', array('tables' => $result));
	}

}
