<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Major;
use App\Models\User;

class MajorController extends Controller
{
    public function index()
    {
      $majors = Major::paginate(12);
      return view('front.majors.index',['majors' => $majors]);
    }
    public function doctors(Major $major)
    {
      $doctors = User::with('major')
      ->where('role',"doctor")
      ->where('major_id',$major->id)
      ->cursorPaginate(12);
      return view('front.doctors.index',compact('doctors'));
    }
}
