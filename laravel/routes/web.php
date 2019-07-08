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

// Dashboard
Route::get('/app', 'DashboardController@index')->name('app');

// Anggota
Route::get('app/anggota', 'AnggotaController@index');
Route::get('app/anggota/profile/{id}', 'AnggotaController@profile');
Route::get('app/anggota/detail/{id}', 'AnggotaController@detail');
Route::get('app/anggota/upload', 'AnggotaController@upload_anggota');
Route::post('app/anggota/upload_data_anggota', 'AnggotaController@upload_anggota_process')->name('upload_data_anggota');

// Keuangan
Route::get('app/keuangan/pemasukan', 'KeuanganController@pemasukan');
Route::get('app/keuangan/upload-kas', 'KeuanganController@upload_kas');
Route::post('app/keuangan/upload_data_kas', 'KeuanganController@upload_kas_process')->name('upload_data_kas');
Route::post('app/keuangan/add_iuran_kas', 'KeuanganController@add_iuran_kas');
Route::post('app/keuangan/delete_iuran_kas', 'KeuanganController@delete_iuran_kas');

//Datatable 
Route::post('app/datatable_anggota', 'AnggotaController@datatable_anggota');
Route::post('app/datatable_iuran_kas', 'KeuanganController@datatable_iuran_kas');

// Json
Route::post('app/json/anggota', 'JsonController@list_anggota');
Route::post('app/json/data_agenda', 'AgendaController@list_agenda');

// Agenda
Route::get('app/agenda', 'AgendaController@index');
Route::post('app/agenda/list_agenda', 'AgendaController@list_agenda');
Route::post('app/agenda/update_agenda', 'AgendaController@update_agenda');
