<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DetailPaket;
use App\Paket;
use App\Service;

class PaketController extends Controller
{
	public function get_all(){
		return Paket::all();
	}

	public function get_detail_paket(Request $request){
		return json_encode(DetailPaket::with('paket', 'service')->where('paket_id', $request->input('paket_id'))->get());
	}
}
