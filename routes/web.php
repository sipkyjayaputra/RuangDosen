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

Route::get('/log_aktivitas', ['middleware' => 'auth', 'uses' => 'Log_KegiatanController@index']);

Route::get('/bkd/semesterNew', ['middleware' => 'auth', 'uses' => 'SemesterController@create']);
Route::post('/bkd/semesterNew', ['middleware' => 'auth', 'uses' => 'SemesterController@store']);
Route::get('/bkd/semesterEdit/{id}', ['middleware' => 'auth', 'uses' => 'SemesterController@edit']);
Route::post('bkd/semesterEdit/{id}', ['middleware' => 'auth', 'uses' => 'SemesterController@update']);
Route::delete('bkd/semesterDelete/{id}', ['middleware' => 'auth', 'uses' => 'SemesterController@destroy']);

Route::get('/bkd/laporan_kerja/{id_smt}', ['middleware' => 'auth', 'uses' => 'Laporan_KerjaController@index']);
Route::get('/bkd/laporan_kerja/{id_smt}/new/{tipe}', ['middleware' => 'auth', 'uses' => 'Laporan_KerjaController@create']);
Route::post('bkd/laporan_kerja/{id_smt}/new/{tipe}', ['middleware' => 'auth', 'uses' => 'Laporan_KerjaController@store']);
Route::get('/bkd/laporan_kerja/{id}/{tipe}', ['middleware' => 'auth', 'uses' => 'Laporan_KerjaController@edit']);
Route::post('/bkd/laporan_kerja/{id}', ['middleware' => 'auth', 'uses' => 'Laporan_KerjaController@update']);
Route::delete('/bkd/laporan_kerja/{id}/{tipe}', ['middleware' => 'auth', 'uses' => 'Laporan_KerjaController@destroy']);


Route::get('/bkd/laporan_kerja/{id_Doc}/newDOC/{tipe}', ['middleware' => 'auth', 'uses' => 'FileController@create']);
Route::post('/bkd/laporan_kerja/{id_Doc}/newDOC', ['middleware' => 'auth', 'uses' => 'FileController@store']);
Route::get('/bkd/laporan_kerja/file/{id}/{tipe}', ['middleware' => 'auth', 'uses' => 'FileController@edit']);
Route::post('/bkd/laporan_kerja/file/{id}', ['middleware' => 'auth', 'uses' => 'FileController@update']);
Route::delete('/bkd/laporan_kerjas/file/{id}', ['middleware' => 'auth', 'uses' => 'FileController@destroy']);

//Route::get('/bkd/laporan_kerja/file/{id}', ['middleware' => 'auth', 'uses' => 'FileController@index']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/profile', ['middleware' => 'auth', 'uses' => 'EditProfileController@index']);
Route::get('/admin/settingsprofile', ['middleware' => 'auth', 'uses' => 'EditProfileController@edit']);
Route::post('/admin/settingsprofile', ['middleware' => 'auth', 'uses' => 'EditProfileController@update']);

Route::get('/admin/settingspassword', ['middleware' => 'auth', 'uses' => 'EditPasswordController@edit']);
Route::post('/admin/settingspassword', ['middleware' => 'auth', 'uses' => 'EditPasswordController@update']);

Route::post('/register', 'Auth\RegisterController@newCreate');

Route::get('/admin/riwayatpendidikan', ['middleware' => 'auth', 'uses' => 'Riwayat_PendidikanController@index']);
Route::get('/riwayatpendidikan/add', ['middleware' => 'auth', 'uses' => 'Riwayat_PendidikanController@create']);
Route::post('/riwayatpendidikan/add', ['middleware' => 'auth', 'uses' => 'Riwayat_PendidikanController@store']);

Route::get('/file/{file_download}',['middleware' => 'auth', 'uses' => 'DownloadController@download']);

Route::get('/search',['middleware' => 'auth', 'uses' => 'SearchController@index']);
Route::post('/search/hasil',['middleware' => 'auth', 'uses' => 'SearchController@search']); 