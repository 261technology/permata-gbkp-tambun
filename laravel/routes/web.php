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
    return view('landing');
});
// Auth::routes();


Route::get('/register', 'AuthController@register')->name('register');
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::post('/login_process', 'AuthController@loginProcess')->name('login_process');
Route::post('/register_process', 'AuthController@registerProcess')->name('register_process');
Route::post('auth/check_email_avaliable', 'AuthController@checkEmailAvaliable');

Route::post('json/select2-anggota', 'JsonController@select2Anggota');
 

Route::group(['middleware' => 'login'], function(){
	// Dashboard
	Route::get('/app', 'DashboardController@index')->name('app');

	// Anggota
	Route::get('app/anggota', 'AnggotaController@index');
	Route::get('app/anggota/profile/{id}', 'AnggotaController@profile');
	Route::get('app/anggota/detail/{id}', 'AnggotaController@detail');
	Route::get('app/anggota/upload', 'AnggotaController@upload_anggota');
	Route::post('app/anggota/upload_data_anggota', 'AnggotaController@upload_anggota_process')->name('upload_data_anggota');

	// pa
	Route::get('app/pa', 'AcaraController@pa');
	Route::post('app/update_pa', 'AcaraController@update_pa');
	Route::post('app/get_pa', 'AcaraController@get_pa');
	Route::post('app/get-peserta-pa', 'AcaraController@getPesertaPa');
	Route::post('app/update-peserta-pa', 'AcaraController@updatePesertaPa');

	// Keuangan
	Route::get('app/keuangan/pemasukan', 'KeuanganController@pemasukan');
	Route::get('app/keuangan/upload-kas', 'KeuanganController@upload_kas');
	Route::post('app/keuangan/upload_data_kas', 'KeuanganController@upload_kas_process')->name('upload_data_kas');
	Route::post('app/keuangan/add_iuran_kas', 'KeuanganController@add_iuran_kas');
	Route::post('app/keuangan/delete_iuran_kas', 'KeuanganController@delete_iuran_kas');

	//Datatable 
	Route::post('app/datatable_anggota', 'AnggotaController@datatable_anggota');
	Route::post('app/datatable_iuran_kas', 'KeuanganController@datatable_iuran_kas');
	Route::post('app/datatable_pa', 'AcaraController@datatable_pa');

	// Json
	Route::post('app/json/anggota', 'JsonController@list_anggota');
	Route::post('app/json/data_agenda', 'AgendaController@list_agenda');

	// Agenda
	Route::get('app/agenda', 'AgendaController@index');
	Route::post('app/agenda/list_agenda', 'AgendaController@list_agenda');
	Route::post('app/agenda/update_agenda', 'AgendaController@update_agenda');
	Route::post('app/agenda/update_jam_agenda', 'AgendaController@update_jam_agenda');
	Route::post('app/agenda/delete_agenda', 'AgendaController@delete_agenda');
});