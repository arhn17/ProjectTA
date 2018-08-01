<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diskon;
use App\Transaksi;
use Validator;

class DiskonController extends Controller
{
    public function index ()
    {
		$data['diskon'] = Diskon::all();
		$data['save'] = "";
		return view('pages.diskon.index', $data);
    }

    public function new ()
    {
		$data['save'] = "";
		return view('pages.diskon.new', $data);
    }

	public function input(Request $request)
	{
		$deskripsi = $request->input('deskripsi');
		$nilai = $request->input('nilai');

		$request->validate([
			"deskripsi" => "required",
			"nilai" => "required"
		]);

		Diskon::insertGetId([
			"deskripsi" => $deskripsi,
			"nilai" => $nilai
		]);

		$data['save'] = "success";
		return view('pages.diskon.new', $data);
	}

	public function destroy($id)
	{
		$transaksi = Transaksi::where('diskon_id', $id)->get();

		if (count($transaksi) > 0) 
		{
			$data['diskon'] = Diskon::all();
			$data['save'] = "error";
			return view('pages.diskon.index', $data);
		}
		else
		{
			Diskon::where('id', $id)->delete();
			$data['diskon'] = Diskon::all();
			$data['save'] = "success";
			return view('pages.diskon.index', $data);
		}
	}
}
