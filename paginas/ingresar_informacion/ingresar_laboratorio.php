<script>
  // var stateObj =window.location;

// window.history.pushState(null , '', ".html");

window.history.replaceState( {} , '', '' );
window.location = "#JERR";
</script>
<?php

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
	<meta charset="UTF-8">
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
						<li><a href="ingresar_lote.php" class="dr-icon dr-icon-file-text">Ingresar Lote</a></li>
						<li><a href="ingresar_cultivo.php" class="dr-icon dr-icon-file-text">Ingresar Cultivo</a></li>
						<li><a href="ingresar_tipo_cultivo.php" class="dr-icon dr-icon-file-text">Ingresar Tipo Cultivo</a></li>
   						<li><a href="ingresar_fertilizante.php" class="dr-icon dr-icon-file-text">Ingresar Fertilizante</a></li>
   						<li><a href="ingresar_lotecultivo.php" class="dr-icon dr-icon-file-text">Ingresar LoteCultivo</a></li>
						<li><a href="#" class="dr-icon dr-icon-file-text">Ingresar Laboratorio</a></li>
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
    </div>
  </div>
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

<form action="" id="formulario" method="POST">
<div class="container">
		<div class="col-md-12">


			<h1 class="help-block text-center icon   icon-eyedropper">   Ingresar Laboratorio</h1>
		</div>
		<div class="row">

			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">


				<div class="form-group">
					<label for="laboratorio">Nombre Laboratorio</label>
					<div id="elemento_nombre_laboratorio">
						<input type="text" name="nombre_laboratorio" style="text-transform:uppercase" class="form-control filestyle"  id="nombre_laboratorio">
						<span class="help-block icon icon-eyedropper icono_nombre"></span>
					</div>

				</div>
			</div>

						<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">


				<div class="form-group">
					<label for="dirreccion">Dirreccion</label>
					<div id="elemento_dirreccion">
						<input type="text" name="dirreccion" style="text-transform:uppercase" class="form-control filestyle"  id="dirreccion">
						<span class="help-block icon icon-newspaper icono_dirreccion"></span>
					</div>

				</div>
			</div>


			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">


				<div class="form-group">
					<label for="Telefono">Telefono</label>
					<div id="elemento_telefono">
						<input type="number" name="telefono" style="text-transform:uppercase" class="form-control filestyle"  id="telefono">
						<span class="help-block icon  icon-phone icono_telefono"></span>
					</div>

				</div>
			</div>

	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
		<div class="form-group">
					<div  id="elemento_departamento">

					<label for="departamento">Departamento</label>
					<select name="departamento" onclick='mostrar_municipio()' id="departamento"  class="departamento form-control">
						<option value="Selecciona">Selecciona</option>
							<?php
$connection=mysqli_connect("localhost","root","","siffa");
							$query="SELECT * FROM departamento ORDER BY NombreDepartamento";
$resource=mysqli_query($connection,$query);
while ($fila=mysqli_fetch_row($resource)) {
	echo "<option   value='$fila[0]' >$fila[1]</option>";
}

							 ?>
						</select>
						<span class="help-block icon icono_departamento    icon-map"></span>
					</div>
				</div>
	</div>

	</div>

	<div class="row">

	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
		<div class="form-group">
					<div  id="elemento_municipio">

					<label for="municipio">Selecciona Municipio</label>

					<div id="elemento_municipio1">
					<select name="municipio"   id="municipio" class="municipio form-control">
						<option value="Selecciona">Selecciona</option>
							<?php
$connection=mysqli_connect("localhost","root","","siffa");
							$query="SELECT * FROM municipio ORDER BY Nombre_Municipio";
