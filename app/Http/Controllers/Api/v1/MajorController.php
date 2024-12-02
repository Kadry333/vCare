<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Major;

class MajorController extends Controller
{
    public function index()
    {
        $majors = Major::paginate(10);
        return response()->json($majors);
    }
    public function show($id)
    {
        $major = Major::findOrFail($id);
        return response()->json(["data"=>$major]);
    }
    public function doctors($id)
    {
        $doctor = User::where('role','doctor')->where('major_id',$id)->get();
        return response()->json(["doctors"=>$doctor]);
    }
}
