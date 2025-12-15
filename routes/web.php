<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SickestController;
use App\Http\Controllers\SimplesController;
use App\Http\Controllers\UserController;

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/check',[LoginController::class, 'check'])->name('check');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::group(['middleware'=>['auth']], function () {    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    
});
Route::resource('/user',UserController::class);


Route::resource('/simples',SimplesController::class);
Route::resource('/sickest',SickestController::class);
Route::resource('/checkup',CheckesController::class);