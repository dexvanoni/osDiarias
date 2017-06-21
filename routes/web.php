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

Route::get('/account/sign-out', array(
  'as' => 'account-sign-out',
  'uses' => 'LogInController@getSignOut'
));

Route::resource('ficha', 'DashboardController', ['except' => 'show']);

Route::get('/dashboard', array(
  'as' => 'dashboard',
  'uses' => 'DashboardController@dash'
));

Route::post('/outro', array(
  'as' => 'outro',
  'uses' => 'LogInController@outro'
));

Route::get('ficha/{ficha}/print', array(
  'as' => 'ficha.impressao',
  'uses' => 'DashboardController@print'
));

Route::get('voltarPerfil', array(
  'as' => 'voltarPerfil',
  'uses' => 'LogInController@volta_perfil'
));

Route::get('verTodasOs', array(
  'as' => 'verTodasOs',
  'uses' => 'LogInController@volta_perfil'
));
