<?php

namespace App\Http\Controllers;

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::view('/login', "InicioSesion.login")->name('login');
Route::view('/registro', "InicioSesion.register")->name('registro');
Route::view('/index', "crudLibrary.index")->middleware('auth')->name('index');

Route::post('/validar-registro', [LoginController::class , 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class , 'login'])->name('inicio-sesion');
Route::get('/logout', [LoginController::class , 'logout'])->name('logout');

route::view('/create', "crudLibrary.create")->name('Library-create');
route::view('/edit', "crudLibrary.edit")->name('Library-edit');
route::view('/show', "crudLibrary.show")->name('Library-show');

Route::post('/storeC', [LibraryController::class , 'store'])->name('crudLibrary.store');
Route::post('/indexC', [LibraryController::class , 'index'])->name('crudLibrary.index');
Route::post('/showC/{libraryDatos}', [LibraryController::class , 'show'])->name('crudLibrary.show');
Route::post('/editC/{libraryDatos}/editados', [LibraryController::class , 'edit'])->name('crudLibrary.edit');
Route::post('/createC/nuevo', [LibraryController::class , 'create'])->name('crudLibrary.create');
Route::put('/updateC/{libraryDatos}', [LibraryController::class , 'update'])->name('crudLibrary.update');
Route::delete('/destroyC/{libraryDatos}', [LibraryController::class , 'destroy'])->name('crudLibrary.destroy');