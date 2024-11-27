<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\AuthController;
use App\Http\Controllers\front\MajorController;
use App\Http\Controllers\front\DoctorController;
use App\Http\Controllers\front\AppointmentController;

Route::get('/',[HomeController::class,"index"])->name('home');

Route::get('/contact',[ContactController::class,"index"]);
Route::post('/send-message',[ContactController::class,"Send_Message"]);


Route::get('/majors',[MajorController::class,"index"]);
Route::get('/majors/{major}/doctors',[MajorController::class,"doctors"]);


Route::get('/doctor',[DoctorController::class,"index"]);
Route::get('/appointments/{user}',[AppointmentController::class,"create"])->Middleware('auth')->name('appointments.create');
Route::post('/appointments/{user}',[AppointmentController::class,"store"])->Middleware('auth')->name('appointments.store');

require_once('admin.php');
require_once(__DIR__.'/auth.php');
require_once(__DIR__.'/api.php');



