<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GrahamCampbell\GitHub\Facades\GitHub;


class hi extends Controller
{
    public function test(){


        GitHub::me()->organizations();
        GitHub::repo()->show('GrahamCampbell', 'Laravel-GitHub');

    	return view('welcome', $a);
    }
}
