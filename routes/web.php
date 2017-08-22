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

/* Vendor List Route*/
Route::get('/', 'AdminController@vendorList');

/* Vendor Menu Route */
Route::get('/vendor/{slug}', 'MainController@index')->name('main');

/* Lend Container Route */
Route::get('/vendor/{slug}/lend', 'LendController@index')->name('lend');
Route::get('/vendor/{slug}/addmember', 'LendController@addmember')->name('addmember');
Route::post('/vendor/{slug}/lendPhoneCheck', 'LendController@lendPhoneCheck');
Route::post('/vendor/{slug}/lendContainerCreate', 'LendController@lendContainerCreate');
Route::post('/vendor/{slug}/customerCreate', 'LendController@customerCreate');

/* Recover Container Route */
Route::get('/vendor/{slug}/recover', 'RecoverController@index')->name('recover');
Route::post('/vendor/{slug}/recoverContainer', 'RecoverController@recoverContainer');

/* Vendor Status Route */
Route::get('/vendor/{slug}/status', 'StatusController@index')->name('status');

/* Vendor Contacts Route */
Route::get('/vendor/{slug}/contacts', 'MainController@contacts')->name('contacts');

/* Admin Route */
Route::get('/backstage', 'AdminController@index')->name('admin');
Route::get('/backstage/container_type', 'AdminController@readExcel');