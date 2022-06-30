<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'f_expedicion',
        'f_expiracion',
    ];
    
    public function users(){
        return $this->belongsToMany(User::class);
    }
}