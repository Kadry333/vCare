<?php
use App\Http\Controllers\admin\MajorController;
Route::get('majors/add',[MajorController::class,"create"]);
Route::post('majors',[MajorController::class,"store"]);