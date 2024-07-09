
<script>
  // var stateObj =window.location;

// window.history.pushState(null , '', ".html");

window.history.replaceState( {} , '', '' );
window.location = "#JERR";
</script><?php

include '../conexion_login/inicio_sesion.php';
if ($fila[2]=="Consulta") {
header("Location:../conexion_login/cerrar_sesion.php");	
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
	<script src="../../js/cambiar_url.js"></script>
	<link href="../../img/logosolo1.png" rel="icon" >
</head>
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
				<li  class="submenu"><a id="submenu" class="dr-icon dr-icon-pencil2"    href="#" >Captura de Datos</a>
					<ul class="children"  id="children">
						<li><a href="ingresar_finca.php" class="dr-icon dr-icon-file-text">Ingresar Finca</a></li>
						<li><a href="#" class="dr-icon dr-icon-file-text">Ingresar Lote</a></li>
						<li><a href="ingresar_cultivo.php" class="dr-icon dr-icon-file-text">Ingresar Cultivo</a></li>
						<li><a href="ingresar_tipo_cultivo.php" class="dr-icon dr-icon-file-text">Ingresar Tipo Cultivo</a></li>
						<li><a href="ingresar_fertilizante.php" class="dr-icon dr-icon-file-text">Ingresar Fertilizante</a></li>
						<li><a href="ingresar_lotecultivo.php" class="dr-icon dr-icon-file-text">Ingresar LoteCultivo</a></li>
						<li><a href="ingresar_laboratorio.php" class="dr-icon dr-icon-file-text">Ingresar Laboratorio</a></li>
					</ul></li>
					<li><a class="dr-icon dr-icon-stats-dots" href="../interpretacion/calcular.php">Interpretacion del Suelo</a>
					</li>
					<li><a class="dr-icon dr-icon-eye" id="submenu1" href="#">Consultas</a>
						<ul class="children"  id="children1">
							<li><a href="../consultas/consultar_requerimiento.php" class="dr-icon  dr-icon-eye-plus">Requerimientos </a></li>
							<li><a href="../consultas/consultar_analisis.php" class="dr-icon dr-icon-eye-plus">Consultar Analisis</a></li>
							<li><a href="../consultas/consultar_cultivo.php" class="dr-icon dr-icon-eye-plus">Consultar Cultivo </a></li>
							<li><a href="../consultas/consultar_finca.php" class="dr-icon dr-icon-eye-plus">Consultar Finca </a></li>
							<li><a href="../consultas/consultar_lote_cultivo.php" class="dr-icon dr-icon-eye-plus">Consultar Lotecultivo </a></li>
							<li><a href="../consultas/consultar_laboratorio.php" class="dr-icon dr-icon-eye-plus">Consultar Laboratorio	 </a></li>
							<li><a href="../consultas/consultar_fetilizante.php" class="dr-icon dr-icon-eye-plus">Consultar Fertilizante</a></li>


						</ul></li>
						<li><a class="dr-icon dr-icon-settings" href="../ayuda_online/index.php">Ayuda</a></li>
						     <li id="copia_seguridad"><a class="dr-icon   dr-icon-cloud" href="../backup_base_datos/index.php">Copia de Seguridad</a></li>
						<li><a class="dr-icon   icon-cog" href="../configuraciones/configurar.php">Configuraciones</a></li>
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

	<form action="exportaciones/exportar_lote.php" method="POST" id="formulario">
	<div class="container">
		<div class="col-md-12">
			<h1 class="help-block text-center icon   icon-codepen">  Ingresar Lote</h1>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
				<div class="form-group">
					<label for="nombre_tipo_cultivo">Lote</label>
					<div  id="elemento_numero_lote">

						<input type="number" placeholder="3" id="numero_lote" name="numero_lote" class="form-control">
						<span class="help-block  icono_numero_lote icon-pushpin"></span>



					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="form-group">
					<div  id="elemento_hacienda">

					<label for="nombre_tipo_cultivo">Finca</label>
						<select name="hacienda" onclick='validar_existencia()' id="hacienda" class="hacienda form-control">
						<option value="Selecciona">Selecciona</option>
							<?php
$connection=mysqli_connect("localhost","root","","siffa");
							$query="SELECT * FROM hacienda";
$resource=mysqli_query($connection,$query);
while ($fila=mysqli_fetch_row($resource)) {
	echo "<option value='$fila[0]' >$fila[1]</option>";
}

							 ?>
						</select>
						<span class="help-block icon icono_hacienda icon-folder-open"></span>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="form-group">
					<div  id="elemento_coordenadas">

					<label for="coordenadas">Latitud</label>
						<input type="text" placeholder="Latitud" id="coordenadas" name="coordenadas" class="form-control">
						<span class="help-block icon icono_coordenadas  icon-compass2"></span>
						</div>


				</div>
			</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<div class="form-group">
					<div  id="elemento_longitud">


						<label for="nombre_tipo_cultivo">Longitud</label>
						<input type="text" placeholder="Longitud" id="longitud" name="longitud" class="form-control">
			<span class="help-block icon icono_coordenadas  icon-compass2"></span>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
				<div class="form-group">
					<div  id="elemento_tamaño">

					<label for="nombre_tipo_cultivo">Lote (Ha)</label>
						<input type="text" placeholder="3" id="tamaño" name="tamaño" class="form-control">
						<span class="help-block icon icono_tamaño  icon-crop"></span>
					</div>
				</div>
			</div>







		
				<div class="col-xs-1 col-md-1 col-lg-1">
				<a href="#" name="Registrar" title="Registrar Lote"  class="registrar" id="Registrar" onclick="enviar()"><h1 class="icon  icon-floppy-disk" ></h1></a>
			</div>




			<div class="col-xs-1 col-md-1 col-lg-1">
						<a href="#" class="consultar" title="Consultar Lote" onclick="consultar()"><h1 class="icon  icon-search"></h1></a>
					</div>

						<div class="col-xs-1 col-md-1 col-lg-1">

<a href="#"   class="pdf" id="pdf" title="Nuevo Registro" onclick="nuevo_registro()"><h1 class="icon     icon-plus"></h1></a>
</div>
<div class="col-xs-1 col-md-1 col-lg-1">

<a href="#" class="consultar actualizar" id="Actualizar" onclick="Actualizar()" title="Actualizar Lote" ><h1 class="icon    icon-redo"></h1></a>

</div>

<div class="col-xs-1 col-md-1 col-lg-1">

<a href="#"  class="eliminar" id="eliminar" onclick="eliminar_cultivo()"  title="Eliminar Lote" ><h1 class="icon   icon-bin"></h1></a>

</div>
<div class="col-xs-1 col-md-1 col-lg-1">

<a href="#"  class="Excel" id="excel"   title="Exportar a Excel" onclick="exportar_excel()" ><h1 class="icon    icon-file-excel"></h1></a>

</div>

<div class="col-xs-1 col-md-1 col-lg-1">

<a href="#"  class="pdf" id="pdf"   title="Exportar a PDF" onclick="exportar()"><h1 class="icon    icon-file-pdf"></h1></a>

</div>
</form>

		</div>

		<div class="col-md-12 " id="contenedor">


		</div>

	</div>



	 <div class="modal fade" id="consultar" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h1 class="modal-title">SELECCIONA UN LOTE</h1>

      </div>
      <div class="modal-body">


      <div class="col-md-12">
 	<div class="col-md-4">
           		<label for="finca1">Selecciona Finca</label>
           		<div id="">
					<select name="finca1"  onclick='mostrar_lote1()' id="finca1"  class="finca1 form-control">
						<option value="Selecciona">Selecciona</option>
							<?php
$connection=mysqli_connect("localhost","root","","siffa");
							$query="SELECT * FROM hacienda ORDER BY Nombre";
$resource=mysqli_query($connection,$query);
while ($fila=mysqli_fetch_row($resource)) {
	echo "<option   value='$fila[0]'>$fila[1]</option>";
}

							 ?>
						</select>
           		</div>
           	</div>

      	<div class="col-md-4">
      		<label for="">Selecciona Lote</label>
      		<div id="contendor_lote">
      <select  class="form-control " name=""    id=""  >

							<option value="Selecctiona" >Selecctiona </option>


									</select>
      	</div>
      	</div>
      </div>

									<a href="#" title="Elegir" data-dismiss="modal" onclick="consultar2()" class="consultar2"><h2 class="icon icon-checkmark"></h1></a>
      </div>
           <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar Consulta</a>
           </div>
   </div>
</div>


</body>
<style>
.Excel, .Excel:hover{
text-decoration: none;
	color: green;
}

.pdf, .pdf:hover{
text-decoration: none;
	color: brown;
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





.registrar{
		position: relative;
		display: block;
		width: 50px;
		height: 50px;
		top-height:0;
		bottom-height:0;
		color: black;
	}


.eliminar{

	position: relative;
		display: block;
		width: 50px;
		height: 50px;
		top-height:0;
		bottom-height:0;
		color: red;
		display: none;
}

.eliminar:hover{
color: red;
text-decoration: none;
}

	#Actualizar{

		position: relative;
		display: block;
		width: 50px;
		height: 50px;
		top-height:0;
		bottom-height:0;
		display: none;
		color: green;

	}

.consultar{
	position: relative;
		display: block;
		width: 50px;
		height: 50px;
		top-height:0;
		bottom-height:0;
		color: black;

}
.consultar2{
	position: relative;
		display: block;
		width: 50px;
		height: 50px;
		top-height:0;
		bottom-height:0;
		color: green;
		left: 87%;
}

.registrar:hover{

	text-decoration: none;
	color:black;
}
.consultar:hover,.consultar2:hover{

text-decoration: none;
	color:#000;
}

	.icono_numero_lote, .icono_tamaño{

		position: relative;
		display: block;
		left: 85%;
		top: -28px;
	}
	.icono_hacienda {
position: relative;
		display: block;
		left: 90%;
top: -28px;
	}


.registrar{

		position: relative;
		display: block;
		width: 50px;
		height: 50px;
		top-height:0;
		bottom-height:0;

		color: black;

	}
	.registrar:hover{

text-decoration: none;
	color:#000;
}

	.icono_coordenadas{
		position: relative;
		display: block;
		left: 93%;
top: -28px;
	}

</style>

<script>



function exportar_excel() {
	

swal({
  title: 'Advertencia',
  text: "Exportar Todos los Lotes",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Exportar Todos',
  cancelButtonText: 'Solo Este Formulario',
  buttonsStyling: true
}).then(function() {
var formulario=document.getElementById('formulario').action="exportaciones_excel/exportar_todos_lotes.php";
$("#formulario").submit();
}, function(dismiss) {
  // dismiss  'cancel', 'overlay', 'close', 'timer'
  if (dismiss === 'cancel') { if (validar_numero_lote()==true && validar_hacienda()==true && validar_coordenadas()==true && validar_longitud()==true && validar_tamaño()==true) {

var formulario=document.getElementById('formulario').action="exportaciones_excel/exportar_lote.php";

$("#formulario").submit();
  }else{
				swal("Error" ,"Algunos Campos estan Vacios o Incorrectos","error")
			}


}
})

}


function exportar() {



swal({
  title: 'Advertencia',
  text: "Exportar Todos los Lotes",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Exportar Todos',
  cancelButtonText: 'Solo Este Formulario',
  buttonsStyling: true
}).then(function() {
var formulario=document.getElementById('formulario').action="exportaciones/exportar_todos_lotes.php";
$("#formulario").submit();
}, function(dismiss) {
  // dismiss  'cancel', 'overlay', 'close', 'timer'
  if (dismiss === 'cancel') { if (validar_numero_lote()==true && validar_hacienda()==true && validar_coordenadas()==true && validar_longitud()==true && validar_tamaño()==true) {

var formulario=document.getElementById('formulario').action="exportaciones/exportar_lote.php";

$("#formulario").submit();
  }else{
				swal("Error" ,"Algunos Campos estan Vacios o Incorrectos","error")
			}


}
})



}





function mostrar_lote1() {
	var finca=document.getElementById('finca1').value;


$("#contendor_lote").load("mostrar_lote2.php",{finca:finca})
}

$(document).ready(function(){
    $(document).bind("contextmenu", function(e){
        return false;
    });
});


function eliminar_cultivo () {
var lote=document.getElementById('lote').value;

if (validar_numero_lote()==true && validar_hacienda()==true && validar_coordenadas()==true && validar_longitud()==true && validar_tamaño()==true) {

swal({
  title: "Advertencia",
  text: "Esta a punto de Eliminar el Lote " + lote   ,
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Si, Eliminar",
  cancelButtonText: "No, Cancelar",
  closeOnConfirm: true,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {

  } else {

  }
});

			} else{
				swal("Error" ,"Algunos Campos estan Vacios o Incorrectos","error")
			}



}




function Actualizar () {
if (validar_numero_lote()==true && validar_hacienda()==true && validar_coordenadas()==true && validar_longitud()==true && validar_tamaño()==true) {
var lote=document.getElementById('lote1').value;
var numero_lote=document.getElementById('numero_lote').value;
var hacienda=document.getElementById('hacienda').value;
var coordenadas=document.getElementById('coordenadas').value;
var tamaño=document.getElementById('tamaño').value;
var longitud=document.getElementById('longitud').value;

$("#contenedor").load("actualizar_lote.php",{lote:lote, numero_lote:numero_lote,hacienda:hacienda,coordenadas:coordenadas,tamaño:tamaño,longitud:longitud});


	}else{

	swal("Error", "Algunos Campos estan Vacios o Incorrectos" ,"error")
	}

}

function nuevo_registro() {

	var lote=document.getElementById('lote1').value='';
var numero_lote=document.getElementById('numero_lote').value='';
var hacienda=document.getElementById('hacienda').value='Selecciona';
var coordenadas=document.getElementById('coordenadas').value='';
var tamaño=document.getElementById('tamaño').value='';
var longitud=document.getElementById('longitud').value='';
	var actualizar=document.getElementById('Actualizar').style.display="none";
var eliminar=document.getElementById('eliminar').style.display="none";
var numero_lote=document.getElementById('numero_lote').focus();
}

function consultar2() {

var lote=document.getElementById('lote1').value;

	$("#contenedor").load("consultar_lote.php",{lote:lote});
var actualizar=document.getElementById('Actualizar').style.display="block";
var eliminar=document.getElementById('eliminar').style.display="block";
}




function consultar() {
	$("#consultar").modal("show");
}





$(document).ready(function  () {

var numero_lote=document.getElementById('numero_lote').focus();

	  $('#lote').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
})


	function enviar() {

if (validar_numero_lote()==true && validar_hacienda()==true && validar_coordenadas()==true && validar_longitud()==true && validar_tamaño()==true) {

var numero_lote=parseInt(document.getElementById('numero_lote').value);
var hacienda=parseInt(document.getElementById('hacienda').value);
var coordenadas=document.getElementById('coordenadas').value;
var tamaño=parseFloat(document.getElementById('tamaño').value);
var longitud=document.getElementById('longitud').value;
$("#contenedor").load("lote.php",{numero_lote:numero_lote,hacienda:hacienda,coordenadas:coordenadas,tamaño:tamaño,longitud:longitud});


	}else{

	swal("Error", "Algunos Campos estan Vacios o Incorrectos" ,"error")
	}



		}


$(document).ready(inicio);

function inicio() {

	$("#numero_lote").keyup(validar_numero_lote);
	$("#hacienda").keyup(validar_hacienda);
	$("#coordenadas").keyup(validar_coordenadas);
	$("#longitud").keyup(validar_longitud)
	$("#tamaño").keyup(validar_tamaño);
$("#numero_lote").keyup(validar_existencia);

}


function validar_existencia () {
		var numero_lote=document.getElementById('numero_lote').value;
		var hacienda=document.getElementById('hacienda').value;
		$("#contenedor").load("validar_existencia_lote.php",{numero_lote:numero_lote,hacienda:hacienda})
}

function validar_numero_lote() {


	var numero_lote=document.getElementById('numero_lote').value;
	if(numero_lote==null  || numero_lote.length==0 || /^\s+$/.test(numero_lote) || numero_lote<0){

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_numero_lote").attr("class", "form-group has-error  has-feedback");
				$("#numero_lote").parent().append('<span id="icono_texto" class="icon     form-control-feedback"></span>');

				return false;

			}
			else if (isNaN(numero_lote)) {
				$("#numero_lote").parent().children("p").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_numero_lote").attr("class", "form-group has-error has-feedback");
				$("#numero_lote").parent().append('<span id="icono_texto" class="icon     form-control-feedback"></span>');
				return false;

			}else {

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_numero_lote").attr("class", "form-group has-success has-feedback");
				$("#numero_lote").parent().children("span").text("").show();
				$("#numero_lote").parent().append('<span id="icono_texto" class="icon    form-control-feedback"></span>');

				return true;
			}
}


function validar_hacienda() {
var hacienda=document.getElementById('hacienda').value;

	if (hacienda=="Selecciona") {

	$("#hacienda").parent().children("p").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_hacienda").attr("class", "form-group has-error has-feedback");
				$("#hacienda").parent().append('<span id="icono_texto" class="icon     form-control-feedback"></span>');
				return false;



	}else{
$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_hacienda").attr("class", "form-group has-success has-feedback");
				$("#hacienda").parent().children("span").text("").show();
				$("#hacienda").parent().append('<span id="icono_texto" class="icon    form-control-feedback"></span>');

				return true;

	}
}

function validar_coordenadas() {

var coordenadas=document.getElementById('coordenadas').value;

	if(coordenadas==null  || coordenadas.length==0 || /[¿!"#$%&/()=?¡'{}_+´´*;:.,']/.test(coordenadas)){

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_coordenadas").attr("class", "form-group has-error  has-feedback");
				$("#coordenadas").parent().append('<span id="icono_texto" class="icon     form-control-feedback"></span>');

				return false;

			}else{

$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_coordenadas").attr("class", "form-group has-success has-feedback");
				$("#coordenadas").parent().children("span").text("").show();
				$("#coordenadas").parent().append('<span id="icono_texto" class="icon    form-control-feedback"></span>');

				return true;



			}
}

function validar_longitud() {

var longitud=document.getElementById('longitud').value;

	if(longitud==null  || longitud.length==0 || /[¿!"#$%&/()=?¡'{}_+´´*;:.,']/.test(longitud)){

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_longitud").attr("class", "form-group has-error  has-feedback");
				$("#longitud").parent().append('<span id="icono_texto" class="icon     form-control-feedback"></span>');

				return false;

			}else{

$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_longitud").attr("class", "form-group has-success has-feedback");
				$("#longitud").parent().children("span").text("").show();
				$("#longitud").parent().append('<span id="icono_texto" class="icon    form-control-feedback"></span>');

				return true;



			}
}



function validar_tamaño() {


var tamaño=parseFloat(document.getElementById('tamaño').value);

		if(tamaño==null  || tamaño.length==0 || /^\s+$/.test(tamaño) || tamaño<=0){

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_tamaño").attr("class", "form-group has-error  has-feedback");
				$("#tamaño").parent().append('<span id="icono_texto" class="icon     form-control-feedback"></span>');

				return false;

			}
			else if (isNaN(tamaño)) {
				$("#tamaño").parent().children("p").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_tamaño").attr("class", "form-group has-error has-feedback");
				$("#tamaño").parent().append('<span id="icono_texto" class="icon     form-control-feedback"></span>');
				return false;

			}else {

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_tamaño").attr("class", "form-group has-success has-feedback");
				$("#tamaño").parent().children("span").text("").show();
				$("#tamaño").parent().append('<span id="icono_texto" class="icon    form-control-feedback"></span>');

				return true;
			}
}

</script>
<script src="../../js/ytmenu.js"></script>
<script src="../../js/menu-siffa.js"></script>
</html>
