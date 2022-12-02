<?php

use App\Http\Controllers\ArticulosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MensajesController;
use GuzzleHttp\Middleware;

Route::post('articulos/importar',[ArticulosController::class,'ImportarExcel'])->Middleware('auth')->name('importarArticulos');
Route::get('articulos/exportar',[ArticulosController::class,'ExportarExcel'])->Middleware('auth')->name('exportarArticulos');

Route::get('/',[WelcomeController::class,'index'])->name('welcome');

Route::view('home' , 'admin');

Route::resource('articulos',ArticulosController::class)->middleware('auth');

Route::resource('mensajes',MensajesController::class);