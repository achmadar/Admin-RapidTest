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

// Hello....

Route::get('/', function () {
    return view('login');
});

// Auth, Middleware, Profile User

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')
	->name('home');

// Routing Admin Page

Route::get('/admin', 'UserController@index')
	->name('users.index');

Route::get('/admin/add', 'UserController@create')
	->name('users.create');

Route::post('/admin', 'UserController@store')
	->name('users.store');

Route::get('/admin/edit/{id}', 'UserController@edit')
	->name('users.edit');

Route::post('/admin/update/{id}', 'UserController@update')
	->name('users.update');

Route::get('/admin/delete/{id}', 'UserController@destroy')
	->name('users.destroy');

Route::get('/admin/detail/{id}', 'UserController@show')
	->name('users.show');

// Routing Pasien Page

Route::get('/pasien', 'PasienController@index')
	->name('pasien.index');

Route::get('/pasien/add', 'PasienController@create')
	->name('pasien.create');

Route::post('/pasien', 'PasienController@store')
	->name('pasien.store');

Route::get('/pasien/edit/{id}', 'PasienController@edit')
	->name('pasien.edit');

Route::post('/pasien/update/{id}', 'PasienController@update')
	->name('pasien.update');

Route::get('/pasien/delete/{id}', 'PasienController@destroy')
	->name('pasien.destroy');

Route::get('/pasien/detail/{id}', 'PasienController@show')
	->name('pasien.show');

// Routing Rumah Sakit Page

Route::get('/rumah-sakit', 'RSController@index')
	->name('rs.index');

Route::get('/rumah-sakit/add', 'RSController@create')
	->name('rs.create');

Route::post('/rumah-sakit', 'RSController@store')
	->name('rs.store');

Route::get('/rumah-sakit/edit/{id}', 'RSController@edit')
	->name('rs.edit');

Route::post('/rumah-sakit/update/{id}', 'RSController@update')
	->name('rs.update');

Route::get('/rumah-sakit/delete/{id}', 'RSController@destroy')
	->name('rs.destroy');

// Route::get('/users/detail/{id}', 'UserController@show')
// 	->name('users.show');

// Routing Antrian Page

Route::get('/antrian', 'AntrianController@index')
	->name('antrian.index');

Route::get('/antrian/show/{nama_rs}', 'AntrianController@show')
	->name('antrian.show');

Route::get('/antrian/bersihkan/{nama_rs}', 'AntrianController@bersihkan')
	->name('antrian.bersihkan');

Route::get('/antrian/create/{nama_rs}', 'AntrianController@create')
	->name('antrian.create');

Route::post('/antrian', 'AntrianController@store')
	->name('antrian.store');

Route::get('/antrian/proses/{id}', 'AntrianController@proses')
	->name('antrian.proses');

Route::post('/antrian/update', 'AntrianController@update')
	->name('antrian.update');

// Route::post('/antrian/update/{id}', 'AntrianController@update')
// 	->name('antrian.update');

Route::get('/antrian/delete/{id}', 'AntrianController@destroy')
	->name('antrian.destroy');


// Routing Hasil Pemeriksaan Page

Route::get('/hasil-pemeriksaan', 'HasilController@index')
	->name('hasil.index');

Route::get('/hasil-pemeriksaan/detail/{id}', 'HasilController@show')
	->name('hasil.show');

// Route::get('/hasil-pemeriksaan/add', 'HasilController@create')
// 	->name('hasil.create');

// Route::post('/hasil-pemeriksaan', 'HasilController@store')
// 	->name('hasil.store');

Route::get('/hasil-pemeriksaan/edit/{id}', 'HasilController@edit')
	->name('hasil.edit');

Route::post('/hasil-pemeriksaan/update/{id}', 'HasilController@update')
	->name('hasil.update');

Route::get('/hasil-pemeriksaan/delete/{id}', 'HasilController@destroy')
	->name('hasil.destroy');