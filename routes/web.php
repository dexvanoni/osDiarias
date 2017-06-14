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

//route to get the log in form
   Route::get('/', array('uses' => 'HomeController@index'));

   //route to process the log in form
   Route::post('/', 'LogInController@doLogin');

   Route::resource('ficha', 'DashboardController', ['except' => 'show']);
