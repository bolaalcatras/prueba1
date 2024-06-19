<?php

namespace App\Http\Controllers;

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::view('/login', "InicioSesion.login")->name('login');
Route::view('/registro', "InicioSesion.register")->name('registro');
Route::view('/home', "InicioSesion.home")->middleware('auth')->name('home');

Route::post('/validar-registro', [LoginController::class , 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class , 'login'])->name('inicio-sesion');
Route::get('/logout', [LoginController::class , 'logout'])->name('logout');