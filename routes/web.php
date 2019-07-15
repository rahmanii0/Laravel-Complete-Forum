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





//Social Auth

Route::get('{provider}/auth','SocialsController@auth')->name('Socialauth');
Route::get('{provider}/redirect','SocialsController@authCallback')->name('socialCallBack');


Route::group(['middleware'=>'auth'],function (){
   Route::resource('channels','ChannelsController');
});








Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
