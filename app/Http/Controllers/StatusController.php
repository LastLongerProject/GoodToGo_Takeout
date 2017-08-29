<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Vendor;
use App\Models\Container;
use App\Models\Container_type;
use App\Models\Customer;

class StatusController extends Controller
{
    //
    public function index($slug){
    	$p_360 = 0;
    	$p_480 = 0;

    	$today = Carbon::today();
        $tommrow = Carbon::tomorrow();

		$vendor = Vendor::where('slug', $slug)->first();

		$possess = Container::where('vendor_id', $vendor->id)->where('created_at','>',$vendor->updated_at)->where('status',1)->get();
        $possess_o = Container::where('vendor_id', $vendor->id)->where('created_at','>',$vendor->updated_at)->where('status',0)->get();

        if($possess->first()){
            foreach ($possess as $p3) {
                $temp3 = Container_type::where('id',round($p3->number))->where('decoration',360)->get();
                if($temp3->first()){
                    $p_360++; 
              }
            };

            foreach ($possess as $p4) {
                $temp4 = Container_type::where('id',round($p4->number))->where('decoration',480)->get();
                if($temp4->first()){
                    $p_480++; 
              }
            };
        }

        $es_360 = $vendor->possess_360 - $p_360;
        $es_480 = $vendor->possess_480 - $p_480;

		$lend_container = Container::where('vendor_id', $vendor->id)->where('created_at','>', $today)->where('created_at','<', $tommrow)->where('status',1)->count();
		$recover_container = Container::where('vendor_id', $vendor->id)->where('created_at','>', $today)->where('created_at','<', $tommrow)->where('status',0)->count();

    	return view('status')->with('vendor', $vendor)->with('lend', $lend_container)->with('recover',$recover_container)->with('possess_360', $es_360)->with('possess_480',$es_480);
    }
}
