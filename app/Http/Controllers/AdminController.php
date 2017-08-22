<?php

namespace App\Http\Controllers;

use Excel;
use Illuminate\Http\Request;
use App\Container_type;
use App\Vendor;

class AdminController extends Controller
{
    public function index(){
    	    return view('admin');
    }

    public function vendorlist(){
        $list = Vendor::all();
        return view('vendorlist')->with('lists',$list);
    }

    public function readExcel(){
    	$fileName = "container_type.xlsx";
        $status = "成功";


        $allexcel = Excel::load('storage/files/'.$fileName, function($reader) {})->get();

		Excel::filter('chunk')->load('storage/files/'.$fileName)->chunk(250, function($results) {
            foreach ($results as $row) {

                $container_type = Container_type::firstOrCreate(['id' => $row->編號]);
                $container_type->id = $row->編號;
                $container_type->type = $row->類型;
                $container_type->decoration = $row->樣式;

                if($container_type->save()){ continue;}
                else{ break; $status="失敗"; return "失敗";}

	               }
                
		});
   return view("container_type")->with('status',$status);
         
	}
}