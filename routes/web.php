<?php

use Illuminate\Support\Facades\Route;
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
    return view('image');
});

Route::get('/items/create', 'ArtikelController@create'); // menampilkan halaman form
Route::post('/items', 'ArtikelController@store'); // menyimpan data
Route::get('/items', 'ArtikelController@index'); // menampilkan semua
Route::get('/items/{a}', 'ArtikelController@show'); // menampilkan detail item dengan id 
Route::get('/items/{a}/edit', 'ArtikelController@edit'); // menampilkan form untuk edit item
Route::put('/items/{a}', 'ArtikelController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'ArtikelController@destroy'); // menghapus data dengan id