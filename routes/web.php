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

Route::get('/bkd', 'BKDController@index');

Route::get('/bkd/semesterNew', 'SemesterController@create');
Route::post('/bkd/semesterNew', 'SemesterController@store');
Route::get('/bkd/semesterEdit/{id}', 'SemesterController@edit');
Route::post('bkd/semesterEdit/{id}', 'SemesterController@update');
Route::delete('bkd/semesterDelete/{id}', 'SemesterController@destroy');

Route::get('/bkd/laporan_kerja/{id_smt}', 'Laporan_KerjaController@index');
Route::get('/bkd/laporan_kerja/{id_smt}/new', 'Laporan_KerjaController@create');
Route::post('bkd/laporan_kerja/{id_smt}/new', 'Laporan_KerjaController@store');

Route::get('/bkd/laporan_kerja/file/{id}', 'FileController@index');