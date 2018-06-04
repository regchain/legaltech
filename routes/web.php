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



// Website Legaltech
Route::get('/', function () {return view('website.welcome');});

Route::get('services', function () {return view('website.services');});

Route::get('methode', function () {return view('website.methode');});

Route::get('about-team', function () {return view('website.about-team');});

// ELapdu

Route::get('was/elapdu/pengaduan', 'WasElapdu\PublicPagesController@pengaduan');
Route::get('was/elapdu/pengaduan2', 'WasElapdu\PublicPagesController@pengaduan2');
Route::get('was/elapdu/question1', 'WasElapdu\PublicPagesController@question1');
Route::get('was/elapdu/question2', 'WasElapdu\PublicPagesController@question2');
Route::get('was/elapdu/question3', 'WasElapdu\PublicPagesController@question3');
Route::get('was/elapdu/question4', 'WasElapdu\PublicPagesController@question4');
Route::get('was/elapdu/cara_lapdu', 'WasElapdu\PublicPagesController@cara_lapdu');
Route::get('was/elapdu/cara_whistle', 'WasElapdu\PublicPagesController@cara_whistle');
Route::get('was/elapdu/test', 'WasElapdu\PublicPagesController@test');
Route::get('was/elapdu/kawal', 'WasElapdu\PublicPagesController@kawal');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('was/elapdu/inspeksi', 'WasElapdu\InspeksiController@inspeksi');
Route::get('was/elapdu/inspeksi_create', 'WasElapdu\InspeksiController@inspeksi_create');
Route::get('was/elapdu/inspeksi_disposisi', 'WasElapdu\InspeksiController@inspeksi_disposisi');
Route::get('was/elapdu/l_was2_create', 'WasElapdu\InspeksiController@l_was2_create');
Route::get('was/elapdu/inspeksi_view', 'WasElapdu\InspeksiController@inspeksi_view');
Route::get('was/elapdu/sp_was2_create', 'WasElapdu\InspeksiController@sp_was2_create');
Route::get('was/elapdu/ba_was3_qna', 'WasElapdu\InspeksiController@ba_was3_qna');
Route::get('was/elapdu/ba_was3_create', 'WasElapdu\InspeksiController@ba_was3_create');
Route::get('was/elapdu/ba_was3_edit', 'WasElapdu\InspeksiController@ba_was3_edit');
Route::get('was/elapdu/ba_was3_view', 'WasElapdu\InspeksiController@ba_was3_view');
Route::get('was/elapdu/sp_was3_create', 'WasElapdu\InspeksiController@sp_was3_create');
Route::get('was/elapdu/was15_create', 'WasElapdu\InspeksiController@was15_create');

Route::get('was/elapdu/pengaduan', 'WasElapdu\PublicPagesController@pengaduan');
Route::get('was/elapdu/pengaduan2', 'WasElapdu\PublicPagesController@pengaduan2');
Route::get('was/elapdu/question1', 'WasElapdu\PublicPagesController@question1');
Route::get('was/elapdu/question2', 'WasElapdu\PublicPagesController@question2');
Route::get('was/elapdu/question3', 'WasElapdu\PublicPagesController@question3');
Route::get('was/elapdu/question4', 'WasElapdu\PublicPagesController@question4');
Route::get('was/elapdu/cara_lapdu', 'WasElapdu\PublicPagesController@cara_lapdu');
Route::get('was/elapdu/cara_whistle', 'WasElapdu\PublicPagesController@cara_whistle');
Route::get('was/elapdu/test', 'WasElapdu\PublicPagesController@test');
Route::get('was/elapdu/kawal', 'WasElapdu\PublicPagesController@kawal');


Route::get('was/elapdu/klarifikasi', 'WasElapdu\KlarifikasiController@klarifikasi');
Route::get('was/elapdu/klarifikasi_create', 'WasElapdu\KlarifikasiController@klarifikasi_create');
Route::get('was/elapdu/klarifikasi_view', 'WasElapdu\KlarifikasiController@klarifikasi_view');
Route::get('was/elapdu/klarifikasi_edit', 'WasElapdu\KlarifikasiController@klarifikasi_edit');
Route::get('was/elapdu/klarifikasi_proses', 'WasElapdu\KlarifikasiController@klarifikasi_proses');
Route::get('was/elapdu/ba_was2_create', 'WasElapdu\KlarifikasiController@ba_was2_create');
Route::get('was/elapdu/ba_was2_qna', 'WasElapdu\KlarifikasiController@ba_was2_qna');
Route::get('was/elapdu/ba_was2_view', 'WasElapdu\KlarifikasiController@ba_was2_view');
Route::get('was/elapdu/ba_was2_edit', 'WasElapdu\KlarifikasiController@ba_was2_edit');
Route::get('was/elapdu/was5b', 'WasElapdu\KlarifikasiController@was5b');
Route::get('was/elapdu/was4_create', 'WasElapdu\KlarifikasiController@was4_create');
Route::get('was/elapdu/was4_edit', 'WasElapdu\KlarifikasiController@was4_edit');
Route::get('was/elapdu/was5a_create', 'WasElapdu\KlarifikasiController@was5a_create');
Route::get('was/elapdu/l_was1_create', 'WasElapdu\KlarifikasiController@l_was1_create');
Route::get('was/elapdu/sp_was2_create', 'WasElapdu\KlarifikasiController@sp_was2_create');


