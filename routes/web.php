<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\ProfilController;
use App\http\Controllers\BeritaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class, 'index']);
Route::get('/profil',[ProfilController::class, 'index']);
//BERITA CONTROLLER 
Route::get('/berita',[BeritaController::class, 'index']);
Route::get('/berita/create',[BeritaController::class, 'create']);
Route::post('/berita', [BeritaController::class, 'store']);



Route::get('/azyan', function () {
    return "azyan";
});

