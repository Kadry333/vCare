<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Major;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $majors = Major::take(12)->get();
        $doctors = User::with('major')->take(20)->where('role',"doctor")->get();
        return view('front.home',compact('majors','doctors'));
    }
}
