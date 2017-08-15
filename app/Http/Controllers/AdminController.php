<?php

namespace App\Http\Controllers;

use Excel;
use Illuminate\Http\Request;
use App\Container_type;

class AdminController extends Controller
{
    public function index(){
    	    return view('admin');
    }

    public function readExcel(){
    	$fileName = "container_type.xlsx";
		Excel::filter('chunk')->load('storage/files/'.$fileName)->chunk(250, function($results) {
            foreach ($results as $row) {
                $container_type = Container_type::firstOrCreate(['id' => $row->名稱]);
                $container_type->id = $row->名稱;
                $container_type->type = $row->類型;
                $container_type->decoration = $row->樣式;
                $container_type->save();
	            }
		});
	}
}