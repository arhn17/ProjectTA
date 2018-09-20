<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaksi;
use App\Pelanggan;
use App\DetailPerawatan;
use App\Therapist;
use App\Ruangan;
use App\Paket;
use App\DetailPaket;
use App\Service;

class TransactionController extends Controller
{
	public function get_by_user(Request $request){
		$user_id = $request->input('user_id');

		return Transaksi::with('pelanggan', 'user', 'diskon')->whereHas('pelanggan', function($query) use($user_id){
			$query->where('user_id', $user_id);
		})->orderBy('id', 'desc')->get();
	}

	public function get_booking(Request $request){
		$user_id = $request->input('user_id');

		return Transaksi::with('pelanggan', 'user', 'diskon')
						->whereHas('pelanggan', function($query) use($user_id){
								$query->where('user_id', $user_id);
							})
						->where('status', 0)
						->orderBy('id', 'desc')->get();
	}

	public function get_detail_transaction(Request $request){
		$transaksi_id = $request->input('transaksi_id');

		return DetailPerawatan::with('transaksi', 'service', 'paket')
						->where('transaksi_id', $transaksi_id)
						->get();
	}

	public function payment_e(Request $request){
		$transaksi_id = (int)$request->input('transaksi_id');

		$transaksi = Transaksi::with('diskon', 'pelanggan')->where('id', $transaksi_id)->where('status', '!=', 2)->first();

		if ($transaksi != null) {
			if ($transaksi->diskon_id == null) {
				$fee = $transaksi->total;
			}
			else{
				$fee = $transaksi->total - ($transaksi->total * $transaksi->diskon->nilai / 100);
			}

			if ($transaksi->pelanggan->saldo >= $fee) {
				$saldo = $transaksi->pelanggan->saldo - $fee;
				Transaksi::where('id', $transaksi_id)->update(['status' => 2]);
				Pelanggan::where('id', $transaksi->pelanggan->id)->update(['saldo' => $saldo]);
				return 0;
			}
			else{
				return 2;
			}
		}
		else return 1;
	}

	public function cancel_booking(Request $request){
		$transaksi_id = $request->input('transaksi_id');

		DetailPerawatan::where('transaksi_id', $transaksi_id)->delete();
		Transaksi::where('id', $transaksi_id)->delete();

		return 0;
	}

	public function new_booking_package(Request $request){
		$package_id = $request->input('package_id');
		$trans_date = $request->input('trans_date');
		$user_id = $request->input('user_id');

		$pelanggan = Pelanggan::where('user_id', $user_id)->first();
		$therapist = Therapist::all();
		$ruangan = Ruangan::all();

		$paket = Paket::where('id', $package_id)->first();
		$detailpaket = DetailPaket::where('paket_id', $package_id)->get();

		$transaksi_id = Transaksi::insertGetId([
						'pelanggan_id' => $pelanggan->id,
						'user_id' => $user_id,
						'total' => $paket->tarif_member,
						'status' => 0,
						'trans_date' => $trans_date
					]);

		for ($i=0; $i < count($detailpaket); $i++) { 
			DetailPerawatan::insertGetId([
				'transaksi_id' => $transaksi_id,
				'therapist_id' => $therapist[0]->id,
				'ruangan_id' => $ruangan[0]->id,
				'paket_id' => $package_id,
				'service_id' => $detailpaket[$i]->service_id
			]);
		}

		return 0;
	}

	public function new_booking_service(Request $request){
		$service_id = $request->input('service_id');
		$trans_date = $request->input('trans_date');
		$user_id = $request->input('user_id');

		$pelanggan = Pelanggan::where('user_id', $user_id)->first();
		$therapist = Therapist::all();
		$ruangan = Ruangan::all();

		$service = Service::where('id', $service_id)->first();

		$transaksi_id = Transaksi::insertGetId([
						'pelanggan_id' => $pelanggan->id,
						'user_id' => $user_id,
						'total' => $service->tarif_member,
						'status' => 0,
						'trans_date' => $trans_date
					]);

		DetailPerawatan::insertGetId([
			'transaksi_id' => $transaksi_id,
			'therapist_id' => $therapist[0]->id,
			'ruangan_id' => $ruangan[0]->id,
			'service_id' => $service_id
		]);

		return 0;
	}

	public function update_booking(Request $request){
		$treatment_id = $request->input('treatment_id');
		$transaksi_id = $request->input('transaksi_id');
		$type = $request->input('type');

		$therapist = Therapist::all();
		$ruangan = Ruangan::all();
		$transaksi = Transaksi::where('id', $transaksi_id)->first();

		if ($type == "package") {
			$paket = Paket::where('id', $treatment_id)->first();

			$fee = $transaksi->total + $paket->tarif_member;

			$detailpaket = DetailPaket::where('paket_id', $treatment_id)->get();

			Transaksi::where('id', $transaksi_id)->update(['total' => $fee]);

			for ($i=0; $i < count($detailpaket); $i++) { 
				DetailPerawatan::insertGetId([
					'transaksi_id' => $transaksi_id,
					'therapist_id' => $therapist[0]->id,
					'ruangan_id' => $ruangan[0]->id,
					'paket_id' => $treatment_id,
					'service_id' => $detailpaket[$i]->service_id
				]);
			}
			return 0;
		}
		else if ($type == "service") {
			$service = Service::where('id', $treatment_id)->first();

			$fee = $transaksi->total + $service->tarif_member;

			Transaksi::where('id', $transaksi_id)->update(['total' => $fee]);

			DetailPerawatan::insertGetId([
				'transaksi_id' => $transaksi_id,
				'therapist_id' => $therapist[0]->id,
				'ruangan_id' => $ruangan[0]->id,
				'service_id' => $treatment_id
			]);
			return 0;
		}
	}

}
