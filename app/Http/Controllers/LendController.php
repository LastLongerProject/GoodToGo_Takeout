<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vendor;
use App\Customer;
use App\Container;

class LendController extends Controller
    {
        public function index($slug){
            return view('lend');
        }

        public function lendPhoneCheck(request $request ,$slug) {
        if($request->phone) {
            if($customer = Customer::where('phone', $request->phone)->first()){
                    return \Response::json(['success' => '此用戶存在！'], 200); 
                }
                else{
                      return \Response::json(['error' => '此用戶還未註冊，是否進行註冊'], 404); 
                }
            }
        else {
            return \Response::json(['error' => '請填寫手機號碼'], 404); 
        	}
        }

        public function customerCreate(request $request,$slug){


            if($request->phone != null){
                $customer = new Customer;
                $customer->phone = $request->phone;

                 if($customer->save()){
                    return \Response::json(['success' => '註冊成功！'], 200);
                }
            else {
                    return \Response::json(['error' => '發生錯誤'], 500);
                }
            }
            else {
                return \Response::json(['error' => '請填寫號碼'], 500);
            }

            }
            
            public function lendContainerCreate(request $request, $slug){

            if($request->phone){
            $vendor = Vendor::where('slug',$slug)->first();
            $customer = Customer::where('phone',$request->phone)->first();

            
            $n_container = new Container;
            $n_container->vendor_id = $vendor->id;
            $n_container->customer_id = $customer->id;
            $n_container->number = $request->number; 
            $n_container->status = 1;
            $n_container->save();
            
            if($n_container->save()){
                return \Response::json(['success' => '紀錄成功'], 200);
            }
            else {
                return \Response::json(['error' => '發生錯誤'], 500);
            }
        }
        else{
        	return \Response::json(['error' => '請填寫杯子編號'], 500);
        }

            }
            
        }