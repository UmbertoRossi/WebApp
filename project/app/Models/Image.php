<?php

namespace App\Models;

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
        $uselessStatus = DB::table('images')
        ->where('status', '=', false)
        ->get();
        return $uselessStatus->imageName;
    }
}


