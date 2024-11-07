<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Major;

class MajorController extends Controller
{
    public function create()
    {
        return view('admin.majors.create');
    }
    public function store()
    {
        request()->validate(
            [
                'name'=>"required|string|min:3|max:50",
                'image'=>["required","image"]
            ]
            );
            $image_name = request()->image->getClientOriginalName();//get image name
            $image_name = time().rand().'_'.$image_name;//make the image name unique
            request()->image->move(public_path('uploads/majors/'),$image_name);//move the image to public/uploads/majors
            Major::create(
                [
                  'name'=>request()->name,
                  'image'=>$image_name
                ]
                );
                return back()->with('success','Data Added Successfully');
    }
}
