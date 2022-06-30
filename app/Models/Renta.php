<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renta extends Model
{
    use HasFactory;
    protected $fillable = [
        'pelicula_id',
        'user_id',
        'f_registro',
        'f_entrega',
        'f_devolucion'
    ];
    public function peliculas(){
        return $this->belongsToMany(Pelicula::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
