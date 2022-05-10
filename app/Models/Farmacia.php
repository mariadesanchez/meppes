<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    protected $table = 'farmacias';
    protected $guarded = [];

function public farmaciaafiliados(){
        return $this->hasMany(Afiliado::class);


    }

    function public farmaciarecetas(){
        return $this->hasMany(Receta::class);


    }




}
