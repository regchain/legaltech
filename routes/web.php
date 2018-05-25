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
Route::get('/', function () {
    return view('website.welcome');
});

Route::get('welcome', function () {
    return view('website.welcome');
});

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

Route::get('forms', 'DocumentationsController@index');

Route::get('editor', 'DocumentationsController@editor');

Route::get('select2', 'DocumentationsController@select2');

Route::get('daterange', 'DocumentationsController@daterange');

Route::get('timepicker', 'DocumentationsController@timepicker');

Route::get('icheck', 'DocumentationsController@icheck');

Route::get('inputmask', 'DocumentationsController@inputmask');

Route::get('inputaddon', 'DocumentationsController@inputaddon');

Route::get('uigeneral', 'DocumentationsController@uigeneral');

Route::get('documents', 'DocumentationsController@documents');

Route::get('documentprint', 'DocumentationsController@documentprint');

Route::get('button', 'DocumentationsController@button');

Route::get('progress', 'DocumentationsController@progress');

Route::get('table', 'DocumentationsController@table');

// Pembinaan

Route::get('/bin/apps1/home', 'Bin\PagesController@index')->name('apps1home');

// Pengawasan/Elapdu

Route::get('/was/elapdu/operator', 'WasElapdu\PagesController@index')->name('operator');

Route::get('/was/elapdu/pelapor', 'WasElapdu\PagesController@pelapor')->name('pelapor');


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




