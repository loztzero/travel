<?php namespace App\Libraries;

use DB;
class Helpers { 

	public static function mysqlID(){
		$results = DB::select('select uuid() as z from dual ');
		return $results[0]->z;
	}

} 

?>