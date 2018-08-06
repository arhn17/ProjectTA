<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use App\User;
use Validator;

class PelangganController extends Controller
{
    public function index()
    {
    	$pelanggans = Pelanggan::where('user_id', '!=', 1)->get();
    	return view('pages.pelanggan.index',compact('pelanggans'));
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
            "password" => "required"
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
        $pelanggan->saldo = 0;
        $pelanggan->reg_date = now()->toDateString();
        $pelanggan->save();

        $data['save'] = 'success';
        return view('pages.pelanggan.create', $data);
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

        $roles = pelanggan::where('id', $pelanggan_id)->first();

        if ($roles->user_id == 0) {
            $role = $request->role;

            if ($role == 0) {
                $request->validate([
                    "nama" => "required",
                    "telepon" => "required"
                ]);

                pelanggan::where('id', $pelanggan_id)->update([
                            "nama" => $request->nama,
                            "alamat" => $request->alamat,
                            "telepon" => $request->telepon
                        ]);
            }
            else {
                $request->validate([
                    "nama" => "required",
                    "email" => "required|email|unique:users,email",
                    "password" => "required",
                    "telepon" => "required"
                ]);

                $user_id = User::insertGetId([
                        "name" => $request->nama,
                        "email" => $request->email,
                        "password" => bcrypt($request->password),
                        "role" => 3,
                        "status" => 0,
                        "created_at" => now()
                    ]);

                pelanggan::where('id', $pelanggan_id)->update([
                            "user_id" => $user_id,
                            "nama" => $request->nama,
                            "alamat" => $request->alamat,
                            "telepon" => $request->telepon
                        ]);
            }
        }
        else {
            $request->validate([
                "nama" => "required",
                "telepon" => "required"
            ]);

            pelanggan::where('id', $pelanggan_id)->update([
                        "nama" => $request->nama,
                        "alamat" => $request->alamat,
                        "telepon" => $request->telepon
                    ]);
        }

        $data['pelanggan'] = Pelanggan::with('user')->where('id', $pelanggan_id)->first();
        $data['save'] = 'success';
        return view('pages.pelanggan.edit', $data);
    }
}
