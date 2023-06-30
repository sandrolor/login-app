<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogadoController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
});

Route::controller(LogadoController::class)->group(function(){
    Route::get('/logado', 'index')->name('logado.index');
});