Route::get('was/elapdu/laporan', 'WasElapdu\LapduController@laporan');
Route::get('was/elapdu/laporan_create', 'WasElapdu\LapduController@laporan_create');
Route::get('was/elapdu/laporan_view', 'WasElapdu\LapduController@laporan_view');
Route::get('was/elapdu/laporan_edit', 'WasElapdu\LapduController@laporan_edit');
Route::get('was/elapdu/laporan_disposisi', 'WasElapdu\LapduController@laporan_disposisi');
Route::get('was/elapdu/was1', 'WasElapdu\LapduController@was1');
Route::get('was/elapdu/was1_create', 'WasElapdu\LapduController@was1_create');
Route::get('was/elapdu/was1_edit', 'WasElapdu\LapduController@was1_edit');
Route::get('was/elapdu/was2', 'WasElapdu\LapduController@was2');
Route::get('was/elapdu/was2_edit', 'WasElapdu\LapduController@was2_edit');
Route::get('was/elapdu/was3_create', 'WasElapdu\LapduController@was3_create');
Route::get('was/elapdu/was3_edit', 'WasElapdu\LapduController@was3_edit');
Route::get('was/elapdu/sp_was1_create', 'WasElapdu\LapduController@sp_was1_create');

Route::get('was/elapdu/userblank', 'WasElapdu\PelaporController@userblank');

Route::get('was/elapdu/putusan', 'WasElapdu\PutusanController@putusan');


Route::get('was/elapdu/subyek_terlapor', 'WasElapdu\SubyekController@subyek_terlapor');
Route::get('was/elapdu/subyek_klarifikasi', 'WasElapdu\SubyekController@subyek_klarifikasi');
Route::get('was/elapdu/subyek_inspeksi', 'WasElapdu\SubyekController@subyek_inspeksi');
Route::get('was/elapdu/subyek_usulan', 'WasElapdu\SubyekController@subyek_usulan');
Route::get('was/elapdu/subyek_putusan', 'WasElapdu\SubyekController@subyek_putusan');
Route::get('was/elapdu/subyek_putusanprint', 'WasElapdu\SubyekController@subyek_putusanprint');
Route::get('was/elapdu/subyek_putusandetail', 'WasElapdu\SubyekController@subyek_putusandetail');


Route::get('was/elapdu/usulan', 'WasElapdu\UsulanController@usulan');
Route::get('was/elapdu/usulan_disposisi', 'WasElapdu\SubyekController@usulan_disposisi');
Route::get('was/elapdu/ba_was6_create', 'WasElapdu\SubyekController@ba_was6_create');
Route::get('was/elapdu/ba_was7_create', 'WasElapdu\SubyekController@ba_was7_create');
Route::get('was/elapdu/ba_was8_create', 'WasElapdu\SubyekController@ba_was8_create');
Route::get('was/elapdu/ba_was9', 'WasElapdu\SubyekController@ba_was9');
Route::get('was/elapdu/was16a_create', 'WasElapdu\SubyekController@was16a_create');
Route::get('was/elapdu/was17_create', 'WasElapdu\SubyekController@was17_create');
Route::get('was/elapdu/was18_create', 'WasElapdu\SubyekController@was18_create');
Route::get('was/elapdu/usulan_view', 'WasElapdu\SubyekController@usulan_view');
Route::get('was/elapdu/sk_was1_create', 'WasElapdu\SubyekController@sk_was1_create');

// core

Route::get('documentation/forms', 'DocumentationsController@index');
Route::get('documentation/editor', 'DocumentationsController@editor');
Route::get('documentation/select2', 'DocumentationsController@select2');
Route::get('documentation/daterange', 'DocumentationsController@daterange');
Route::get('documentation/timepicker', 'DocumentationsController@timepicker');
Route::get('documentation/icheck', 'DocumentationsController@icheck');
Route::get('documentation/inputmask', 'DocumentationsController@inputmask');
Route::get('documentation/inputaddon', 'DocumentationsController@inputaddon');
Route::get('documentation/uigeneral', 'DocumentationsController@uigeneral');
Route::get('documentation/documents', 'DocumentationsController@documents');
Route::get('documentation/documentprint', 'DocumentationsController@documentprint');
Route::get('documentation/button', 'DocumentationsController@button');
Route::get('documentation/progress', 'DocumentationsController@progress');
Route::get('documentation/table', 'DocumentationsController@table');

// Pembinaan

