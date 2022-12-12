<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class ImageUploadController extends Controller
{
    public function fileStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);

        $imageUpload = new Gallery;
        $imageUpload->filename = $imageName;
        $imageUpload->user_id = $request->user_id;
        $imageUpload->property_id = $request->property_id;
        $imageUpload->save();
        return response()->json(['success'=>$imageName]);
    }
}
