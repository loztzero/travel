<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Input;
use DateTime;
use App\Emodel;
class Passenger extends Emodel {
	protected $table = 'MST002';

	public function doParams($model, $data)
	{
		//$data = Input::all();
		$model->title = isset($data['title']) ? $data['title'] : null;
		$model->first_name = isset($data['firstName']) ? $data['firstName'] : null;
		$model->middle_name = isset($data['middleName']) ? $data['middleName'] : null;
		$model->last_name = isset($data['lastName']) ? $data['lastName'] : null;
		if(isset($data['birthDate'])){
			$birthDate = new DateTime($data['birthDate']);
			$model->birth_date =  $birthDate->format('Y-m-d');	
		} else {
			$model->birth_date =  null;
		}
		
		$model->id_number = isset($data['idNumber']) ? $data['idNumber'] : null;

		if(isset($data['expireIdDate'])){
			$expireIdDate = new DateTime($data['expireIdDate']);
			$model->expire_id_date = $expireIdDate->format('Y-m-d');	
		} else {
			$model->expire_id_date =  null;
		}
		
		$model->passport_number = isset($data['passportNumber']) ? $data['passportNumber'] : null;

		if(isset($data['expiredPasportDate'])){
			$expiredPasportDate = new DateTime($data['expiredPasportDate']);
			$model->expired_passport_date = $expiredPasportDate->format('Y-m-d');	
		} else {
			$model->expired_passport_date = null;
		}
		
		$model->phone_number1 = isset($data['phoneNumber1']) ? $data['phoneNumber1'] : null;
		$model->phone_number2 = isset($data['phoneNumber2']) ? $data['phoneNumber2'] : null;
		
		return $model;
	}

	public function getMaxLineNumber($userId){
		$lineNumber = Passenger::where('mst001_id', '=', $userId)->max('line_number');
		if($lineNumber != null){
			return $lineNumber + 1;
		} else {
			return 1;
		}
	}

}