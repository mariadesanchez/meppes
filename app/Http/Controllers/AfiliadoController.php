<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfiliadoController extends Controller
{
    $recetas = $afiliado->recetas;
    return view('welcome',compact('recetas'));
}