Route::get('/bin/apps1/home', 'Bin\PagesController@index')->name('apps1home');

// Pengawasan/Elapdu

Route::get('/was/elapdu/operator', 'WasElapdu\PagesController@index')->name('operator');

Route::get('/was/elapdu/pelapor', 'WasElapdu\PagesController@pelapor')->name('pelapor');


// Intel/TP4D

Route::get('intel/tp4d/home', 'IntelTp4d\HomeController@index');
Route::get('intel/tp4d/ebudgeting', 'IntelTp4d\HomeController@ebudgeting');
Route::get('intel/tp4d/erup', 'IntelTp4d\HomeController@erup');
Route::get('intel/tp4d/eproject', 'IntelTp4d\HomeController@eproject');
Route::get('intel/tp4d/eulp', 'IntelTp4d\HomeController@eulp');
Route::get('intel/tp4d/eproc', 'IntelTp4d\HomeController@eproc');
Route::get('intel/tp4d/swakelola', 'IntelTp4d\HomeController@swakelola');
Route::get('intel/tp4d/ekontrak', 'IntelTp4d\HomeController@ekontrak');
Route::get('intel/tp4d/eprogress', 'IntelTp4d\HomeController@eprogress');
Route::get('intel/tp4d/eperformance', 'IntelTp4d\HomeController@eperformance');
Route::get('intel/tp4d/easset', 'IntelTp4d\HomeController@easset');

// Pidsus/elPIDSUS

Route::get('pidsus/dik/home', 'Pidsus\HomeController@index');
Route::get('pidsus/dik/admin', 'Pidsus\HomeController@index');
Route::get('pidsus/dik/trial', 'Pidsus\HomeController@trial');
Route::get('pidsus/dik/master_penyidikan', 'Pidsus\HomeController@master_penyidikan');
Route::get('pidsus/dik/master_penuntutan', 'Pidsus\HomeController@master_penuntutan');


Route::get('pidsus/dik/penyidikan', 'Pidsus\LayoutController@penyidikan');

Route::group(['prefix' => '', 'middleware' => ['auth']], function() {
	Route::resource('pidsus/dik/jaksa', 'Pidsus\JaksasController');
	Route::resource('pidsus/dik/pasal', 'Pidsus\PasalsController');
	Route::resource('pidsus/dik/kategori_subyek', 'Pidsus\KategoriSubyeksController');
	Route::resource('pidsus/dik/rp1', 'Pidsus\Rp1Controller');
	Route::resource('pidsus/dik/lidik', 'Pidsus\LidikController', [
		'except' => ['create', 'store', 'show', 'destroy']]);
	Route::resource('pidsus/dik/rp2', 'Pidsus\Rp2Controller');
	Route::get('dikmum/{kasus_id}', 'Pidsus\Rp3MumController@create');
	Route::get('diksus/{kasus_id}/spt/{spt_id}', 'Pidsus\Rp3SusController@create');
	Route::resource('pidsus/dik/rp3mum', 'Pidsus\Rp3MumController');
	Route::resource('pidsus/dik/spt', 'Pidsus\SptController');
	Route::resource('pidsus/dik/rp3sus', 'Pidsus\Rp3SusController');
	Route::get('pidsus/dik/subyek', 'Pidsus\SubyekController@index');
	Route::get('pidsus/dik/tersangka/{kasus_id}', 'Pidsus\SubyekController@tersangka');
	Route::get('pidsus/dik/tahan/{subyek_id}', 'Pidsus\SubyekController@tahan');
	Route::put('pidsus/dik/tahan/{subyek_id}', 'Pidsus\SubyekController@tahanupdate');
	Route::get('pidsus/dik/obyek', 'Pidsus\ObyekController@index');
	Route::get('pidsus/dik/fp15/{spt_id}', 'Pidsus\Rp3SusController@fp15');
	Route::put('pidsus/dik/p15/{spt_id}', 'Pidsus\Rp3SusController@p15update');
	Route::get('pidsus/dik/fp15a/{spt_id}', 'Pidsus\Rp3SusController@fp15a');
	Route::put('pidsus/dik/p15a/{spt_id}', 'Pidsus\Rp3SusController@p15aupdate');
	Route::get('pidsus/dik/surat_jaksa/{id}/{tipe}/{kasus_id}', 'Pidsus\JaksasController@deleteSuratJaksa');
	Route::get('pidsus/dik/surat_pasal/{id}/{tipe}/{kasus_id}', 'Pidsus\PasalsController@deleteSuratPasal');
});

Route::group(['prefix' => 'kasus'], function() {
	Route::group(['prefix' => '{kasus_id}'], function($kasus_id) {
    	
    	Route::resource('pidsus/dik/subyek', 'Pidsus\SubyekController', [
			'except' => ['index', 'show']]);
    	Route::resource('pidsus/dik/obyek', 'Pidsus\ObyekController', [
			'except' => ['index', 'show', 'destroy']]);
  	});	
});




