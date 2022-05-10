<html>

<head>
<meta http-equiv="Content-Language" content="es-mx">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Plan Meppes - Inicio</title>
<link rel="stylesheet" type="text/css" href="../_imagenes/estilo1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
  <center>

      <td bgcolor="969696" width="402" height="20">
      <!--Inicio include barra navegacion horizontal -->
      </td>
      <!--Fin include barra navegacion horizontal -->
    </tr>
    <tr>
      <td width="750" colspan="2" height="20">
     <!--Inicio include Titulo -->
     <h3><center>MEPPES - APP</center></h3>
     <h4><center>Tus Meppes</center></h4>
</td>
     <!--Fin include Titulo -->

      </tr>
    </table>
    </center>
  </div>
<div class="container">
  
  <div class="btn-group">
    <a href="/home">  <button type="button" class="btn btn-warning" >Inicio</button></a>
     
     <a href="/misrecetas">   <button type="button" class="btn btn-success" style="margin-left: 0.5em;">Mis Recetas</button></a>
    
    </div>
  </div>
<br><br>
   <center>
      <table border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1 solid #000000" height="333" id="carga">


 
  <form class="" action="/cargarreceta" method="post">
    <input type='hidden' name='farmacia_id' value='11403'>
    <input type='hidden' name='NombreApellido' value="{{ Auth::user()->name }}">
    <input type='hidden' name='afiliado_id' value="{{ Auth::user()->afiliado_numero}}">
                {{csrf_field()}}
              
          <label style="size:2em;color: orange">     {{ $message ?? '' }}</label><br>
  <label for="fecha_prescripcion">Fecha de Prescripción</label><br>
  <input type="date" name="fecha_prescripcion" value=""><br>
  <label for="fecha_vencimiento">Fecha de Vencimiento</label><br>
  <input type="date"  name="fecha_vencimiento" value=""><br><br>
  <label for="codigo_autorizacion">Código de Autorización</label><br>
  <input type="text"  name="codigo_autorizacion" value="" placeholder="5443389-4"><br><br>
  <p>* Colocar el número de código de autorización incluyendo el -</p>
  <input type="submit" value="Enviar Receta" class="btn btn-success" style="color:black; width: 10%;">
</form>   


</tr>
  </table>

  </center>
</div>

 </body>

</html>


