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

Route::get('pengaduan', 'Pengawasan\Elapdu\PublicPagesController@pengaduan');
Route::get('pengaduan2', 'Pengawasan\Elapdu\PublicPagesController@pengaduan2');
Route::get('question1', 'Pengawasan\Elapdu\PublicPagesController@question1');
Route::get('question2', 'Pengawasan\Elapdu\PublicPagesController@question2');
Route::get('question3', 'Pengawasan\Elapdu\PublicPagesController@question3');
Route::get('question4', 'Pengawasan\Elapdu\PublicPagesController@question4');
Route::get('cara_lapdu', 'Pengawasan\Elapdu\PublicPagesController@cara_lapdu');
Route::get('cara_whistle', 'Pengawasan\Elapdu\PublicPagesController@cara_whistle');
Route::get('test', 'Pengawasan\Elapdu\PublicPagesController@test');
Route::get('kawal', 'Pengawasan\Elapdu\PublicPagesController@kawal');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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




