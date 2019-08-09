<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
    	$data['honda'] = \DB::table('t_produk_all')
    	->get();
    	return view ('merk/honda', $data);   	
	}
}
