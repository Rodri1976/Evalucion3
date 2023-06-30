<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuentController;
use App\Http\Controllers\CuentaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts/app');
    //return view('index');
});

Auth::routes();


Route::resource('artista',App\Http\Controllers\ImaController::class);
Route::resource('publico',App\Http\Controllers\ImagenController::class);
Route::resource('perfiles',App\Http\Controllers\PerfileController::class);//->middleware('artist');
Route::resource('imagenes',App\Http\Controllers\ImageneController::class);//('auth');

Route::resource('cuentas',App\Http\Controllers\CuentaController::class);//->middleware('admin');
//Route::resource('ingreso',App\Http\Controllers\CuentController::class);//->middleware('admin');

Route::get('/ingreso',[CuentController::class,'verlogin'])->name('ingreso');

Route::get('index',[CuentaController::class,'autenticaradmin'])->name('index');
Route::get('/index3',[CuentaController::class,'autenticarartista'])->name('index3');   


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/map', 'NavigationController@map')->name('map'); // note the name() method.
Route::post('/login',[CuentaController::class,'autenticar'])->name('usuarios.autenticar');
