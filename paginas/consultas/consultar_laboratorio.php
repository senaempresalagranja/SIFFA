<script>
  // var stateObj =window.location;

// window.history.pushState(null , '', ".html");

window.history.replaceState( {} , '', '' );
window.location = "#JERR";
</script>
<?php


include '../conexion_login/inicio_sesion.php';


echo "<script>


var Rol='$fila[2]';


</script>";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>SIFFA</title>
	<link rel="stylesheet" href="../../css/estilos.css">
	<link rel="stylesheet" href="../../css/bootstrap.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/menu_siffa.css" />
	<link rel="stylesheet" href="../../css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="../../css/alert.css">
	<link rel="stylesheet" href="../../css/fileinput.css">
	<link rel="stylesheet" href="../../css/alert2.css">
	<link rel="stylesheet" href="../../css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="../../css/bootstrap-select.css">
	<script src="../../js/alert.js"></script>
	<script src="../../js/jquery.js" charset="utf-8"></script>
	<script src="../../js/bootstrap.min.js" charset="utf-8"></script>
	<script src="../../js/bootstrap.js" charset="utf-8"></script>
	<script src="../../js/alert.js" charset="utf-8"></script>
	<script src="../../js/alert2.js" charset="utf-8"></script>
	<script src="../../js/bootstrap-select.js"></script>
	<script src="../../js/fileinput.js"></script>
	<link href="../../img/logosolo1.png" rel="icon" >


<body>

<div class="col-xs-12 col-md-12 col-lg-12 header">

</div>

<div class="col-xs-12 col-md-12 col-lg-12">
  <div class=" col-xs-7 col-sm-7 col-md-5 col-lg-3"></div>



  <div class="col-xs-2 col-md-2 col-lg-2">
     <div class="titulo">
  <img src="../../img/logosolo.png" alt="">
<h1 class="help-block">SIFFA</h1>
</div>  
  </div>






</div>





<div class="col-xs-12 col-md-12 col-lg-12">
<div class="col-xs-8 col-sm-7 col-md-6 col-lg-4">
    <!-- AQUI ABAJO ES LO DE MENU -->
		<div class="side">
			<nav class="dr-menu">
				<div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label"></a></div>
				<ul>
					<li><a class="dr-icon dr-icon-user" href="#"><?php echo $fila[1] ?></a></li>
					<li  class="submenu" id='captura_datos'><a id="submenu" class="dr-icon dr-icon-pencil2"    href="#" >Captura de Datos</a>
						<ul class="children"  id="children">
							<li><a href="../ingresar_informacion/ingresar_finca.php" class="dr-icon dr-icon-file-text">Ingresar Finca</a></li>
							<li><a href="../ingresar_informacion/ingresar_lote.php" class="dr-icon dr-icon-file-text">Ingresar Lote</a></li>
							<li><a href="../ingresar_informacion/ingresar_cultivo.php" class="dr-icon dr-icon-file-text">Ingresar Cultivo</a></li>
							<li><a href="../ingresar_informacion/ingresar_tipo_cultivo.php" class="dr-icon dr-icon-file-text">Ingresar Tipo Cultivo</a></li>
							<li><a href="../ingresar_informacion/ingresar_fertilizante.php" class="dr-icon dr-icon-file-text">Ingresar Fertilizante</a></li>
							<li><a href="../ingresar_informacion/ingresar_lotecultivo.php" class="dr-icon dr-icon-file-text">Ingresar LoteCultivo</a></li>
							<li><a href="../ingresar_informacion/ingresar_laboratorio.php" class="dr-icon dr-icon-file-text">Ingresar Laboratorio</a></li>
						</ul></li>
						<li><a class="dr-icon dr-icon-stats-dots" href="../interpretacion/calcular.php">Interpretacion del Suelo</a>
						</li>
						<li><a class="dr-icon dr-icon-eye" id="submenu1" href="#">Consultas</a>
							<ul class="children"  id="children1">
								<li><a href="consultar_requerimiento.php" class="dr-icon  dr-icon-eye-plus">Requerimientos </a></li>
								<li><a href="consultar_analisis.php" class="dr-icon dr-icon-eye-plus">Consultar Analisis</a></li>
								<li><a href="consultar_cultivo.php" class="dr-icon dr-icon-eye-plus">Consultar Cultivo </a></li>
								<li><a href="consultar_finca.php" class="dr-icon dr-icon-eye-plus">Consultar Finca </a></li>
								<li><a href="consultar_lote_cultivo.php" class="dr-icon dr-icon-eye-plus">Consultar Lotecultivo </a></li>
								<li><a href="#" class="dr-icon dr-icon-eye-plus">Consultar Laboratorio</a></li>
								<li><a href="consultar_fetilizante.php" class="dr-icon dr-icon-eye-plus">Consultar Fertilizante</a></li>


              </ul></li>
              <li><a class="dr-icon dr-icon-settings" href="../ayuda_online/index.php">Ayuda</a></li>
                   <li id="copia_seguridad"><a class="dr-icon   dr-icon-cloud" href="../backup_base_datos/index.php">Copia de Seguridad</a></li>
              <li id='configuraciones'><a class="dr-icon   icon-cog" href="../configuraciones/configurar.php">Configuraciones</a></li>
              <li ><a class="dr-icon     icon-bubble" href="../acerca_de/index.php">Acerca De</a></li>
              <!-- <li><a class="dr-icon dr-icon-switch" href="#">Logout</a></li> -->
              <li><a class="dr-icon  dr-icon-switch" href="../conexion_login/cerrar_sesion.php" >Cerrar Sesion</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div><!-- /container -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>




