<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use App\User;

class PelangganController extends Controller
{
    public function index()
    {
    	$pelanggans = Pelanggan::all();
    	return view('pages.pelanggan.index',compact('pelanggans'));
    }

    public function create()
    {
    	$user = User::pluck('name','id');
    	return view('pages.pelanggan.create',compact('user'));
    }

    public function store(Request $request)
    {
    	$pelanggan = new Pelanggan();
    	$pelanggan->user_id = $request->user_id;
    	$pelanggan->alamat = $request->alamat;
    	$pelanggan->telepon = $request->telepon;
    	$pelanggan->save();

    	return redirect(route('pelanggan.index'));
    }
}
