<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\ProfilController;
use App\http\Controllers\BeritaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class, 'index']);
// Route::get('/profil',[ProfilController::class, 'index']);
Route::resource('berita',BeritaController::class);
Route::resource('profil',ProfilController::class);

//BERITA CONTROLLER 
Route::get('/berita',[BeritaController::class, 'index']);
Route::get('/berita/create',[BeritaController::class, 'create']);
Route::post('/berita', [BeritaController::class, 'store']);

//EDIT DAN HAPUS BERITA
Route::get('/berita/{id}/edit', [BeritaController::class, 'edit']);
Route::post('/berita/{id}', [BeritaController::class, 'update']);
Route::post('/berita/{id}/delete', [BeritaController::class, 'destroy']);


Route::get('/azyan', function () {
    return "azyan";
});

