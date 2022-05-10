<html>

<head>
<meta http-equiv="Content-Language" content="es-mx">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Plan Meppes - Inicio</title>
<link rel="stylesheet" type="text/css" href="../_imagenes/estilo1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script language="JavaScript">
<!--
// Maximizar Ventana
window.moveTo(0,0);
if (document.all) {
top.window.resizeTo(screen.availWidth,screen.availHeight);
}
else if (document.layers||document.getElementById) {
if (top.window.outerHeight<screen.availHeight||top.window.outerWidth<screen.availWidth){
top.window.outerHeight = screen.availHeight;
top.window.outerWidth = screen.availWidth;
}
}
//-->
</script>

<!--<script LANGUAGE="JavaScript">
function Validar(form)
{
  if (form.T1.value == "")
  { alert("Debe ingresar un usuario"); form.T1.focus(); return; }

  if (form.T2.value == "")
  { alert("Debe ingresar su contraseña"); form.T2.focus(); return; }

  form.submit();
}
</script>-->
<style type="text/css">
  #carga {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#carga td, #carga th {
  border: 1px solid #ddd;
  padding: 8px;
}

#carga tr:nth-child(even){background-color: #f2f2f2;}

#carga tr:hover {background-color: #ddd;}

#carga th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<div align="center">
  
     <h3><center>MEPPES - APP</center></h3>
     <h4><center>Tus Meppes</center></h4>


<table id="carga">
<tr>
 <th> <p> Nombre y Apellido </p></th>
<th> <p> Número de Aliliado </p></th>
<th> <p> Fecha de Prescripción</p></th>
<th> <p> Fecha de Vencimiento </p></th>
<th> <p> Código de Autorización </p></th>
<th><p>Cargar Receta</p></th>
<th><p>Enviar Mensaje</p></th>
<th><p>Entregar</p></th></tr>  

<p> @foreach($users as $user) 
  @foreach($recetas as $receta)
 @if($user->afiliado_numero==$receta->Afiliado_id)
<form method="POST" name='{{$receta->CodigoAutorizacion}}'action="http://sistemasl.ioma.gba.gov.ar/sistemas/meppes_farmacias/farm_car_rece2.php">


<input type='hidden' name='codfar' value='11403'>
             
<input type='hidden' name='cod_auto' size='11' value="{{$receta->CodigoAutorizacion}}" maxlength='11' onKeyPress="return acceptNumGuiEspa(event)">&nbsp;<br>
  

 
          <tr><td>{{$receta->NombreApellido}}<br></td>
          <td> {{$receta->Afiliado_id}}<br></td>
          <td> {{$receta->FechaPrescripcion}}<br></td>
          <td> {{$receta->FechaVencimiento}}<br></td>
          <td> {{$receta->CodigoAutorizacion}}<br></td>
           <td><button class="btn btn-success"type="submit"  name ="{{$receta->CodigoAutorizacion}}">Enviar Receta</button> <br></td>
         </form>
         <td>  <a href="https://api.whatsapp.com/send?phone=549&$user->phone&text=hola,%20¿qué%20tal%20estás?">Mensaje</a><br></td>
         <td>   <p><button type="button" class="btn btn-warning">Entregar</button></p><br></td></tr>
@endif
@endforeach
@endforeach</p>



  </table>

 </body>

</html>


