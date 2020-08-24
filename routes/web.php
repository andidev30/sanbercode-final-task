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

// Route::get('/', function () {
//     return view('pertanyaan.index');
// });

Auth::routes();

Route::get('/home', 'PertanyaanController@index')->name('home');
Route::get('/master', function () {
    return view('template.master');
});

Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan/{id}/detail', 'PertanyaanController@show');
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/my-questions/{id}/edit', 'PertanyaanController@edit');
Route::get('/my-questions', 'PertanyaanController@myQuestion');
Route::put('/my-questions/{id}', 'PertanyaanController@update');
Route::delete('/my-questions/{id}', 'PertanyaanController@destroy');
Route::get('/', 'PertanyaanController@index');
