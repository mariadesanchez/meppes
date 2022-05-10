<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\RecetaController;
use App\Models\User;
use App\Models\Receta;

Route::get('/', function () {
     $user= Auth::user();
    /* $recetas=App\Models\Receta::all();*/
    

   
    return view('home',compact('user'));
});
Route::get('afiliado', function () {
    return view('afiliado');
});
Route::get('misrecetas', function () {
    $recetas=App\Models\Receta::all();
    $user= Auth::user();
    return view('misrecetas',compact('recetas','user'));
});

Route::get('cargarreceta', function () {
   
   $afiliado_id= Auth::user()->afiliado_numero;
   $NombreApellido=Auth::user()->name;
   $user= Auth::user();


    return view('cargarreceta',compact('afiliado_id','user','NombreApellido'));
});

Route::get('farmacia', function () {
     $recetas=App\Models\Receta::all();
    $users= App\Models\User::all();
    return view('farmacia',compact('recetas','users'));
});

Route::post('/cargarreceta','App\Http\Controllers\RecetaController@cargarreceta');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

