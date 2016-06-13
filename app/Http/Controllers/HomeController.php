<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'home',
            [
                "teamdata"=>[
                    [
                        "teamname"=>"第一組",
                        "projectname"=>"專案一"

                    ],
                    [
                        "teamname"=>"第二組",
                        "projectname"=>"專案二"

                    ],
                    [
                        "teamname"=>"第三組",
                        "projectname"=>"專案三"

                    ]
                ]
            ]
        );
    }
}
