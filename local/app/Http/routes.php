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

Route::controller('sample', 'SampleController');
Route::controller('main', 'MainController');
Route::controller('user', 'UserController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('duck', function()
{
	//echo Uuid::generate();
	
	$pdf = App::make('dompdf.wrapper');
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