<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class hi extends Controller
{
    public function a123(){
    	$a = [
    		"account"=>"123"
    	];
    	return view('welcome', $a);
    } 
}
