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

Route::get('/', 'Select2Controller@index');
Route::get('/cari', 'Select2Controller@loadData');

Route::get('admin',function(){
	return view('layouts.adminn');
});

Auth::routes();


	Route::get('/home', 'HomeController@index')->name('home');

	Route::group(['prefix'=>'adminn', 'middleware'=>['auth','role:admin']], function(){
	
	Route::resource('mobil','MobilController');
	// Route::get('daftarmobil','RentalController@daftarmobil')->name('daftarmobil');
	Route::resource('customer','CustomerController');
	Route::resource('supir','SupirController');
	Route::resource('rental','RentalController');
	Route::resource('kembali','KembaliController');
});

	Route::get('daftarmobil','RentalController@daftarmobil')->name('daftarmobil');

Route::resource('merk','MerkController');

// Route::get('user1',function(){
// 	return view('layouts.user1');
// });

// Route::get('user',function(){
// 	return view('layouts.user');
// });



// Route::resource('kembali','KembaliController');
