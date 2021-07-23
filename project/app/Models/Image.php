<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['imageId','imageName','extension','userId','client_id','status','imageSizeMb'];

    public function orders()
    {
        return $this->belongsTo(User::class);
    }

    public static function setStatus()
    {
        $updatedStatus = DB::table('images')
        ->where('client_id', '=', 1)
        ->where('status', '=', false)
        ->update(['status' => true]);
        return $updatedStatus;
    }

    public static function destroyImage()
    {
        $image_path = 'App\public\imagesFolder';
        $files = Storage::files($image_path);
        foreach ($files as $file) {
            DB::table('images')->where('status', '=', false)->delete();
        }
/* 
        $uselessStatus = DB::table('images')
        ->where('status', '=', false)
        ->delete();
        return $uselessStatus; */
    }
}


