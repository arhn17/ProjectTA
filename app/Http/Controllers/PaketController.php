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

		$data['paket'] = Paket::all();
		$data['save'] = "success";
		return view('pages.paket.index', $data);
	}

	public function destroy($id)
	{
		$detail_perawatan = DetailPerawatan::where('paket_id', $id)->get();

		if (count($detail_perawatan) > 0) 
		{
			$data['save'] = "error";
			$data['paket'] = Paket::all();
			return view('pages.paket.index', $data);
		}
		else
		{
			DetailPaket::where('paket_id', $id)->delete();
			Paket::where('id', $id)->delete();
			$data['save'] = "success";
			$data['paket'] = Paket::all();
			return view('pages.paket.index', $data);
		}
	}

	public function show($id){
		$data['package'] = Paket::where('id', $id)->first();
		$data['services'] = DetailPaket::with('service')->where('paket_id', $id)->get();
		$data['save'] = "";
		return view('pages.paket.detail', $data);
	}

	public function delete_detail($paket_id, $service_id){
		DetailPaket::where('paket_id', $paket_id)->where('service_id', $service_id)->delete();

		return redirect('/paket/show/'. $paket_id);
	}

	public function update(Request $request){
		$package_id = $request->input('package_id');
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

		Paket::where('id', $package_id)->update(['nama_paket' => $package_name, 'tarif_member' => $member_price, 'tarif_normal' => $normal_price]);

		foreach ($services as $key => $value) {
			DetailPaket::insertGetId([
				"paket_id" => $package_id,
				"service_id" => $value
			]);
		}

		return redirect('/paket/show/'. $package_id);
	}
}
