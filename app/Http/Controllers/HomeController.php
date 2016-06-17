<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Teams;
use App\models\Stumap;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Response()->json(Teams::getAllTeam());
        return view(
            'home',
            [
                'teamdata'=>Teams::getAllTeam()
            ]
        );
    }

    public function detail($teamno){
        return view(
            'detail',
            [
                'teamdata'=>Teams::getTeamDetail($teamno),
                'memberdata'=>Stumap::where('team_no',$teamno)->get()
            ]
        );
    }


    public function score($teamno){
        return view(
            'score',
            [
                'teamdata'=>Teams::getTeamDetail($teamno),
                'scoreData'=>[
                    'isScored'=>0,
                    'score'=>[
                        0,0,0,0,0
                    ]
                ]
            ]
        );
    }
    public function edit(){
        $this->middleware('auth');
    }
}
