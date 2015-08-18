<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Input;
use DateTime;
use App\Emodel;
use Validator;
class VisitorPhotoAlbum extends Emodel {
	protected $table = 'VST020';

	public static function rules($data)
	{
		$error = array();
		$rules = array(
			'photo'      	=> 'required',
            'title'      	=> 'required',
        );

		$messages = array(
            'photo.required'		=> 'File photo must be uploaded',
            'title.required'		=> 'Title is required',
		);
		
        $v = Validator::make($data, $rules, $messages);
        if($v->fails()){
    		$error = $v->errors()->all();
        }

		return $error;
	}

	public function doParams($object, $data)
	{
		$object->mst001_id = Auth::user()->id;
		$object->line_number = $this->getMaxLineNumber();
		$object->photo 	= $data['photo'];
		$object->title 	= $data['title'];
		return $object;
	}

	private function getMaxLineNumber(){
		$result = VisitorPhotoAlbum::max('line_number')->where('mst001_id', '=', Auth::user()->id);
		if($result != null){
			return $result->get()->line_number + 1;
		}

		return 1;
	}

}