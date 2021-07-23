<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['ragioneSociale', 'partitaIva', 'telefono','id'];

    public function orders() {
        return $this -> hasMany(Order::class);
    }

    public static function returnImage($id){
        $image_path = public_path('imagesFolder');
        $query = DB::table('images')->where('client_id', '=', $id);
        $images = $query->get();
        return $images;
    }

}
