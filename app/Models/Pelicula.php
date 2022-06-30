<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'director',
        'genero',
        'actor1',
        'actor2'
    ];
    public function rentas(){
        return $this->hasMany(Renta::class);
    }
}