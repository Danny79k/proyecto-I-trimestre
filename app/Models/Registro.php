<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{

    use HasFactory;
    protected $fillable = [
        'inicio_ciclo',
        'user_id',
        'ciclo_id',
        'compostera_id',
    ];

    public function antes(){
        return $this->hasMany(Antes::class);
    }
    public function durante(){
        return $this->hasMany(Durante::class);
    }
    public function despues(){
        return $this->hasMany(related: Despues::class);
    }
}
