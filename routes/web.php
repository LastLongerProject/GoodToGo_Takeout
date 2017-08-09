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

Route::get('/', function(){ return 123; });
Route::get('/{slug}', 'ListController@index')->name('list');

Route::get('/{slug}/lend', 'LendController@index')->name('lend');
Route::post('/{slug}/lendPhoneCheck', 'LendController@lendPhoneCheck');

Route::post('/{slug}/lendContainerCreate', 'LendController@lendContainerCreate');

Route::post('/{slug}/customerCreate', 'LendController@customerCreate');

Route::get('/{slug}/recover', 'RecoverController@index')->name('recover');