$resource=mysqli_query($connection,$query);
while ($fila=mysqli_fetch_row($resource)) {
	echo "<option   value='$fila[0]' >$fila[1]</option>";
}

							 ?>

						</select>
						<span class="help-block"></span>


					</div>
					</div>
				</div>
	</div>



	</div>
	<div class="row">

				<div class="col-xs-1 col-md-1 col-lg-1">
				<a href="#" name="Registrar"  title="Registrar Lote"  class="registrar"  id="Registrar" onclick="enviar()"><h1 class="icon  icon-floppy-disk" ></h1></a>
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

<a href="#"  class="eliminar" id="eliminar" onclick="eliminar_finca()"  title="Eliminar Lote" ><h1 class="icon   icon-bin"></h1></a>

</div>
<div class="col-xs-1 col-md-1 col-lg-1">

<a href="#"  class="Excel" id="excel"   title="Exportar a Excel" onclick="exportar_excel()"><h1 class="icon    icon-file-excel"></h1></a>

</div>

<div class="col-xs-1 col-md-1 col-lg-1">

<a href="#"  class="pdf" id="pdf"   title="Exportar a PDF"  onclick="exportar()"><h1 class="icon    icon-file-pdf"></h1></a>

</div>
</form>
</div>
<div class="col-md-12" id="contenedor">

</div>

</div>





<div class="modal fade" id="consultar" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h1 class="modal-title">SELECCIONA UNA FINCA</h1>

      </div>
      <div class="modal-body">
      	<span class="help-block">Selecciona </span>
      <select  class="form-control laboratorio" name="laboratorio"    id="laboratorio"  >

							<option value="Selecctiona">Selecctiona </option>
								<?php

								$local="localhost";
								$usuario="root";
								$contra="";
								$bd="siffa";

								$conexion=mysqli_connect($local,$usuario,$contra,$bd)or die ("problemas en la conexion");

								$query="SELECT * FROM laboratorio";

								$resource=mysqli_query($conexion,$query);

								while ($fila=mysqli_fetch_row($resource)) {

									echo "<option value='$fila[0]'>$fila[1]</option>";
								}




								 ?>

									</select>
									<a href="#" title="Elegir" data-dismiss="modal" onclick="consultar2()" class="consultar2"><h2 class="icon icon-checkmark"></h1></a>
      </div>
           <div class="modal-footer">

          <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar Consulta</a>
           </div>
   </div>
</div>




















</body>

<style>

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



.icono_nombre, .icono_dirreccion, .icono_departamento{

	position: relative;
	display: block;
	left: 90%;
	bottom: 30px;
}

.icono_telefono{
	position: relative;
	display: block;
	left: 85%;
	bottom: 30px;
}


.icono_municipio{

position: relative;
	display: block;
	left: 85%;
	bottom: 30px;

}
</style>

