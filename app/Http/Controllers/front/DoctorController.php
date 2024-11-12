<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = User::with('major')->where('role','doctor')->cursorPaginate(12);
        return view('front.doctors.index',compact('doctors'));

    }
}
