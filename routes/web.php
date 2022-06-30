<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\User;
use app\Http\Controllers\Pelicula;
use app\Http\Controllers\Membresia;
use app\Http\Controllers\Renta;
use app\Http\Controllers\Rentaadmin;
use app\Http\Controllers\Peliculaadmin;
use app\Http\Controllers\Membresiaadmin;

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

Route::get('redirects', 'App\Http\Controllers\HomeController@index');

Route::resource('user', 'App\Http\Controllers\UserController');
Route::resource('pelicula', 'App\Http\Controllers\PeliculaController');
Route::resource('membresia', 'App\Http\Controllers\MembresiaController');
Route::resource('renta', 'App\Http\Controllers\RentaController');
Route::resource('rentaadmin', 'App\Http\Controllers\RentaadminController');
Route::resource('peliculaadmin', 'App\Http\Controllers\PeliculaadminController');
Route::resource('membresiaadmin', 'App\Http\Controllers\MembresiaadminController');
