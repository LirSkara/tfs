<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

//Общедоступные роуты
Route::get('/', [MainController::class,'home'])->name('home');
Route::get('/home', [MainController::class,'home']);
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'login_p']);
Route::get('/registration', [AuthController::class,'registration'])->name('registration');
Route::post('/registration', [AuthController::class,'registration_p']);

Route::middleware('auth')->group(function () {
    //Роуты навигации
    Route::get('/profile/{id}', [AuthController::class,'profile'])->name('profile');
    Route::get('/follow/{id}', [AuthController::class,'follow']);
    Route::get('/un_follow/{id}', [AuthController::class,'un_follow']);
    Route::post('/find', [AuthController::class,'find'])->name('find');
    //Роуты для личного кабинета
    Route::get('/cabinet', [AuthController::class,'cabinet'])->name('cabinet');
    Route::get('/search', [AuthController::class,'search'])->name('search');
    Route::post('/avatar', [AuthController::class,'avatar']);
    Route::get('/add_content', [AuthController::class,'add_content'])->name('add_content');
    Route::post('/add_content', [AuthController::class,'add_content_p']);
    Route::get('/delete_content/{id}', [AuthController::class,'delete_content']);
    Route::get('/exit', [AuthController::class,'exit']);
});