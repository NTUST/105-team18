<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'team';


	// return all teams.
	public static function getAllTeam(){
		return Teams::all();
	}

	// return all teams.
	public static function getTeamDetail($teamno){
		return Teams::where('team_no',$teamno)->get()->first();
	}
}
