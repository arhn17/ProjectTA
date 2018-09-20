<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use App\Transaksi;
use App\HistoryTopup;
use App\Service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pelanggan'] = count(Pelanggan::where('user_id', '!=', 1)->get());
        $data['transaksi'] = count(Transaksi::all());
        $data['topup'] = count(HistoryTopup::all());
        $data['service'] = count(Service::all());
        return view('pages.home', $data);
    }
}