<script>

	$(document).ready(function  () {



	  $('#laboratorio').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });

		  // 	  $('#Vereda').selectpicker({
    //   liveSearch: false,
    //   maxOptions: 1
    // });

})


	function exportar_excel() {
		
	
swal({
  title: 'Advertencia',
  text: "Exportar Todos los Laboratorios",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Exportar Todos',
  cancelButtonText: 'Solo Este Formulario',
  buttonsStyling: true
}).then(function() {
var formulario=document.getElementById('formulario').action="exportaciones_excel/exportar_todos_laboratorios.php";
$("#formulario").submit();
}, function(dismiss) {
  // dismiss can be 'cancel', 'overlay', 'close', 'timer'
  if (dismiss === 'cancel') { if (validar_nombre_laboratorio()==true && validar_dirreccion()==true && validar_telefono()==true &&validar_municipio()==true) {

var formulario=document.getElementById('formulario').action="exportaciones_excel/exportar_laboratorio.php";

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
  text: "Exportar Todos los Laboratorios",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Exportar Todos',
  cancelButtonText: 'Solo Este Formulario',
  buttonsStyling: true
}).then(function() {
var formulario=document.getElementById('formulario').action="exportaciones/exportar_todos_laboratorios.php";
$("#formulario").submit();
}, function(dismiss) {
  // dismiss can be 'cancel', 'overlay', 'close', 'timer'
  if (dismiss === 'cancel') { if (validar_nombre_laboratorio()==true && validar_dirreccion()==true && validar_telefono()==true &&validar_municipio()==true) {

var formulario=document.getElementById('formulario').action="exportaciones/exportar_laboratorio.php";

$("#formulario").submit();
  }else{
				swal("Error" ,"Algunos Campos estan Vacios o Incorrectos","error")
			}


}
})



}


function Actualizar () {
	if (validar_nombre_laboratorio()==true && validar_dirreccion()==true && validar_telefono()==true &&validar_municipio()==true) {



var laboratorio=document.getElementById('laboratorio').value;
var nombre_laboratorio=document.getElementById("nombre_laboratorio").value;
var dirreccion=document.getElementById("dirreccion").value;
var telefono=document.getElementById("telefono").value;
var municipio=document.getElementById("municipio").value;
nombre_laboratorio=nombre_laboratorio.toUpperCase();
dirreccion=dirreccion.toUpperCase();
$("#contenedor").load("actualizar_laboratorio.php",{nombre_laboratorio:nombre_laboratorio,dirreccion:dirreccion,telefono:telefono
,municipio:municipio,laboratorio:laboratorio});

}
	else{

		swal("Error", "Algunos Campos estan Vacios o Incorrectos" ,"error")
	}





}


$(document).ready(function(){
    $(document).bind("contextmenu", function(e){
        return false;
    });
});


function consultar() {
	$("#consultar").modal("show");

}

function nuevo_registro() {
	var nombre_laboratorio=document.getElementById("nombre_laboratorio").value='';
var dirreccion=document.getElementById("dirreccion").value='';
var telefono=document.getElementById("telefono").value='';
var municipio=document.getElementById("municipio").style.opacity='0';
var departamento=document.getElementById("departamento").value='Selecciona';
	var Actualizar=document.getElementById('Actualizar').style.display="none";
var eliminar=document.getElementById('eliminar').style.display="none";
var nombre_laboratorio=document.getElementById("nombre_laboratorio").focus();
}

function consultar2 () {
var laboratorio=document.getElementById('laboratorio').value;
var Actualizar=document.getElementById('Actualizar').style.display="block";
var eliminar=document.getElementById('eliminar').style.display="block";
$("#contenedor").load("consultar_laboratorio.php",{laboratorio:laboratorio})
}


	function enviar () {
	if (validar_nombre_laboratorio()==true && validar_dirreccion()==true && validar_telefono()==true &&validar_municipio()==true) {


var nombre_laboratorio=document.getElementById("nombre_laboratorio").value;
var dirreccion=document.getElementById("dirreccion").value;
var telefono=document.getElementById("telefono").value;
var municipio=document.getElementById("municipio").value;
nombre_laboratorio=nombre_laboratorio.toUpperCase();
dirreccion=dirreccion.toUpperCase();
$("#contenedor").load("laboratorio.php",{nombre_laboratorio:nombre_laboratorio,dirreccion:dirreccion,telefono:telefono
,municipio:municipio})

	}
	else{

		swal("Error", "Algunos Campos estan Vacios o Incorrectos" ,"error")
	}


	}




var municipio=document.getElementById('municipio').style.opacity="0";


		function mostrar_municipio () {


	var departamento=document.getElementById('departamento').value;

$("#elemento_municipio1").load("mostrar_municipio.php", {departamento:departamento});

var municipio=document.getElementById('municipio').style.opacity="1";
	}


$(document).ready(inicio);

function inicio () {

$("#nombre_laboratorio").keyup(validar_nombre_laboratorio);
$("#dirreccion").keyup(validar_dirreccion);
$("#telefono").keyup(validar_telefono)
$("#municipio").keyup(validar_municipio);
var nombre_laboratorio=document.getElementById("nombre_laboratorio").focus();
$("#nombre_laboratorio").keyup(validar_existencia);
}

function validar_existencia () {

	if (validar_nombre_laboratorio ()==true) {

var nombre_laboratorio=document.getElementById("nombre_laboratorio").value;

$("#contenedor").load("validar_existencia_laboratorio.php",{nombre_laboratorio:nombre_laboratorio})
		
	}


}
function validar_nombre_laboratorio () {
			var nombre_laboratorio=document.getElementById('nombre_laboratorio').value;
			nombre_laboratorio=nombre_laboratorio.toLowerCase();
			if(nombre_laboratorio==null  || nombre_laboratorio.length==0 || /[\\^"'<>;ç`,-_ª%&¿¨Ç¡º#~¬€$.*+?=!:|\\/()\[\]{}]/.test(nombre_laboratorio)){
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre_laboratorio").attr("class", "form-group has-error  has-feedback");
				$("#nombre_laboratorio").parent().children("span").text("").show();
				$("#nombre_laboratorio").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
				return false;

			}else if (isNaN(nombre_laboratorio)==false) {
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre_laboratorio").attr("class", "form-group has-error has-feedback");
				$("#nombre_laboratorio").parent().children("span").text("").show();
				$("#nombre_laboratorio").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
				return false;

			}else if (nombre_laboratorio.length>20) {
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre_laboratorio").attr("class", "form-group has-error has-feedback");
				$("#nombre_laboratorio").parent().children("span").text("").show();
				$("#nombre_laboratorio").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
				return false;

			}else{


				$("#nombre_laboratorio").parent().children("span").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre_laboratorio").attr("class", "form-group has-success has-feedback");
				$("#nombre_laboratorio").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');

				return true;
			}

}



	function validar_dirreccion (){

	var dirreccion=document.getElementById('dirreccion').value;
			if(dirreccion==null  || dirreccion.length==0 || /[\\^"'<>;ç`,_ª%&¿¨Ç¡º#~¬€$.*+?=!:|\\/\[\]{}]/.test(dirreccion)){
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_dirreccion").attr("class", "form-group has-error  has-feedback");
				$("#dirreccion").parent().children("span").text("").show();
				$("#dirreccion").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
				return false;

			}else if (isNaN(dirreccion)==false) {
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_dirreccion").attr("class", "form-group has-error has-feedback");
				$("#dirreccion").parent().children("span").text("").show();
				$("#dirreccion").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
				return false;

			}else{


				$("#nombre_laboratorio").parent().children("span").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_dirreccion").attr("class", "form-group has-success has-feedback");
				$("#nombre_laboratorio").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');

				return true;
			}

	}


	function validar_telefono () {

			var telefono=parseFloat(document.getElementById('telefono').value);

			if(telefono==null  || telefono.length==0 || /^\s+$/.test(telefono) || telefono<0){

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_telefono").attr("class", "form-group has-error  has-feedback");
				$("#telefono").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');

				return false;

			}
			else if (isNaN(telefono)) {
				$("#telefono").parent().children("span").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_telefono").attr("class", "form-group has-error has-feedback");
				$("#telefono").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
				return false;

			}else {

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_telefono").attr("class", "form-group has-success has-feedback");
				$("#telefono").parent().children("span").text("").show();
				$("#telefono").parent().append('<span id="icono_texto" class="form-control-feedback"></span>');

				return true;
			}

		}


		function validar_municipio () {
			var municipio=document.getElementById('municipio').value;

			if (municipio=="Selecciona") {
	$("#municipio").parent().children("span").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_municipio").attr("class", "form-group has-error has-feedback");
				$("#municipio").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
				return false;

			}else{
$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_municipio").attr("class", "form-group has-success has-feedback");
				$("#municipio").parent().children("span").text("").show();
				$("#municipio").parent().append('<span id="icono_texto" class="form-control-feedback"></span>');

				return true;
			}
		}


</script>

	<script src="../../js/ytmenu.js"></script>
	<script src="../../js/menu-siffa.js"></script>
</html>
