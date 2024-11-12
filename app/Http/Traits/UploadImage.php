<?php
namespace App\Http\Traits; 

trait UploadImage
{
    public function upload($path)
    {
        $image_name = request()->image->getClientOriginalName(); // get image name
        $image_name = time() . rand() . '_' . $image_name; // make the image name unique
        request()->image->move(public_path($path), $image_name); // move the image to public/uploads/majors
        return $image_name;
    }
}
