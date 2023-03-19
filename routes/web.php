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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/form', 'TestController@index')->name('form.index');
Route::get('/form/create', 'TestController@create')->name('form.create');
Route::get('/form/{test}', 'TestController@show')->name('form.show');
Route::get('/form/{test}/edit', 'TestController@edit')->name('form.edit');

Route::post('/form', 'TestController@store')->name('form.store');

Route::patch('/form/{test}', 'TestController@update')->name('form.update');

Route::delete('/form/{test}', 'TestController@destroy')->name('form.delete');
