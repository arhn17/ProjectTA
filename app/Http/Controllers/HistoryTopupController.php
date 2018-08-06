<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use App\HistoryTopup;
use Validator;

class HistoryTopupController extends Controller
{
  public function index()
   {
   		$data['topup'] = HistoryTopup::with('pelanggan', 'pelanggan.user')->get();
      $data['save'] = '';
   		return view('pages.topup.index', $data);
   }

  public function new()
  {
      $data['pelanggan'] = Pelanggan::with('user')->where('user_id', '!=', 1)->get();
      $data['save'] = 'success';
      return view('pages.topup.new', $data);
  }

  public function input(Request $request)
  {
    $pelanggan_id = $request->input('pelanggan');
    $nominal = $request->input('nominal');

    $request->validate([
      "pelanggan" => "required",
      "nominal" => "required"
    ]);

    HistoryTopup::insertGetId([
      "pelanggan_id" => $pelanggan_id,
      "nominal" => $nominal,
      "waktu_topup" => now()->toDateString()
    ]);

    $pelanggan = Pelanggan::where('id', $pelanggan_id)->first();
    $saldo = $pelanggan->saldo + $nominal;

    Pelanggan::where('id', $pelanggan_id)->update(['saldo' => $saldo]);

    $data['save'] = "success";
    return view('pages.ruangan.new', $data);
  }
}
