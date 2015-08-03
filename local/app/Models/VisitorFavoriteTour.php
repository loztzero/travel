<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Input;
use DateTime;
use App\Emodel;
use Validator;
class VisitorFavotiteTour extends Emodel {
	protected $table = 'VST010';

	public static function rules($data)
	{
		$error = array();
		$rules = array(
			'vst001_id'     => 'required',
            'tr001_id'      => 'required',
        );

		$messages = array(
            'vst001_id.required'    => 'Profile pengunjung harus ada',
            'tr001_id.required'		=> 'Profil Tur harus terpilih',
		);
		
        $v = Validator::make($data, $rules, $messages);
        if($v->fails()){
    		$error = $v->errors()->all();
        }

		return $error;
	}

	public function doParams($object, $data)
	{
		$object->vst001_id      = Input::get('vst001Id');
		$object->tr001_id    	 = Input::get('tr001Id');
		return $object;
	}

}