<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YamahaController extends Controller
{
	public function index()
    {
   		$data['yamaha'] = \DB::table('t_produk_yamaha')
   		->get();
    	return view ('merk/yamaha', $data);
    }
}
