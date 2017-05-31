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



Auth::routes();

Route::get('welcome', 'HomeController@inicio');


//route::group(['middleware'=>'auth'], function(){
		route::get('home',[
		'as' => 'home',
		'uses' => 'HomeController@inicio' ]);

		route::resource('user', 'UsersController');
		route::resource('typeuser', 'TypeUsersController');
		route::resource('cases', 'CasesController');
		route::resource('mean', 'MeansController');
		route::resource('media', 'MediasController');
		route::resource('position', 'PositionsController');
		route::resource('official', 'OfficialsController');
		route::resource('attention', 'AttentionsController');
//});

//route::group(['middleware'=>'guest'], function(){
		route::get('home',[
		'as' => 'home',
		'uses' => 'HomeController@inicio']);
//});

route::group(['middleware'=>'#'], function(){

});