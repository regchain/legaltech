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
    return view('website.home');
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

// Pembinaan

Route::get('/bin/apps1/home', 'Bin\PagesController@index')->name('apps1home');

// Pengawasan/Elapdu

Route::get('/was/elapdu/operator', 'WasElapdu\PagesController@index')->name('operator');

Route::get('/was/elapdu/pelapor', 'WasElapdu\PagesController@pelapor')->name('pelapor');



