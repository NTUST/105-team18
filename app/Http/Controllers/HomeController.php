<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Teams;
use App\models\Stumap;
use App\models\scoreMod;
use Illuminate\Support\Facades\Input;
use Session;

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


    public function score(){
        $myscores = scoreMod::where('from_no',Session::get('team_no'))->get();

        $scores = [];

        foreach ($myscores as $key => $value) {
            $scores[$value->to_no] = [
                'isScored'=>1,
                'score'=>[
                    $value->layout,
                    $value->design,
                    $value->technology,
                    $value->idea,
                    $value->other
                ]
            ];
        }

        for ($i=1; $i < 22; $i++) {
            if (!isset($scores[$i])) {
                $scores[$i] = [
                    'isScored'=>0,
                    'score'=>[
                        0,0,0,0,0
                    ]
                ];
            }
        }
        // return response()->json(Teams::getAllTeam());
        return view(
            'score',
            [
                'teamdata'=>Teams::getAllTeam(),
                'scoreData'=>$scores
            ]
        );
    }
    public function edit(){
        $this->middleware('auth');
    }

    public function storescore($teamno){
        scoreMod::insert([
            "from_no"=>Session::get('team_no'),
            "to_no"=>$teamno,
            "layout"=>Input::Get('layout'),
            "design"=>Input::Get('design'),
            "technology"=>Input::Get('technology'),
            "idea"=>Input::Get('idea'),
            "other"=>Input::Get('other')
        ]);


        return "OK";
    }
}
