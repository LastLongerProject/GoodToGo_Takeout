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

Route::get('/', function(){
	abort(404);
});

Route::get('/vendor/{slug}', 'ListController@index')->name('list');

Route::get('/vendor/{slug}/lend', 'LendController@index')->name('lend');
Route::post('/vendor/{slug}/lendPhoneCheck', 'LendController@lendPhoneCheck');
Route::post('/vendor/{slug}/lendContainerCreate', 'LendController@lendContainerCreate');
Route::post('/vendor/{slug}/customerCreate', 'LendController@customerCreate');

Route::get('/vendor/{slug}/recover', 'RecoverController@index')->name('recover');
Route::post('/vendor/{slug}/recoverContainer', 'RecoverController@recoverContainer');

Route::get('/backstage', 'AdminController@index')->name('admin');