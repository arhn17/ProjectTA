<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;

class HistoryTopupController extends Controller
{
   public function index()
   {
   		$history_topups = HistoryTopup:: all();
   		return view('pages.HistoryTopup.index', compact('$history_topups'))
   }

   public function create()
   {

   }

   public function store(requet $request)
   {

   }

   public function store(Request $request)
    {
    	$history_topup = new Transaksi();
    	$history_topup->kategori = $request->kategori;
    	$history_topup->saldo = $request->saldo;
    	$history_topup->save();

    	return redirect(route('history_topup.index'));
    }

}
