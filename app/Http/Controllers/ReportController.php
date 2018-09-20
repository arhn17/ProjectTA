<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use Excel;
use PHPExcel_Worksheet_Drawing;
use Barryvdh\DomPDF\Facade as PDF;

class ReportController extends Controller
{
    public function index(Request $request)
    {
    	$start_date = $request->input('start_date');
    	$end_date = $request->input('end_date');

    	if ($start_date == "" || $end_date == "") {
    		$data['transaksis'] = Transaksi::with('user', 'detail_perawatan', 'pelanggan', 'pelanggan.user', 'diskon')->where('status', 2)->orderby('id', 'desc')->get();
    	}
    	else{
    		$data['transaksis'] = Transaksi::with('user', 'detail_perawatan', 'pelanggan', 'pelanggan.user', 'diskon')
    							->where('trans_date', '>=', "{$start_date}")
                    			->where('trans_date', '<=', "{$end_date}")
                                ->where('status', 2)
                    			->orderby('id', 'desc')
                    			->get();
    	}
    	$data['start_date'] = $start_date;
    	$data['end_date'] = $end_date;
    	return view('pages.report.index', $data);
    }

    public function page_download() {

        $start_date = request('start_date', '');
        $end_date = request('end_date', '');
        $file = request('file');
        
        if($file == 'xls' || $file == 'csv'){
            $file = request('file');

            Excel::create('Report', function($excel) use ($start_date, $end_date) {
                $excel->sheet('Sheet 1', function($sheet) use ($start_date, $end_date) {
                    $objDrawing = new PHPExcel_Worksheet_Drawing;
                    $objDrawing->setPath(public_path('template/images/logo.jpeg')); //your image path
                    $objDrawing->setCoordinates('A1');
                    $objDrawing->setHeight(60);
                    $objDrawing->setWorksheet($sheet);
                    $objDrawing->setOffsetX(10);

                    $data['transaction'] = $this->get_transactions($start_date, $end_date);
                    $data['start_date'] = $start_date;
                    $data['end_date'] = $end_date;

                    $sheet->loadView('pages.report.download', $data);

                    return view('pages.report.download', $data);
                });
            })->export($file); 
        } 
        else if ($file == 'pdf') {

            $data['transaction'] = $this->get_transactions($start_date, $end_date);
            $data['start_date'] = $start_date;
            $data['end_date'] = $end_date;

            $pdf = PDF::loadView('pages.report.downloadpdf', $data)->setPaper('A3', 'landscape');
            return $pdf->download('Report - '. $start_date .'-'. $end_date .'.pdf');
        }
        else{
            $file = 'csv';

            Excel::create('Report', function($excel) use ($start_date, $end_date) {
                $excel->sheet('Sheet 1', function($sheet) use ($start_date, $end_date) {
                    $objDrawing = new PHPExcel_Worksheet_Drawing;
                    $objDrawing->setPath(public_path('template/images/logo.jpeg')); //your image path
                    $objDrawing->setCoordinates('A1');
                    $objDrawing->setHeight(60);
                    $objDrawing->setWorksheet($sheet);
                    $objDrawing->setOffsetX(10);

                    $data['transaction'] = $this->get_transactions($start_date, $end_date);
                    $data['start_date'] = $start_date;
                    $data['end_date'] = $end_date;

                    $sheet->loadView('pages.report.download', $data);

                    return view('pages.report.download', $data);
                });
            })->export($file); 
        }
    }

    private function get_transactions($start_date, $end_date){
        return Transaksi::with('user', 'detail_perawatan', 'pelanggan', 'pelanggan.user', 'diskon')
                                ->where('trans_date', '>=', "{$start_date}")
                                ->where('trans_date', '<=', "{$end_date}")
                                ->where('status', 2)
                                ->orderby('id', 'desc')
                                ->get();
    }
}
