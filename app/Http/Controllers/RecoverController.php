<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;

class RecoverController extends Controller
{
    //
    public function index($slug){
		$vendor = Vendor::where('slug', $slug)->first();
    	return view('recover')->with('vendor',$vendor);


    }
}
