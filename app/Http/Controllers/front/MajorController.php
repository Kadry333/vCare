<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Major;

class MajorController extends Controller
{
    public function index()
    {
      $majors = Major::cursorPaginate(12);
      return view('front.majors.index',['majors' => $majors]);
    }
}
