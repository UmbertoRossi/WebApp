<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;
use App\Models\Image;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DropzoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = Image::all();
        return view('client_resources/edit', compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_resources/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
        $image = request('imageFile');
        $imageName = time() . '.' . $image->extension();
        $imageData = new Image();
        $imageData->imageId = rand(1, 999999);
        $imageData->imageName = $imageName;
        $imageData->extension = $image->extension();
        $imageData->userId = auth()->user()->id;
        $slice = Str::after(url()->previous(), 'clients');
        $slice = Str::after($slice, '/');
        $slice = Str::before($slice,'/');
        $imageData->client_id = $slice;
        $imageData->status=false;
        $imageData->imageSizeMb = filesize($image) / 1024;
        $imageData->save();
        $image->move(public_path('imagesFolder'), $imageName);
        return response()->json(['success' =>$imageName]);
    }

    /**
     * Display the ID of the image.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showImageID($imageId)
    {
        Image::find($imageId);
    }

    /**
     * Display the ID of the user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showClientId($clientId)
    {
        Image::find($clientId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        // $image_path = "/images/filename.ext";  // Value is not URL but directory file path
        // if (File::exists($image_path)) {
        //     File::delete($image_path);
        // }
    }
}
