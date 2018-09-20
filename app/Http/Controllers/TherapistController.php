<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Therapist;
use App\DetailPerawatan;
use Validator;

class TherapistController extends Controller
{
	public function get_all ()
	{
		return Therapist::all();
	}

    public function index ()
    {
		$data['therapist'] = Therapist::all();
		$data['save'] = "";
		return view('pages.therapist.index', $data);
    }

    public function new ()
    {
		$data['save'] = "";
		return view('pages.therapist.new', $data);
    }

	public function input(Request $request)
	{
		$nama = $request->input('nama');

		$request->validate([
			"nama" => "required"
		]);

		Therapist::insertGetId([
			"nama" => $nama
		]);

		$data['therapist'] = Therapist::all();
		$data['save'] = "success";
		return view('pages.therapist.index', $data);
	}

	public function destroy($id)
	{
		$detail_perawatan = DetailPerawatan::where('therapist_id', $id)->get();

		if (count($detail_perawatan) > 0) 
		{
			$data['therapist'] = Therapist::all();
			$data['save'] = "error";
			return view('pages.therapist.index', $data);
		}
		else
		{
			Therapist::where('id', $id)->delete();
			$data['therapist'] = Therapist::all();
			$data['save'] = "success";
			return view('pages.therapist.index', $data);
		}
	}

	public function show($id){
		$data['save'] = "";
		$data['therapist'] = Therapist::where('id', $id)->first();
		return view('pages.therapist.detail', $data);
	}

	public function update(Request $request){
		Therapist::where('id', $request->id)->update(['nama' => $request->nama]);
		$data['save'] = "success";
		$data['therapist'] = Therapist::where('id', $request->id)->first();
		return view('pages.therapist.detail', $data);
	}
}
