<?php

namespace App\Http\Controllers;

use App\Models\Receta;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
   public function cargarreceta(Request $form){ 


$receta= new Receta();

$receta->FechaPrescripcion= $form["fecha_prescripcion"];
$receta->FechaVencimiento= $form["fecha_vencimiento"];
$receta->CodigoAutorizacion= $form["codigo_autorizacion"];
$receta->Farmacia_id= $form["farmacia_id"];
$receta->Afiliado_id= $form["afiliado_id"];
$receta->NombreApellido= $form["NombreApellido"];
$receta->Activo= 'Pendiente';
$receta->save();
$afiliado_id=$form["afiliado_id"];



$Receta_id= $receta->id;

session(["Receta_id" => $Receta_id]);


$message='Receta Enviada Excitosamente!!!';

return view("cargarreceta",compact("message",'afiliado_id'));


}

}
