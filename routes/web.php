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
    return view('welcome')->with('greeting',"you!");
});
Route::get('abc',function(){
    return view('abc');
});
    //https://qiita.com/33yuki/items/7bab0d596ae9a0930f18
Route::get('/abc', 'AbcController@index');

Route::get('/study', function(){
    return view('index');
});

Route::resource('posts', 'PostsController');
