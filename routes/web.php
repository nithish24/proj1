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

//before accessing PagesController, one need to create controller using command
//within the view folder create the html file to be displayed
//write the functions inside the PagesController,php

Route::get('/index', 'PagesController@index' );

Route::get('/dashboard_admin', 'PagesController@dashboard_admin' );

Route::get('/dashboard_user', 'PagesController@dashboard_user' );
Route::get('details/summary','PostController@summary');
Route::get('details/{usn}/{cname}','PostController@show');
Route::resource('details','PostController');
