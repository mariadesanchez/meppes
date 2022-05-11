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

<script LANGUAGE="JavaScript">
function Validar(form)
{
  if (form.T1.value == "")
  { alert("Debe ingresar un usuario"); form.T1.focus(); return; }

  if (form.T2.value == "")
  { alert("Debe ingresar su contraseña"); form.T2.focus(); return; }

  form.submit();
}
</script>
<style type="text/css">
  #carga {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
  <table border="0" cellpadding="0" cellspacing="0" width="750" style="border: 1 solid #000000" height="333">
    <tr>
      <!--<td width="750" colspan="2" height="72"><img border="0" src="../_imagenes/cabezal.gif" width="750" height="85"></td>-->
    </tr>
    <tr>
      <td bgcolor="969696" width="350" height="20">
      <!--Inicio script de fecha -->
      <font face="Verdana" size="1" color="#ffffff">
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
    <tr>
      <td width="750" colspan="2">
<div id ="userpass" style="display: none;">
<form method="POST" name='frm1'action="http://sistemasl.ioma.gba.gov.ar/sistemas/meppes_farmacias/farm_car_rece2.php">

  <div align="center">
    <center>
    <table border="0" cellpadding="0" cellspacing="0" width="700">
      <tr>
        <td height="30" align="right">Usuario:</td>
        <td>&nbsp;<input type="text" name="T1" value="11403" size="10" maxlength=8
                onChange="javascript:this.value=this.value.toUpperCase()"></td>
      </tr>
      <tr>
        <td align="right">Contraseña:</td>
        <td>&nbsp;<input type="password" name="T2"value="00000000" size="10" maxlength=8></td>
        <input type='hidden' name='codfar' value='11111'>
        <input type='hidden' name='cod_auto' size='11' value="5446932-4" maxlength='11' onKeyPress="return acceptNumGuiEspa(event)">&nbsp;


       
      </tr>
    </table>
    </center>
  </div>
</div><table id="carga">
<tr>
 <th> <p> Nombre y Apellido </p></th>
<th> <p> Número de Aliliado </p></th>
<th> <p> Fecha de Prescripción</p></th>
<th> <p> Fecha de Vencimiento </p></th>
<th> <p> Código de Autorización </p></th>
<th><p>Cargar Receta</p>
</th></tr>

<tr>
 <td> <p> Sanchez Maria De Los Angeles </p></td>
<td> <p> 25341763 </p></td>
<td> <p> 1/1/2022</p></td>
<td> <p> 1/2/2022 </p></td>
<td> <p> 5446932-4</p></td>
<td>
            <p align="center">
              <button type="button" class="btn btn-success"onClick="Validar(this.form)">Cargar Receta</button>
             <!-- <input type="button" value="Entrar" onClick="Validar(this.form)">
              <input type="reset" value="Borrar Datos" name="B2">
              &nbsp;
            </p>-->
</form>
</td></tr>
<tr>
 <td> <p> Sanchez Maria Elena </p></td>
<td> <p> 25341764 </p></td>
<td> <p> 15/1/2022</p></td>
<td> <p> 14/2/2022 </p></td>
<td> <p> 5446932-4</p></td>
<td>
            <p align="center">
              <button type="button" class="btn btn-success"onClick="Validar(this.form)">Cargar Receta</button>
             <!-- <input type="button" value="Entrar" onClick="Validar(this.form)">
              <input type="reset" value="Borrar Datos" name="B2">
              &nbsp;
            </p>-->
</form>
</td></tr>

</table>
 <!-- <p align="center">
     <input type="button" value="Salir" onClick="window.close()"><strong>&nbsp;</strong>
  </p>-->
  </table>
  </center>
</div>
 </body>

</html>


