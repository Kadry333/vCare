<?php
use App\Http\Controllers\CustomAuth\AuthController;


Route::get('register',[AuthController::class,'register'])->name('auth.register');
Route::get('login',[AuthController::class,'login'])->name('auth.login');
Route::post('login/store',[AuthController::class,'login_store'])->name('auth.login.store');
Route::post('register/store',[AuthController::class,'store'])->name('auth.store');
Route::post('logout',[AuthController::class,'logout'])->name('auth.logout');

