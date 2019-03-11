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

Route::get('foo',function(){
    return "Hello World";
});

// Route::any('find',function(){
//    // return "This is a good World";
//     return view('welcome');
// });

Route::get('/user/{id}','UserController@show')
->where('id','[0-9]+');
// Route::get('user/{id}',[
//     'uses'=>'UserController@show',
//     'as'=>'userinfo/{id}'
//    ]);