<div class="container">
	<div class="col-md-12">
		<h1 class="help-block  text-center icon-eye">  CONSULTAR LABORATORIO</h1>
	</div>

<form action="" id="formulario" method="POST">
<div class="row">
	<br>
			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="form-group">

					<label for="">Nombre Laboratorio</label>
					<input type="text" name="Nombre_Laboratorio"  style="text-transform: uppercase;" id="Nombre_Laboratorio" class="form-control">
				</div>
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="form-group">

					<label for="">Municipio</label>
					<input type="text" name="municipio"  style="text-transform: uppercase;" id="municipio" class="form-control">
				</div>
			</div>

			<div class="col-xs-1 col-md-1 col-lg-1">

<a href="#"  class="Excel" id="excel"   title="Exportar a Excel" onclick="Exportar_excel()"><h1 class="icon    icon-file-excel"></h1></a>

</div>

<div class="col-xs-1 col-md-1 col-lg-1">

<a href="#"   class="pdf" id="pdf" title="Exportar a Pdf" onclick="exportar()"><h1 class="icon    icon-file-pdf"></h1></a>
</div>
</div>

</form>

</div>

<div class='col-md-12'>	


 <div class='col-md-2  btn-success'>NOMBRE LABORATORIO</div>
<div class='col-md-3  btn-success'>DIRECCION</div>
<div class='col-md-2  btn-success'>TELEFONO</div>
<div class='col-md-2  btn-success'>MUNICIPIO</div>
<div class='col-md-2  btn-success'>DEPARTAMENTO</div>

</div>


<div class="" id="contenedor">









</div>



</body>
<script>
	$(document).ready(inicio);

function exportar () {
	var formulario=document.getElementById('formulario').action='exportaciones/exportar_consulta_laboratorio.php';
$("#formulario").submit();
}


function Exportar_excel() {
		var formulario=document.getElementById('formulario').action='exportaciones_excel/exportar_consulta_laboratorio.php';
$("#formulario").submit();
}


function inicio() {
var Nombre_Laboratorio=document.getElementById('Nombre_Laboratorio').focus();

 $("#Nombre_Laboratorio").keyup(consulta_automatica);
  $("#Nombre_Laboratorio").keyup(validar_nombre);
 $("#municipio").keyup(consulta_automatica);
 $("#municipio").keyup(validar_municipio);



 if (Rol=='Consulta') {

var captura_datos=document.getElementById('captura_datos').style.display='none';
var configuraciones=document.getElementById('configuraciones').style.display='none';
var copia_seguridad=document.getElementById('copia_seguridad').style.display='none';


 }


}


function validar_municipio() {
	
	
var municipio=document.getElementById('municipio').value;


if (municipio.length==0 || /[\\^"'<>;ç`,-_ª%&¿¨Ç¡º#~¬€$.*+?=!:|\\/()\[\]{}]/.test(municipio)) {


var municipio=document.getElementById('municipio').style.border="1px solid red";
return false
}else {
var municipio=document.getElementById('municipio').style.border="1px solid green"
return true

}




}

function validar_nombre() {
	

	var Nombre_Laboratorio=document.getElementById('Nombre_Laboratorio').value;


if (Nombre_Laboratorio.length==0 || /[\\^"'<>;ç`,-_ª%&¿¨Ç¡º#~¬€$.*+?=!:|\\/()\[\]{}]/.test(Nombre_Laboratorio)) {


var Nombre_Laboratorio=document.getElementById('Nombre_Laboratorio').style.border="1px solid red";
return false
}else {
var Nombre_Laboratorio=document.getElementById('Nombre_Laboratorio').style.border="1px solid green"
return true

}

}
function consulta_automatica () {


	if (validar_nombre()==true || validar_municipio()==true) {

var Nombre_Laboratorio=document.getElementById('Nombre_Laboratorio').value;
var municipio=document.getElementById('municipio').value;

$("#contenedor").load("consulta_automatica_laboratorio.php",{Nombre_Laboratorio:Nombre_Laboratorio,municipio:municipio})
		
	}


}

$(document).ready(function(){
    $(document).bind("contextmenu", function(e){
        return false;
    });
});
</script>



  <style media="screen">

  #container{
width: 100%;
  	height: 450px;
  	overflow: auto;
}

.borde{


	border-bottom: 1px solid black;
}

  .titulo img{


    position: relative;display: block;
  top: 46px;
  left: 45px;
  }
  .titulo h1{
  position: relative;
  color: white;
  left: 25px;
  top: 40px;
  }

.titulo{
width: 150px;
  height: 180px;
  z-index: 1;
  background: #A5DF00;
}


    .header{

  position: absolute;
  z-index: 0;
  background: black;
  height: 70px;


    }

    .padre{
  position: relative;
  z-index: 2;

    }

    .dr-menu{
      z-index: 3;
      bottom: 565px;

    }

    .ca-menu{


      position: absolute;
      top: 440px;
      left: 200px;
    }


    .Excel, .Excel:hover{
	color: green;
}

.pdf, .pdf:hover{

	color: brown;
}
</style>
  <script src="../../js/ytmenu.js"></script>
  <script src="../../js/menu-siffa.js"></script>
</html>
