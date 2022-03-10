<?php


namespace App\Models;

use App\Models\Consolas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juegos extends Model
{
    use HasFactory;


    
    public function consola() {
        return $this->belongsTo(Consolas::class);
    }
}
