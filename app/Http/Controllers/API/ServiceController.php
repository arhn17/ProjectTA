<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class ServiceController extends Controller
{
    public function get_detail_category(Request $request){
    	return Service::where('tipe', $request->input('category'))->get();
    }
}
