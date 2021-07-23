<?php

namespace App\Models;

use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
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

    public static function destroyOrphans()
    {
        $image_path = public_path('imagesFolder');
        $query = DB::table('images')->where('status', '=', false);
        $orphans = $query->get();
        foreach ($orphans as $orphan) {
            $file_path = $image_path.'\\'.$orphan->imageName;
            unlink($file_path);
        }

        $query->delete(); 

         /* DB::table('images')
        ->where('status', '=', false)
        ->delete();   */
         
    }
}


