<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    
    return view('index',
            [
                "teamdata"=>[
                    [
                        "id"=>1,
                        "teamname"=>"第一組",
                        "projectname"=>"專案一",
                        "thumbnail"=>"/img/thumbnail.JPG"
                    ],
                    [
                        "id"=>2,
                        "teamname"=>"第二組",
                        "projectname"=>"專案二",
                        "thumbnail"=>"/img/thumbnail.JPG"
                    ],
                    [
                        "id"=>3,
                        "teamname"=>"第三組",
                        "projectname"=>"專案三",
                        "thumbnail"=>"/img/thumbnail.JPG"
                    ], 
                    [
                        "id"=>4,
                        "teamname"=>"第四組",
                        "projectname"=>"專案四",
                        "thumbnail"=>"/img/thumbnail.JPG"
                    ],
                    [
                        "id"=>5,
                        "teamname"=>"第五組",
                        "projectname"=>"專案五",
                        "thumbnail"=>"/img/thumbnail.JPG"
                    ],
                    [
                        "id"=>6,
                        "teamname"=>"第六組",
                        "projectname"=>"專案六",
                        "thumbnail"=>"/img/thumbnail.JPG"
                    ],
                ]
            ]
   );
            
});
Route::get('detail/team{teamNumber}', function ($teamNumber) {
    
    return view('detail',
            [
                "teamdata"=>[
                    [
                        "id"=>1,
                        "teamname"=>"第一組",
                        "projectname"=>"專案一",
                        "info"=>"大家好我是第一組，請投我們一票謝謝",
                        "thumbnail"=>"/img/thumbnail.JPG",
                        "teammembers"=>[0,1,2]
                    ],
                    [
                        "id"=>2,
                        "teamname"=>"第二組",
                        "projectname"=>"專案二",
                        "info"=>"大家好我是第二組，請投我們一票謝謝",
                        "thumbnail"=>"/img/thumbnail.JPG",
                        "teammembers"=>[3,4,5]
                    ],
                    [
                        "id"=>3,
                        "teamname"=>"第三組",
                        "projectname"=>"專案三",
                        "info"=>"大家好我是第三組，請投我們一票謝謝",
                        "thumbnail"=>"/img/thumbnail.JPG",
                        "teammembers"=>[6,7,8]
                    ], 
                    [
                        "id"=>4,
                        "teamname"=>"第四組",
                        "projectname"=>"專案四",
                        "info"=>"大家好我是第四組，請投我們一票謝謝",
                        "thumbnail"=>"/img/thumbnail.JPG",
                        "teammembers"=>[9,10,11]
                    ],
                    [
                        "id"=>5,
                        "teamname"=>"第五組",
                        "projectname"=>"專案五",
                        "info"=>"大家好我是第五組，請投我們一票謝謝",
                        "thumbnail"=>"/img/thumbnail.JPG",
                        "teammembers"=>[12,13,14]
                    ],
                    [
                        "id"=>6,
                        "teamname"=>"第六組",
                        "projectname"=>"專案六",
                        "info"=>"大家好我是第六組，請投我們一票謝謝",
                        "thumbnail"=>"/img/thumbnail.JPG",
                        "teammembers"=>[15,16,17]
                    ],
                ],
                "userdata"=>[
                    [
                        "username"=>"一號選手",
                        "usergit"=>"1@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"二號選手",
                        "usergit"=>"2@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"三號選手",
                        "usergit"=>"3@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"四號選手",
                        "usergit"=>"4@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"五號選手",
                        "usergit"=>"5@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"六號選手",
                        "usergit"=>"6@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"七號選手",
                        "usergit"=>"7@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"八號選手",
                        "usergit"=>"8@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"九號選手",
                        "usergit"=>"9@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"十號選手",
                        "usergit"=>"10@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"十一號選手",
                        "usergit"=>"11@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"十二號選手",
                        "usergit"=>"12@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"十三號選手",
                        "usergit"=>"13@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"十四號選手",
                        "usergit"=>"14@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"十五號選手",
                        "usergit"=>"15@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"十六號選手",
                        "usergit"=>"16@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                    [
                        "username"=>"十七號選手",
                        "usergit"=>"17@gmail",
                        "userImage"=>"/img/userImage.JPG"
                    ],
                ],
                "teamNumber" => $teamNumber-1
            ]
   );
            
});
// Github and basic Authentication Routes
Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('logout', 'Auth\AuthController@logout');


Route::get('/home', 'HomeController@index');
