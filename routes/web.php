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

Route::get('/siswa', 'App\Http\Controllers\SiswaController@getDataSiswa');
Route::get('/siswa/tambah-data', 'App\Http\Controllers\SiswaController@tambahSiswa');
Route::post('/siswa/store', 'App\Http\Controllers\SiswaController@store');
