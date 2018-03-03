<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('abd',function (){
    return '<center><a href="walid">Go To waleed profile</a> <h1>welcome to waleed \'s web app in laravel 5</h1></center>';
});
Route::get('walid',function(){
    return '<center><a href="abd">Go To Home</a><br> welcome to waleed abd elsabour<br><img src="1478639388273.jpg"> </center>';
});
Route::get('walid/{anything}',function($anything){
    return '<center>welcome to waleed abd elsabour'.$anything.' </center>';
})->where ('anything','[0-9]+');
//Basic controller
/*
Route::get('library','sectionController@index');
Route::get('library/create','sectionController@createnewsection');
Route::get('library/{sectionName}','sectionController@showsection');
*/
//Restful controller
Route::controller('library','sectionController');