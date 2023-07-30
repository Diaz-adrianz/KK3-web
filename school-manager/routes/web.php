<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// SISWA 
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class, 'create_view']);
Route::get('/siswa/{id}/edit', [SiswaController::class, 'update_view']);

Route::post('/siswa', [SiswaController::class, 'create']);
Route::patch('/siswa/{id}', [SiswaController::class, 'update']);
Route::delete('/siswa/{id}', [SiswaController::class, 'delete']);


// KELAS 
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kelas/create', [KelasController::class, 'create_view']);
Route::get('/kelas/{id}/edit', [KelasController::class, 'update_view']);

Route::post('/kelas', [KelasController::class, 'create']);
Route::patch('/kelas/{id}', [KelasController::class, 'update']);
Route::delete('/kelas/{id}', [KelasController::class, 'delete']);