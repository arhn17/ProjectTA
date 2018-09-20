<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use App\User;
use App\Transaksi;
use Validator;

class PelangganController extends Controller
{
    public function index()
    {
    	$data['pelanggans'] = Pelanggan::where('user_id', '!=', 1)->get();
        $data['save'] = '';
    	return view('pages.pelanggan.index', $data);
    }

    public function create()
    {
        $data['save'] = '';
    	return view('pages.pelanggan.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "telepon" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required",
            "birth" => "required"
        ]);

        $user_id = User::insertGetId([
                "name" => $request->nama,
                "email" => $request->email,
                "password" => bcrypt($request->password),
                "role" => 3,
                "status" => 0,
                "created_at" => now()
            ]);

        $pelanggan = new Pelanggan();
        $pelanggan->user_id = $user_id;
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->telepon = $request->telepon;
        $pelanggan->tanggal_lahir = $request->birth;
        $pelanggan->saldo = 0;
        $pelanggan->reg_date = now()->toDateString();
        $pelanggan->save();

        $data['pelanggans'] = Pelanggan::where('user_id', '!=', 1)->get();
        $data['save'] = 'success';
        return view('pages.pelanggan.index', $data);
    }

    public function edit ($id)
    {
        $data['pelanggan'] = Pelanggan::with('user')->where('id', $id)->first();
        $data['save'] = '';
        return view('pages.pelanggan.edit', $data);
    }

    public function update (Request $request)
    {
        $pelanggan_id = $request->pelanggan_id;

        $request->validate([
            "nama" => "required",
            "telepon" => "required"
        ]);

        pelanggan::where('id', $pelanggan_id)->update([
                    "nama" => $request->nama,
                    "alamat" => $request->alamat,
                    "telepon" => $request->telepon,
                    "tanggal_lahir" => $request->birth
                ]);

        $data['pelanggan'] = Pelanggan::with('user')->where('id', $pelanggan_id)->first();
        $data['save'] = 'success';
        return view('pages.pelanggan.edit', $data);
    }

    public function delete($id){
        $check_trans = Transaksi::where('pelanggan_id', $id)->first();

        if ($check_trans == null) {
            $user = pelanggan::where('id', $id)->first();
            Pelanggan::where('id', $id)->delete();
            User::where('id', $user->user_id)->delete();
            $data['message'] = 0;
        }
        else{
            $data['message'] = 1;
        }
        return $data;
    }
}
