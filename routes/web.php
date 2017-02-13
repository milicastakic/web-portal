<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/page', function (){
    return view('objave.show');
});
Route::get('/adminLogin', function (){
    return view('adminLogin');
});
Route::get('/adminLogin', 'AdminController@isLoggedIn');
Route::get('/adminPage', function (){
    return view('admin');
})->middleware('guest');
Route::group(['middleware' => ['web']], function(){
    Route::resource('objave', 'ObjaveController');
    Route::resource('kategorije', 'KategorijeController');
    Route::resource('adminCheck', 'AdminController@index');
    Route::post('/loginAdmin', 'AdminController@authenticate');
    Route::get('/adminLogout', 'AdminController@logout');
});