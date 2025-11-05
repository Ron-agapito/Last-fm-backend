<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AppController;

//app
Route::get('/',[AppController::class,'view'])->middleware('auth');

//login
Route::get('/login', [LoginController::class, 'view'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
