<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LendController extends Controller
{
    public function index(){
    	return view('lend');
    }
}
