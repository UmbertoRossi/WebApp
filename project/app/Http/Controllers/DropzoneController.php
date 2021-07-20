<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    public function store()
    {
        $image = request('imageFile');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        return response()->json(['success'=>$imageName]);
    }
}
