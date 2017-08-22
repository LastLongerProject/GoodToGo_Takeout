<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;

class MainController extends Controller
{
    //
    public function index($slug) {

		$vendor = Vendor::where('slug', $slug)->first();
		if($vendor){
		return view('main')->with('vendor', $vendor);
		}
		else{
			abort(404);
		}
    }

    public function contacts(){

    	
    }

}
