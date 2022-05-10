<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $guarded = [];

     public function getTipoRole()
    {
        return $this->TipoRole;
    }

     public function getNumero()
    {
        return $this->Numero;
    }
 }
