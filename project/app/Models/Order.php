<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'client_id', 'project_id', 'titolo','data', 'ora', 'descrizione', 'nome'];

    public function client () {
        return $this -> belongsTo(Client::class);
    }

    public function project () {
        return $this -> belongsTo(Project::class);
    }

    public function user () {
        return $this -> belongsTo(User::class);
    }
}
