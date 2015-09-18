<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::filter('auth', function($route, $request)
{
    // Login check (Default)
    if (Auth::guest()) return Redirect::guest('/main');

});

Route::group(array('before' => 'auth'), function(){
	Route::controller('user', 'UserController');
});

Route::controller('builder', 'BuilderController');
Route::controller('main', 'MainController');
Route::controller('hotel', 'HotelController');

//Route::get('/', 'WelcomeController@index');
Route::controller('angular', 'AngularController');
Route::controller('tour-package', 'TourPackageController');
Route::controller('tour-order', 'TourOrderController');

// Route::controllers([
// 	'bebek' => 'TourPackageController',
// 	'tourorder' => 'TourZController',
// ]);

Route::get('home', 'HomeController@index');

Route::get('barang', 'BarangController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('duck', function()
{
	echo Uuid::generate();
	
	$pdf = App::make('dompdf');
	$pdf->loadHTML('<h1>Test</h1>');
	return $pdf->stream();
});

Route::get('excel', function()
{
	 Excel::create('Laravel Excel', function($excel) {

	$excel->sheet('Excel sheet', function($sheet) {

		$sheet->setOrientation('landscape');

	});

})->export('xls'); 
});
