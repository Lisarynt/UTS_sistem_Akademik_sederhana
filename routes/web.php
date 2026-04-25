<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MatakuliahController;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.proses');


Route::middleware('auth')->group(function () {
    
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('jurusan', JurusanController::class);
    Route::resource('matakuliah', MatakuliahController::class);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});