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
Route::get('/1',function(){
    return view('one');
});
Route::get('/2',function(){
    return view('two');
});
Route::get('/3',function(){
    return view('three');
});
Route::get('/4',function(){
    return view('four');
});
