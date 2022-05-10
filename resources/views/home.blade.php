@extends('layouts.app')

@section('content')
<meta http-equiv="Content-Language" content="es-mx">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Plan Meppes - Inicio</title>
<link rel="stylesheet" type="text/css" href="../_imagenes/estilo1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="container">
    <div class="row justify-content-center">
        <div class="container">
  
  <div class="btn-group">
    <a href="/misrecetas">  <button type="button" class="btn btn-success" >Mis Recetas</button></a>
     
     <a href="/cargarreceta">   <button type="button" class="btn btn-success" style="margin-left: 0.5em;">Cargar Receta</button></a>
    
    </div>
  </div>
        
</div>
@endsection
