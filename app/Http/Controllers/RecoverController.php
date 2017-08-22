<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vendor;
use App\Customer;
use App\Container;
use App\Container_type;

class RecoverController extends Controller
{
    //
    public function index($slug){
		$vendor = Vendor::where('slug', $slug)->first();
    	return view('recover')->with('vendor',$vendor);


    }
    public function recoverContainer(request $request, $slug){

    	$container = Container::where('number', $request->number)->where('status',1)->latest()->first();
        $container_type = Container_type::find($request->number);
        
        $recover_container = Container::where('number', $request->number)->where('status',0)->latest()->first();

        if($recover_container){
            if($recover_container->created_at > $container->created_at){
                return \Response::json(['error' => '杯杯編號 : <br>'.$container->number.' 沒有被出借'], 404);
            }
        }
        if(!$container_type){
                return \Response::json(['error' => '編號'. $request->number .'的杯杯不存在'], 404);
        }
    	if($container){
                $vendor = Vendor::where('slug',$slug)->first();
                $customer = Customer::find($container->customer_id);
                

                $o_container = new Container;
                $o_container->vendor_id = $vendor->id;
                $o_container->customer_id = $customer->id;
                $o_container->number = $request->number;
                $o_container->vendor_name = $vendor->name;
                $o_container->customer_phone = $customer->phone;
                $o_container->container_type_id = $container_type->id;
                $o_container->status = 0;
                
                if($o_container->save()){
    		return \Response::json(['success' => '杯杯編號 : <br>'.$container->number.' 回收成功'], 200);
                }
    	}
    	else {
    		return \Response::json(['error' => '杯杯編號 : <br>'.$request->number.' 沒有被出借'], 404);
    	}
    }
}
