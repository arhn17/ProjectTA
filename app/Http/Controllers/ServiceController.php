<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\DetailPaket;
use App\DetailPerawatan;

class ServiceController extends Controller
{
	public function index ()
	{
		$data['service'] = Service::all();
		return view('pages.service.index', $data);
	}

	public function destroy ($id)
	{
		$detail_paket = DetailPaket::where('service_id', $id)->get();
		$detail_perawatan = DetailPerawatan::where('service_id', $id)->get();

		if (count($detail_paket) > 0 || count($detail_perawatan) > 0) 
		{
			return redirect('/service');
		}
		else
		{
			Service::where('id', $id)->delete();
			return redirect('/service');
		}
	}

	public function show ()
	{
		$id = request('id');
		$data['service'] = Service::find($id);
		return view('pages.service.edit', $data);
	}

	public function update (Request $request)
	{
		$id = $request->input('id');
		$name = $request->input('service_name');
		$duration = $request->input('duration');
		$type = $request->input('type');
		$level = $request->input('level');
		$member_fee = $request->input('member_fee');
		$normal_fee = $request->input('normal_fee');

		$array_to_input = [
			'nama_services' => $name,
			'durasi' => $duration,
			'tipe' => $type,
			'level' => $level,
			'tarif_member' => $member_fee,
			'tarif_normal' => $normal_fee
		];

		$update_service = Service::where('id', $id)->update($array_to_input);
		if ($update_service == 1) {
			return redirect('service/show?id='.$id);
		}
	}

	public function new()
	{
		return view('pages.service.new');
	}

	public function input(Request $request)
	{
		$id = $request->input('id');
		$name = $request->input('service_name');
		$duration = $request->input('duration');
		$type = $request->input('type');
		$level = $request->input('level');
		$member_fee = $request->input('member_fee');
		$normal_fee = $request->input('normal_fee');

		$array_to_input = [
			'nama_services' => $name,
			'durasi' => $duration,
			'tipe' => $type,
			'level' => $level,
			'tarif_member' => $member_fee,
			'tarif_normal' => $normal_fee
		];

		$new_service = Service::InsertGetId($array_to_input);
		return redirect('service');
	}

	public function get_all ()
	{
		return Service::all();
	}
}
