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

use Illuminate\Support\Facades\Route;

Route::get('/', 'StraniceController@loginStranica' );
Route::get('/iznajmljivanja', 'StraniceController@iznajmljivanjeKnjiga' );
Route::get('/registracija', 'StraniceController@registracijaStranica' );
Route::get('/admin-panel', 'StraniceController@adminPanelStranica' );


Route::get('/knjige/get', 'KnjigaController@getovanje_knjiga');

Route::post('/knjige/iznajmi','IznajmljivanjeController@dodavanje_iznajmljivanja');
Route::delete('/knjige/obrisi','KnjigaController@brisanje_knjiga');

Route::get('/clanovi/get', 'ClanController@getovanje_clanova');
Route::post('/clanovi/registracija','ClanController@dodavanje_novog_clana');
Route::get('/clanovi/login', 'ClanController@identifikacija_clana');