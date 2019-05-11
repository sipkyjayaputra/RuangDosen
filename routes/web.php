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

Route::get('/bkd', ['middleware' => 'auth', 'uses' => 'BKDController@index']);

Route::get('/bkd/semesterNew', ['middleware' => 'auth', 'uses' => 'SemesterController@create']);
Route::post('/bkd/semesterNew', ['middleware' => 'auth', 'uses' => 'SemesterController@store']);
Route::get('/bkd/semesterEdit/{id}', ['middleware' => 'auth', 'uses' => 'SemesterController@edit']);
Route::post('bkd/semesterEdit/{id}', ['middleware' => 'auth', 'uses' => 'SemesterController@update']);
Route::delete('bkd/semesterDelete/{id}', ['middleware' => 'auth', 'uses' => 'SemesterController@destroy']);

Route::get('/bkd/laporan_kerja/{id_smt}', ['middleware' => 'auth', 'uses' => 'Laporan_KerjaController@index']);
Route::get('/bkd/laporan_kerja/{id_smt}/new/{tipe}', ['middleware' => 'auth', 'uses' => 'Laporan_KerjaController@create']);
Route::post('bkd/laporan_kerja/{id_smt}/new/{tipe}', ['middleware' => 'auth', 'uses' => 'Laporan_KerjaController@store']);
Route::get('/bkd/laporan_kerja/file/{id}/{tipe}', ['middleware' => 'auth', 'uses' => 'Laporan_KerjaController@edit']);
Route::post('/bkd/laporan_kerja/file/{id}', ['middleware' => 'auth', 'uses' => 'Laporan_KerjaController@update']);
Route::delete('/bkd/laporan_kerja/file/{id}/{tipe}', ['middleware' => 'auth', 'uses' => 'Laporan_KerjaController@destroy']);


Route::get('/bkd/laporan_kerja/{id_Doc}/newDOC/{tipe}', ['middleware' => 'auth', 'uses' => 'FileController@create']);
Route::post('/bkd/laporan_kerja/{id_Doc}/newDOC', ['middleware' => 'auth', 'uses' => 'FileController@store']);

//Route::get('/bkd/laporan_kerja/file/{id}', ['middleware' => 'auth', 'uses' => 'FileController@index']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
