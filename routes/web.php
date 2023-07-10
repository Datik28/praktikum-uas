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
    return view('welcome');
});
Auth::routes();
Route::get('/kosmetik/search', 'KosmetikController@search')->name('search');
Route::delete('kosmetik/{id}', 'KosmetikController@destroy');
Route::get('kosmetik/{id}/edit', 'KosmetikController@edit'); 
Route::patch('kosmetik/{id}', 'KosmetikController@update');
Route::get('/kosmetik', 'KosmetikController@index');
Route::get('/kosmetik/create', 'KosmetikController@create'); 
Route::post('/kosmetik', 'KosmetikController@store');
Route::get('/home', 'HomeController@index')->name('home');
