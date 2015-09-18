<?php namespace App\Http\Controllers;

use Illuminate\Routing\UrlGenerator;
use Input, Auth, Request, Session, Redirect, Hash;
use App;
use App\User;
use App\Libraries\Helpers;
class HotelController extends Controller {

	public function getIndex()
	{
	
		$url = 'http://api.travelmart.com.cn/webservice.asmx/GetCountry?UserID=api&Password=888888&Lang=en';
		$countries = Helpers::xmlToJson($url);
		$countries = json_decode($countries);
		return view('hotel.hotel-browse')->with('countries', $countries);
		
	}

	public function getCities($country){

		$country = str_replace(' ', '%20', $country);
		$url = 'http://api.travelmart.com.cn/webservice.asmx/GetCity?UserID=api&Password=888888&Lang=en&Country='.$country.'&Province=&City=';
		// $url = 'http://api.travelmart.com.cn/webservice.asmx/GetCity?UserID=api&Password=888888&Lang=en&Country=China&Province=&City=';
		$return = Helpers::xmlToJson($url);

		//echo "<pre>";
		//print_r(json_decode($return)->Countrys->Country->Provinces->Province);
		$result = json_decode($return)->Countrys->Country->Provinces->Province;
		$cityList = array();

		// echo "<pre>";
		//print_r($result);
		if(is_array($result)){

			foreach($result as $key => $value){
				if(is_array($value->Citys->CityName)){
					foreach($value->Citys->CityName as $key2 => $value2){
						array_push($cityList, $value2 . ', ' . $value->ProvinceName);
					}
				} else {
					array_push($cityList, $value->Citys->CityName . ', ' . $value->ProvinceName);
				}
			}

		} else {

			if(is_array($result->Citys->CityName)){
				foreach($result->Citys->CityName as $key3 => $value3){
					array_push($cityList, $value3 . ', ' . $result->ProvinceName);
				}
			} else {
				array_push($cityList, $result->Citys->CityName . ', ' . $result->ProvinceName);
			}
			
		}

		return json_encode($cityList);
		
	}

	public function getHotels(){
		$url = 'http://api.travelmart.com.cn/webservice.asmx/GetHotel?UserID=api&Password=888888&Lang=en&Country=&Province=&City=Bali&HotelID=';
		$return = Helpers::xmlToJson($url);
		$result = json_decode($return);


		// $url = 'http://api.travelmart.com.cn/webservice.asmx/GetRoom?UserID=api&Password=888888&Lang=en&Country=&Province=&City=&HotelID='.$hotelId.'&RoomID=';
		// $return = Helpers::xmlToJson($url);
		// $result = json_decode($return);

		echo "<pre>";
		print_r($result);
	}

	public function postSearch(){
		$city = Input::get('city', null);
		if($city != null){

			$parser = explode(', ', $city);
			if(count($parser) < 2){
				abort(500, 'Unauthorized action.');
			} // else {
			// 	echo "city location ". $parser[1];
			// }
			//if(!empty($city)){
				// $url = 'http://api.travelmart.com.cn/webservice.asmx/GetHotel?UserID=api&Password=888888&Lang=id&Country=&Province=&City='.$city.'&HotelID=';
			$url = 'http://api.travelmart.com.cn/webservice.asmx/GetHotel?UserID=api&Password=888888&Lang=en&Country=&Province=&City='.$parser[0].'&HotelID=';
			$return = Helpers::xmlToJson($url);
			$result = json_decode($return);
			// $hotels = $result->Hotels;
			return view('hotel.hotel-browse-list')->with('hotels', $result);
			//}

		} else {
			abort(500, 'Unauthorized action.');
		}

	}

	public function getHotelRoomTrial($hotelId = '')
	{

		//$hotelId = Input::get('hotel', null);
		if($hotelId != null){

			$url = 'http://api.travelmart.com.cn/webservice.asmx/GetRoom?UserID=api&Password=888888&Lang=en&Country=&Province=&City=&HotelID='.$hotelId.'&RoomID=';
			$return = Helpers::xmlToJson($url);
			$result = json_decode($return);
			echo "<pre>";
			if(isset($result->Hotels)){
				print_r($result->Hotels->Rooms);
			} else {
				print_r($result);
			}

		} else {
			abort(500, 'Unauthorized action.');
		}
		
	}

	public function postHotelRoom()
	{
		$hotelId = Input::get('hotel', null);
		if($hotelId != null){

			$url = 'http://api.travelmart.com.cn/webservice.asmx/GetRoom?UserID=api&Password=888888&Lang=en&Country=&Province=&City=&HotelID='.$hotelId.'&RoomID=';
			$return = Helpers::xmlToJson($url);
			$result = json_decode($return);
			//echo "<pre>";
			if(isset($result->Hotels)){
				//print_r($result->Hotels->Rooms);
				return view('hotel.hotel-room-list')->with('rooms', $result->Hotels);
			} else {
				//print_r($result);
				return view('hotel.hotel-room-list')->with('rooms', array());
			}

		} else {
			abort(500, 'Unauthorized action.');
		}

	}

	public function getTrialRate(){
		$url = 'http://api.travelmart.com.cn/webservice.asmx/GetRate?UserID=api&Password=888888&Lang=en&Country=&Province=&City=&SupplyID=&HotelID=JD91737&Prod=1&roomid=&checkin=2012-12-21&checkout=2012-12-22';
		$return = Helpers::xmlToJson($url);
		$result = json_decode($return);
		echo "<pre>";
		print_r($result);
	}

}
