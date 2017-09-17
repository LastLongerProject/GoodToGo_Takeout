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
Route::get('/', 'AdminController@vendorlist');


Route::prefix('vendor')->group(function () {
	/* Vendor Menu Route */
	Route::get('{slug}', 'MainController@index')->name('main');

	/* Lend Container Route */
	Route::get('{slug}/lend', 'LendController@index')->name('lend');
	Route::get('{slug}/addmember', 'LendController@addmember')->name('addmember');
	Route::post('{slug}/lendPhoneCheck', 'LendController@lendPhoneCheck');
	Route::post('{slug}/lendContainerCreate', 'LendController@lendContainerCreate');
	Route::post('{slug}/customerCreate', 'LendController@customerCreate');

	/* Recover Container Route */
	Route::get('{slug}/recover', 'RecoverController@index')->name('recover');
	Route::post('{slug}/recoverContainer', 'RecoverController@recoverContainer');

	/* Vendor Status Route */
	Route::get('{slug}/status', 'StatusController@index')->name('status');
	Route::get('{slug}/lendstatus', 'StatusController@lendstatus')->name('lendstatus');
	Route::get('{slug}/recoverstatus', 'StatusController@recoverstatus')->name('recoverstatus');

	/* Vendor Contacts Route */
	Route::get('{slug}/contacts', 'MainController@contacts')->name('contacts');
});




/* Admin Route */
Route::prefix('backstage')->group(function () {
	Route::get('/', 'AdminController@index')->name('admin');
	Route::get('record', 'AdminController@record')->name('record');
	Route::get('importfile', 'AdminController@importfile')->name('import');
	Route::post('importaction', 'AdminController@importaction');
	Route::get('exportfile', 'AdminController@exportFile')->name('export');
	Route::get('status', 'AdminController@status')->name('bstatus');
	Route::get('update', 'AdminController@update')->name('update');
	Route::get('zxrecord', 'AdminController@zxrecord')->name('zxrecord');
	Route::post('importzx', 'AdminController@importzx')->name('importzx');
	Route::post('updateVendor', 'AdminController@updateVendor');
});

