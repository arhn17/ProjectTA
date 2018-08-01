<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailPaket;

class DetailPaketController extends Controller
{
	public function get_service ($id)
	{
		$detail_paket = DetailPaket::with('paket', 'service')->where('paket_id', $id)->get();

		return $detail_paket;
	}
}
