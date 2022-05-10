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
  <table border="0" cellpadding="0" cellspacing="0" width="80%" style="border: 1 solid #000000" height="333">
    <tr>
      <!--<td width="750" colspan="2" height="72"><img border="0" src="../_imagenes/cabezal.gif" width="750" height="85"></td>-->
    </tr>
    <tr>
      <td bgcolor="969696" width="350" height="20">
      <!--Inicio script de fecha -->
      <font face="Verdana" size="3" texcolor="#ffffff">
      <script language="JavaScript">
<!--
var dayNames = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");

// Array of month Names
var monthNames = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

var now = new Date();
document.write(dayNames[now.getDay()] + " " + now.getDate() + " de " + monthNames[now.getMonth()] + "  de " + now.getFullYear());

// -->
</script>

<script language="Javascript"> // Solo Numeros, guiones y espacios.
var nav2 = window.Event ? true : false;
function acceptNumGuiEspa(evt)
{
// NOTA: Backspace = 8, Enter = 13, '0' = 48, '9' = 57, '-' = 45, Espacio = 32
var key = nav2 ? evt.which : evt.keyCode;
return (key <= 13 || (key >= 48 && key <= 57)
        || key==45 || key==32);
}
</script>
<!--Fin script de fecha -->
</font>
</td>
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
    <button type="button" class="btn btn-warning" >Inicio</button>
    <button type="button" class="btn btn-success" style="margin-left: 0.5em;">Mis Recetas</button>
    <button type="button" class="btn btn-success" style="margin-left: 0.5em;">Cargar Receta</button>
    
    </div>
  </div>
<br><br>
   <center>
      <table border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1 solid #000000" height="333" id="carga">

<div id ="userpass" style="display: none;">
<form method="POST" name='form1'action="http://sistemasl.ioma.gba.gov.ar/sistemas/meppes_farmacias/farm_car_rece2.php">

    <input type="password" name="T2"value="00362018" size="10" maxlength=8>
        <input type='hidden' name='codfar' value='11403'>
        <input type='hidden' name='cod_auto' size='11' value="5446932-4" maxlength='11' onKeyPress="return acceptNumGuiEspa(event)">&nbsp;

  
    </div>
   
     

<tr>
 <th> <p> Nombre <br>y Apellido </p></th>
<th> <p> Número de<br> Aliliado </p></th>
<th> <p> Fecha de <br>Prescripción</p></th>
<th> <p> Fecha de <br>Vencimiento </p></th>
<th> <p> Código de<br> Autorización </p></th>
<th><p>Cargar Receta</p></th>
<th><p>Enviar Mensaje</p></th>
<th><p>Entregar</p></th>
</tr>


<tr>
 <td> <p> Sanchez Maria De Los Angeles </p></td>
<td> <p> 25341763 </p></td>
<td> <p> 1/1/2022</p></td>
<td> <p> 1/2/2022 </p></td>
<td> <p> 5446932-4</p></td>
<td>
            <p align="center">
             <button class="btn btn-success"type="submit"  name ="form1">Cargar Receta</button> 
              <!--<button type="button" class="btn btn-success">Cargar Receta</button>
             <input type="button" value="Entrar" onClick="Validar(this.form)">
              <input type="reset" value="Borrar Datos" name="B2">
              &nbsp;
            </p>-->
</form>
</td>
<td> <p> <a href="https://api.whatsapp.com/send?phone=542213602683&text=hola!%20Juan%20queríamos%20avisarte%20que%20ya%20se%20encuentra%20tu%20pedido%20de%20IOMA%20MEPPES%20para%20retirar.%20Recuerda%20traer%20la%20receta%20para%20poder%20retirar%20el%20pedido.%20saludos%20María">Mensaje</a></p></td>
<td>  <button type="button" class="btn btn-warning">Entregar</button></td>

</tr>


<div id ="userpass" style="display: none;">
<form method="POST" name='form2'action="http://sistemasl.ioma.gba.gov.ar/sistemas/meppes_farmacias/farm_car_rece2.php">

    <input type="password" name="T2"value="00362018" size="10" maxlength=8>
        <input type='hidden' name='codfar' value='11403'>
        <input type='hidden' name='cod_auto' size='11' value="5446949-4" maxlength='11' onKeyPress="return acceptNumGuiEspa(event)">&nbsp;

  
    </div>
<tr>
 <td> <p> Sanchez Maria Elena </p></td>
<td> <p> 25341764 </p></td>
<td> <p> 15/1/2022</p></td>
<td> <p> 14/2/2022 </p></td>
<td> <p> 5446949-4</p></td>
<td>
            <p align="center">
             <button class="btn btn-success"type="submit"  name ="form2">Cargar Receta</button> 
             
</form>
</td>
<td> <p> <a href="https://api.whatsapp.com/send?phone=5492213502683&text=hola,%20¿qué%20tal%20estás?">Mensaje</a></p></td>
<td>  <button type="button" class="btn btn-warning">Entregar</button></td>
</tr>

<div id ="userpass" style="display: none;">
<form method="POST" name='form3'action="http://sistemasl.ioma.gba.gov.ar/sistemas/meppes_farmacias/farm_car_rece2.php">

    <input type="password" name="T2"value="00362018" size="10" maxlength=8>
        <input type='hidden' name='codfar' value='11403'>
        <input type='hidden' name='cod_auto' size='11' value="5446934-4" maxlength='11' onKeyPress="return acceptNumGuiEspa(event)">&nbsp;

  
    </div>

<tr>
 <td> <p> Sanchez Maria Elena </p></td>
<td> <p> 25341764 </p></td>
<td> <p> 15/1/2022</p></td>
<td> <p> 14/2/2022 </p></td>
<td> <p> 5446934-4</p></td>
<td>
            <p align="center">
             <button class="btn btn-success"type="submit"  name ="form3">Cargar Receta</button> 
             <!-- <input type="button" value="Entrar" onClick="Validar(this.form)">
              <input type="reset" value="Borrar Datos" name="B2">
              &nbsp;
            </p>-->
</form>
</td><td> <p> <a href="https://api.whatsapp.com/send?phone=5492213502683&text=hola,%20¿qué%20tal%20estás?">Mensaje</a></p></td>
<td>  <button type="button" class="btn btn-warning">Entregar</button></td>
</tr>
  </table>
  </center>
</div>
 </body>

</html>


