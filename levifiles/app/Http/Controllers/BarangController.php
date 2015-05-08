<?php 
namespace App\Http\Controllers;

use App\Models\Barang;
class BarangController extends Controller {
	
	public function index()
	{
		$barang = Barang::all();
		echo "<pre>";
		print_r($barang);
		echo "</pre>";
	}
	
}