<?php
use App\Http\Controllers\admin\MajorController;


Route::resource('majors', MajorController::class)->except(['create','index','show']);
Route::get('majors/add', [MajorController::class, 'create'])->name('majors.create');
