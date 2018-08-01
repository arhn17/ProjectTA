<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\User;
use App\Pelanggan;
use App\Service;
use App\Paket;
use App\Therapist;
use App\Ruangan;
use App\DetailPerawatan;
use App\Diskon;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
     public function index()
    {
    	$transaksis = Transaksi::with('user', 'detail_perawatan', 'pelanggan', 'pelanggan.user', 'diskon')->get();
        //dd($transaksis);
    	return view('pages.transaksi.index',compact('transaksis'));
    }

    public function create()
    {
        $data['pelanggan'] = Pelanggan::with('user')->get();
        $data['diskon'] = Diskon::all();

    	return view('pages.transaksi.create', $data);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $service = $request->input('service');
        $package = $request->input('package');
        $coustumer = $request->input('pelanggan_id');
        $diskon = $request->input('diskon');
        $fee = 0;

        if ($service != null) {
            foreach ($service as $key => $value) {
                $service_detail = Service::where('id', $value)->first();
                
                if ($coustumer == 1) $fee += $service_detail->tarif_normal;
                else $fee += $service_detail->tarif_member;
            }
        }

        if ($package != null) {
            foreach ($package as $key => $value) {
                $package_detail = Paket::where('id', $value)->first();
                
                if ($coustumer == 1) $fee += $package_detail->tarif_normal;
                else $fee += $package_detail->tarif_member;
            }
        }

        /*if ($diskon != "") {
            $get_diskon = Diskon::where('id', $diskon)->first();
            $fee = $fee - (($fee * $get_diskon->nilai) / 100);
        }*/

        $transaksi_id = Transaksi::insertGetId([
                            'pelanggan_id' => $coustumer,
                            'user_id' => $user->id,
                            'durasi' => $request->input('duration'),
                            'total' => $fee,
                            'status' => 0,
                            'diskon_id' => $diskon,
                            'created_at' => now()
                        ]);

        if ($package != null) {
            foreach ($package as $key => $value) {
                $var_service = $request->input('package_service'.$key);
                $var_therapist = $request->input('therapist_service_package'.$key);
                $var_room = $request->input('ruangan_service_package'.$key);

                if ($var_service != null) {
                    foreach ($var_service as $keys => $values) {
                        DetailPerawatan::insertGetId([
                            'transaksi_id' => $transaksi_id,
                            'therapist_id' => $var_therapist[$keys],
                            'service_id' => $values,
                            'ruangan_id' => $var_room[$keys],
                            'paket_id' => $value
                        ]);
                    }
                }
            }
        }

        if ($service != null) {
            foreach ($service as $key => $value) {
                $var_therapist = $request->input('therapist_service_package'.$key);
                $var_room = $request->input('ruangan_service_package'.$key);

                DetailPerawatan::insertGetId([
                    'transaksi_id' => $transaksi_id,
                    'therapist_id' => $var_therapist,
                    'service_id' => $value,
                    'ruangan_id' => $var_room,
                    'paket_id' => 0
                ]);
            }
        }

    	return redirect(route('transaksi.index'));
    }

    public function destroy ($id)
    {
        DetailPerawatan::where('transaksi_id', $id)->delete();
        Transaksi::where('id', $id)->delete();

        return redirect(route('transaksi.index'));
    }

    public function edit ($id)
    {
        $data['diskon'] = Diskon::all();
        $data['transaksi'] = Transaksi::with('user', 'detail_perawatan', 'pelanggan', 'pelanggan.user', 'diskon')
                                ->where('id', $id)
                                ->first();
        $data['transaksi_paket'] = DetailPerawatan::with('therapist', 'service', 'paket', 'ruangan')->where('transaksi_id', $id)
                                    ->where('paket_id', '!=', null)
                                    ->get();
        $data['transaksi_service'] = DetailPerawatan::with('therapist', 'service', 'ruangan')->where('transaksi_id', $id)
                                    ->where('paket_id', '=', null)
                                    ->get();
        
        $data['save'] = '';
        return view('pages.transaksi.edit', $data);
    }

    public function delete_paket ($transaksi_id, $paket_id)
    {
        $pakets = DetailPerawatan::with('transaksi', 'paket')->where('transaksi_id', $transaksi_id)->where('paket_id', $paket_id)->first();

        $min_fee = 0;
        if ($pakets->transaksi->pelanggan_id == 1) $min_fee += $pakets->paket->tarif_normal;
        else $min_fee += $pakets->paket->tarif_member;

        $transaksi = Transaksi::where('id', $transaksi_id)->first();

        $new_price = $transaksi->total - $min_fee;

        Transaksi::where('id', $transaksi_id)->update(['total' => $new_price]);

        DetailPerawatan::where('transaksi_id', $transaksi_id)->where('paket_id', $paket_id)->delete();

        return redirect('/transaksi/edit/'. $transaksi_id);
    }

    public function delete_service ($transaksi_id, $service_id)
    {
        $services = DetailPerawatan::with('transaksi', 'service')
                    ->where('transaksi_id', $transaksi_id)
                    ->where('paket_id', null)
                    ->where('service_id', $service_id)
                    ->first();

        $min_fee = 0;
        if ($services->transaksi->pelanggan_id == 1) $min_fee += $services->service->tarif_normal;
        else $min_fee += $services->service->tarif_member;

        $transaksi = Transaksi::where('id', $transaksi_id)->first();

        $new_price = $transaksi->total - $min_fee;

        Transaksi::where('id', $transaksi_id)->update(['total' => $new_price]);

        DetailPerawatan::where('transaksi_id', $transaksi_id)->where('paket_id', null)->where('service_id', $service_id)->delete();

        return redirect('/transaksi/edit/'. $transaksi_id);
    }
}
