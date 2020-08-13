<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware'=>'web'],function(){
Route::view('/home','Home');
Route::view('/layout','layout');
Route::view('/userlist','userlist');
Route::get('/userlist','LoginController@userlist');
Route::view('/registration','registration');
Route::post('/registration','LoginController@register');
Route::view('/login','login');
Route::post('/login','LoginController@login');
Route::get('/logout', function () {
    Session()->forget('user');
    return redirect('login');
});
 



Route::view('/signin','signin');
Route::post('/signin','LoginController@signin');


});