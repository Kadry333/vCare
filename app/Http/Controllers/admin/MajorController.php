<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Major;
use App\Http\Traits\UploadImage;
class MajorController extends Controller
{
    use UploadImage;

    public function create()
    {
        return view('admin.majors.create');
    }

    public function store()
    {
        request()->validate([
            'name' => "required|string|min:3|max:50",
            'image' => ["required", "image"]
        ]);

        $image_name = $this->upload('uploads/majors/');
        Major::create([
            'name' => request()->name,
            'image' => $image_name
        ]);

        return back()->with('success', 'Data Added Successfully');
    }

    public function edit(Major $major)
    {
        return view('admin.majors.edit', compact('major'));
    }

    public function update(Major $major)
    {
    
        // Validate the inputs
        request()->validate([
            'name' => "required|string|min:3|max:50",
            'image' => ["nullable", "image"]
        ]);
    
        // Update the name
        $major->name = request()->name;
    
    
        if (request()->hasFile('image')) {
            // Upload the new image and update the 'image' field
            $image_name = $this->upload('uploads/majors/');
            $major->image = $image_name;
        }
    
        // Save the updated major
        if ($major->save()) {
            return back()->with('success', 'Data Updated Successfully');
        } else {
            return back()->with('error', 'Failed to update the data');
        }
    }
    public function destroy(Major $major)
    {
        $major->delete();
        return back()->with('success',"Data Delete Successfully");
    }
    
}
