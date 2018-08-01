<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\DetailPaket;
use App\DetailPerawatan;
use Validator;

class PaketController extends Controller
{
	public function list_paket()
	{
		$paket = Paket::all();
		return $paket;
	}

	public function index()
	{
		$data['paket'] = Paket::all();
		$data['save'] = "";
		return view('pages.paket.index', $data);
	}

	public function new()
	{
		$data['save'] = "";
		return view('pages.paket.new', $data);
	}

	public function input(Request $request)
	{

		$package_name = $request->input('package_name');
		$member_price = $request->input('member_price');
		$normal_price = $request->input('normal_price');
		$services = $request->input('service');

		$request->validate([
			"package_name" => "required",
			"member_price" => "required",
			"normal_price" => "required",
			"service" => "required"
		]);

		$paket_id = Paket::insertGetId([
					"nama_paket" => $package_name,
					"tarif_member" => $member_price,
					"tarif_normal" => $normal_price
		]);

		if ($paket_id != null) {
			foreach ($services as $key => $value) {
				DetailPaket::insertGetId([
					"paket_id" => $paket_id,
					"service_id" => $value
				]);
			}
		}

		$data['save'] = "success";
		return view('pages.paket.new', $data);
	}

	public function destroy($id)
	{
		$detail_perawatan = DetailPerawatan::where('paket_id', $id)->get();
		$data['paket'] = Paket::all();

		if (count($detail_perawatan) > 0) 
		{
			$data['save'] = "error";
			return view('pages.paket.index', $data);
		}
		else
		{
			DetailPaket::where('paket_id', $id)->delete();
			Paket::where('id', $id)->delete();
			$data['save'] = "success";
			return view('pages.paket.index', $data);
		}
	}
}
