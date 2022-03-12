<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

//Общедоступные роуты
Route::get('/', [MainController::class,'home'])->name('home');

//Роуты авторизации и регистрации
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'login_p']);

Route::get('/registration', [AuthController::class,'registration'])->name('registration');
Route::post('/registration', [AuthController::class,'registration_p']);

Route::get('/exit', [AuthController::class,'exit']);

//Роуты для личного кабинета
Route::get('/cabinet', [AuthController::class,'cabinet'])->name('cabinet');