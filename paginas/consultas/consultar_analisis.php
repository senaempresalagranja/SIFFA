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
								<li><a href="consultar_laboratorio.php" class="dr-icon dr-icon-eye-plus">Consultar Laboratorio	 </a></li>
								<li><a href="consultar_fetilizante.php" class="dr-icon dr-icon-eye-plus">Consultar Fertilizante</a></li>


              </ul></li>
              <li><a class="dr-icon dr-icon-settings" href="#">Ayuda</a></li>
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

<form action="" id="formulario" method="POST">
	<div class="col-md-12">
		<h1 class="help-block  text-center icon-eye">  CONSULTAR ANALISIS</h1>
	</div>

	<div class="row">
		<br>
			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="form-group">

					<label for="">Nombre Finca</label>
					<input type="text" name="Nombre_Finca"  style="text-transform: uppercase;" id="Nombre_Finca" class="form-control">
				</div>
			</div>


						<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="form-group">

					<label for="">Lote</label>
					<input type="number" name="lote"  style="text-transform: uppercase;" id="lote" class="form-control">
				</div>
			</div>


									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="form-group">

					<label for="">Cultivo</label>
					<input type="text" name="cultivo"  style="text-transform: uppercase;" id="cultivo" class="form-control">
				</div>
			</div>
				<div class="col-xs-1 col-md-1 col-lg-1">

<a href="#"  class="Excel" id="excel"   title="Exportar a Excel" onclick="exportar_excel()" ><h1 class="icon    icon-file-excel"></h1></a>

</div>

<div class="col-xs-1 col-md-1 col-lg-1">

<a href="#"   class="pdf" id="pdf" title="Exportar a Pdf" onclick="exportar()"><h1 class="icon    icon-file-pdf"></h1></a>
</div>

	</div>
</div>


<div class="container-fluid">
<div class="table-responsive">
  

 <div class='col-xs-12 col-md-12 col-lg-12'>	


<div class=' col-md-2  btn-success'>ANALISIS REALIZADOS</div>
<div class=' col-md-1  btn-success'># LOTE</div>
<div class=' col-md-1  btn-success'>LOTE (Ha)</div>
<div class=' col-md-2  btn-success'>CULTIVO</div>
<div class=' col-md-2  btn-success'>CULTIVO (Ha)</div>
<div class=' col-md-2  btn-success'>FINCA</div>
<div class=' col-md-2  btn-success'>FINCA (Ha)</div>




</div>
</div>
<div class="" id="contenedor"></div>
</div>
</form>




<script>

$(document).ready(inicio);


function inicio() {
var Nombre_Finca=document.getElementById('Nombre_Finca').focus();
$("#Nombre_Finca").keyup(validar_nombre);
 $("#Nombre_Finca").keyup(consulta_automatica);
 $("#lote").keyup(consulta_automatica);
  $("#lote").keyup(validar_lote);
 $("#cultivo").keyup(consulta_automatica);

 $("#cultivo").keyup(validar_cultivo);

if (Rol=='Consulta') {

var captura_datos=document.getElementById('captura_datos').style.display='none';
var configuraciones=document.getElementById('configuraciones').style.display='none';
var copia_seguridad=document.getElementById('copia_seguridad').style.display='none';


};

}
function validar_cultivo() {
var cultivo=document.getElementById('cultivo').value;


if (cultivo.length==0 || /[\\^"'<>;ç`,-_ª%&¿¨Ç¡º#~¬€$.*+?=!:|\\/()\[\]{}]/.test(cultivo)) {


var cultivo=document.getElementById('cultivo').style.border="1px solid red";
return false
}else {
var cultivo=document.getElementById('cultivo').style.border="1px solid green"
return true

}


}

function validar_lote() {

	var lote=document.getElementById('lote').value;
	
if(lote==null  || lote.length==0 || /^\s+$/.test(lote) || lote<0){

var lote=document.getElementById('lote').style.border="1px solid red";
return false
}else if (isNaN(lote)) {

var lote=document.getElementById('lote').style.border="1px solid red";
return false


}else{

var lote=document.getElementById('lote').style.border="1px solid green";

return true

}

}
function validar_nombre() {

var Nombre_Finca=document.getElementById('Nombre_Finca').value;


if (Nombre_Finca.length==0 || /[\\^"'<>;ç`,-_ª%&¿¨Ç¡º#~¬€$.*+?=!:|\\/()\[\]{}]/.test(Nombre_Finca)) {


var Nombre_Finca=document.getElementById('Nombre_Finca').style.border="1px solid red";
return false
}else {
var Nombre_Finca=document.getElementById('Nombre_Finca').style.border="1px solid green"
return true

}


}

function consulta_automatica() {
if (validar_nombre()==true ) {
var Nombre_Finca=document.getElementById('Nombre_Finca').value;
var lote=document.getElementById('lote').value;
var cultivo=document.getElementById('cultivo').value;
Nombre_Finca= Nombre_Finca.toUpperCase();
cultivo=cultivo.toUpperCase();
$("#contenedor").load("consulta_automatica_analisis.php", {Nombre_Finca:Nombre_Finca, cultivo:cultivo,lote:lote});


}else if (validar_lote()==true) {

var Nombre_Finca=document.getElementById('Nombre_Finca').value;
var lote=document.getElementById('lote').value;
var cultivo=document.getElementById('cultivo').value;
Nombre_Finca= Nombre_Finca.toUpperCase();
cultivo=cultivo.toUpperCase();
$("#contenedor").load("consulta_automatica_analisis.php", {Nombre_Finca:Nombre_Finca, cultivo:cultivo,lote:lote});
}else if (validar_cultivo()==true){

	var Nombre_Finca=document.getElementById('Nombre_Finca').value;
var lote=document.getElementById('lote').value;
var cultivo=document.getElementById('cultivo').value;
Nombre_Finca= Nombre_Finca.toUpperCase();
cultivo=cultivo.toUpperCase();
$("#contenedor").load("consulta_automatica_analisis.php", {Nombre_Finca:Nombre_Finca, cultivo:cultivo,lote:lote});
}



}



function exportar() {
var formulario=document.getElementById('formulario').action='exportaciones/exportar_consulta_analisis.php';
$("#formulario").submit();

}

function exportar_excel() {
var formulario=document.getElementById('formulario').action='exportaciones_excel/exportar_consulta_analisis.php';
$("#formulario").submit();	
}


$(document).ready(function(){
    $(document).bind("contextmenu", function(e){
        return false;
    });
});
</script>






</body>

  <style media="screen">

.border{
	border-bottom: 1px solid black;
}

      #contenedor{
    height: 450px;
  width: 100%;
  overflow: auto;
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
