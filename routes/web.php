<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\AuthController;
use App\Http\Controllers\front\MajorController;
use App\Http\Controllers\front\DoctorController;
use App\Http\Controllers\front\AppointmentController;

Route::get('/',[HomeController::class,"index"]);

Route::get('/contact',[ContactController::class,"index"]);

Route::get('/auth',[AuthController::class,"index"]);

Route::get('/majors',[MajorController::class,"index"]);

Route::get('/doctor',[DoctorController::class,"index"]);

Route::get('/appointment',[AppointmentController::class,"index"]);

