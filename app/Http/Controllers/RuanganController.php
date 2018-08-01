<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
use App\DetailPerawatan;
use Validator;

class RuanganController extends Controller
{
	public function get_all ()
	{
		return Ruangan::all();
	}
	
    public function index ()
    {
		$data['ruangan'] = Ruangan::all();
		$data['save'] = "";
		return view('pages.ruangan.index', $data);
    }

    public function new ()
    {
		$data['save'] = "";
		return view('pages.ruangan.new', $data);
    }

	public function input(Request $request)
	{
		$nama_ruang = $request->input('nama_ruang');
		$status = $request->input('status');

		$request->validate([
			"nama_ruang" => "required",
			"status" => "required"
		]);

		Ruangan::insertGetId([
			"nama_ruang" => $nama_ruang,
			"status" => $status
		]);

		$data['save'] = "success";
		return view('pages.ruangan.new', $data);
	}

	public function destroy($id)
	{
		$detail_perawatan = DetailPerawatan::where('ruangan_id', $id)->get();

		if (count($detail_perawatan) > 0) 
		{
			$data['ruangan'] = Ruangan::all();
			$data['save'] = "error";
			return view('pages.ruangan.index', $data);
		}
		else
		{
			Ruangan::where('id', $id)->delete();
			$data['ruangan'] = Ruangan::all();
			$data['save'] = "success";
			return view('pages.ruangan.index', $data);
		}
	}

	public function change_status ($id, $status)
	{
		Ruangan::where('id', $id)->update(['status' => $status]);
		$data['ruangan'] = Ruangan::all();
		$data['save'] = "success";
		return view('pages.ruangan.index', $data);
	}
}
