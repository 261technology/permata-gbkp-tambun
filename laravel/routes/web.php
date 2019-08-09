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
	Route::get('app/anggota/edit/{id}', 'AnggotaController@edit');
	Route::get('app/anggota/upload', 'AnggotaController@upload_anggota');
	Route::post('app/anggota/upload_data_anggota', 'AnggotaController@upload_anggota_process')->name('upload_data_anggota');

	Route::post('app/anggota/update-process', 'AnggotaController@updateProcess');

	// acara
	Route::get('app/acara', 'AcaraController@index');

	// pa
	Route::get('app/pa', 'AcaraController@pa');
	Route::post('app/update_pa', 'AcaraController@update_pa');
	Route::post('app/get_pa', 'AcaraController@get_pa');
	Route::post('app/get_pa-view', 'AcaraController@getPaView');
	Route::post('app/get-peserta-pa', 'AcaraController@getPesertaPa');
	Route::post('app/update-peserta-pa', 'AcaraController@updatePesertaPa');

	// Keuangan
	Route::get('app/keuangan/pemasukan', 'KeuanganController@pemasukan');
	Route::get('app/keuangan/pengeluaran', 'KeuanganController@pengeluaran');
	Route::post('app/keuangan/update-pengeluaran', 'KeuanganController@updatePengeluaran');
	Route::get('app/keuangan/upload-kas', 'KeuanganController@upload_kas');
	Route::post('app/keuangan/upload_data_kas', 'KeuanganController@upload_kas_process')->name('upload_data_kas');
	Route::post('app/keuangan/add_iuran_kas', 'KeuanganController@add_iuran_kas');
	Route::post('app/keuangan/delete_iuran_kas', 'KeuanganController@delete_iuran_kas');
	Route::post('app/keuangan/delete-pengeluaran', 'KeuanganController@deletePengeluaran');

	Route::post('app/keuangan/add_pemasukan_kantin', 'KeuanganController@addPemasukanKantin');
	Route::post('app/keuangan/update_pemasukan_kantin', 'KeuanganController@updatePemasukanKantin');

	Route::post('app/keuangan/get-pemasukan-kantin', 'KeuanganController@getPemasukanKantin');

	//Datatable 
	Route::post('app/datatable_anggota', 'AnggotaController@datatable_anggota');
	Route::post('app/datatable_iuran_kas', 'KeuanganController@datatable_iuran_kas');
	Route::post('app/datatable_pa', 'AcaraController@datatable_pa');
	Route::post('app/datatable_persembahan_pa', 'KeuanganController@datatable_persembahan_pa');
	Route::post('app/datatable_pemasukan_kantin', 'KeuanganController@datatablePemasukanKantin');
	Route::post('app/datatable-pengeluaran-kas', 'KeuanganController@datatablePengaluaranKas');

	// Json
	Route::post('app/json/anggota', 'JsonController@list_anggota');
	Route::post('app/json/data-agenda', 'AgendaController@list_agenda');

	// Agenda
	Route::get('app/agenda', 'AgendaController@index');
	Route::post('app/agenda/list_agenda', 'AgendaController@list_agenda');
	Route::post('app/agenda/update_agenda', 'AgendaController@update_agenda');
	Route::post('app/agenda/update_jam_agenda', 'AgendaController@update_jam_agenda');
	Route::post('app/agenda/delete_agenda', 'AgendaController@delete_agenda');
});