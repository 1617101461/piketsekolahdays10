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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
Route::resource('absensiguru', 'AbsensiguruController');
Route::resource('absensisiswa', 'AbsensisiswaController');
Route::resource('petugaspiket', 'PetugaspiketController');
Route::resource('guru', 'GuruController');
Route::resource('siswa', 'SiswaController');
Route::resource('kelas', 'KelasController');
Route::resource('jurusan', 'JurusanController');
Route::get('/home', 'HomeController@index')->name('home');
});


Route::group(['prefix'=>'member','middleware'=>['auth','role:member']],function(){
Route::get('absensiguru', 'AbsensiguruController@absensi');
Route::get('absensisiswa', 'AbsensisiswaController@absensi');
Route::get('absensipetugas', 'AbsensiguruController@petugas');
});

Route::get('cek', function () {
    return view('layouts.admin');
});
