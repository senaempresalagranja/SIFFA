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

echo "<script>


var Rol='$fila[2]';


</script>";
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
						<li><a href="../ingresar_informacion/ingresar_finca.php" class="dr-icon dr-icon-file-text">Ingresar Finca</a></li>
						<li><a href="../ingresar_informacion/ingresar_lote.php" class="dr-icon dr-icon-file-text">Ingresar Lote</a></li>
						<li><a href="../ingresar_informacion/ingresar_cultivo.php" class="dr-icon dr-icon-file-text">Ingresar Cultivo</a></li>
						<li><a href="#" class="dr-icon dr-icon-file-text">Ingresar Tipo Cultivo</a></li>
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

</div>

</div>
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

	<form action="exportaciones/exportar_tipo_cultivo.php" method="POST" id="formulario">
		<div class="col-md-12">
			<h1 class="help-block text-center icon icon-price-tag">  Ingresar Tipo  Cultivo</h1>
		</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-sm-5 col-md-5 col-lg-5">
				<div class="form-group">
					<label for="nombre_tipo_cultivo">Nombre Tipo Cultivo</label>

					<div  id="elemento_nombre_cultivo_tipo">
						<input type="text" placeholder="Leguminosas" style="text-transform:uppercase" id="nombre_tipo_cultivo" class="form-control">
						<span class="help-block"></span>
					</div>
				</div>
			</div>


		</div>
		<div class="row">

	
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<a href="#" name="Registrar" title="Registrar Tipo de Cultivo"  class="registrar"  id="Registrar" onclick="enviar()"><h1 class="icon  icon-floppy-disk" ></h1></a>
			</div>


		

			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
						<a href="#" class="consultar" title="Consultar Tipo de Cultivo" onclick="consultar()"><h1 class="icon  icon-search"></h1></a>
					</div>
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

<a href="#"   class="pdf" id="pdf" title="Nuevo Registro" onclick="nuevo_registro()"><h1 class="icon     icon-plus"></h1></a>
</div>
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

<a href="#" class="consultar actualizar" id="Actualizar" onclick="Actualizar()" title="Actualizar Tipo de Cultivo" ><h1 class="icon    icon-redo"></h1></a>

</div>

<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

<a href="#"  class="eliminar " id="eliminar" onclick="eliminar_cultivo()"  title="Eliminar Tipo de Cultivo" ><h1 class="icon   icon-bin"></h1></a>

</div>


</form>
<div class="col-lg-1" id="contenedor">

</div>


		</div>

	</div>







		 <div class="modal fade" id="consultar" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h1 class="modal-title">SELECCIONA UNA CLASE</h1>

      </div>
      <div class="modal-body">
      	<span class="help-block">Selecciona </span>
      <select  class="form-control cultivos" name="clase"    id="clase"  >

							<option value="Selecctiona" >Selecctiona </option>
								<?php

								$local="localhost";
								$usuario="root";
								$contra="";
								$bd="siffa";

								$conexion=mysqli_connect($local,$usuario,$contra,$bd)or die ("problemas en la conexion");

								$query="SELECT * FROM tipo_cultivo ORDER BY Nombre";

								$resource=mysqli_query($conexion,$query);

								while ($fila=mysqli_fetch_row($resource)) {

									echo "<option value='$fila[0]' '>$fila[1]</option>";
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

.Excel, .Excel:hover{
text-decoration: none;
	color: green;
}

.pdf, .pdf:hover{
text-decoration: none;
	color: brown;
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
  	right: 6px;
  	position: relative;
    z-index: 3;
    bottom: 100px;

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
	.registrar:hover{

text-decoration: none;
	color:#000;
}

</style>
<script>










function enviar() {
		if (validar_nombre_tipo_cultivo()==true) {

var nombre_tipo_cultivo=document.getElementById('nombre_tipo_cultivo').value;

nombre_tipo_cultivo=nombre_tipo_cultivo.toUpperCase();
$("#contenedor").load("tipo_cultivo.php", {nombre_tipo_cultivo:nombre_tipo_cultivo});

		}else{
				swal("Error" ,"Algunos Campos estan Vacios o Incorrectos","error")
			}
}

	$(document).ready(inicio);

function Actualizar() {


	if (validar_nombre_tipo_cultivo()==true) {


var clase=document.getElementById('clase').value;
var nombre_tipo_cultivo=document.getElementById('nombre_tipo_cultivo').value;
nombre_tipo_cultivo=nombre_tipo_cultivo.toUpperCase();
		$("#contenedor").load("actualizar_tipo_cultivo.php",{nombre_tipo_cultivo:nombre_tipo_cultivo, clase:clase})


			}else{
				swal("Error" ,"Algunos Campos estan Vacios o Incorrectos","error")
			}

}



function nuevo_registro() {
	var nombre_tipo_cultivo=document.getElementById('nombre_tipo_cultivo').value='';
	var actualizar=document.getElementById('Actualizar').style.display="none";
var eliminar=document.getElementById('eliminar').style.display="none";
var nombre_tipo_cultivo=document.getElementById('nombre_tipo_cultivo').focus();
}

function consultar2() {

var clase=document.getElementById('clase').value;


	$("#contenedor").load("consultar_tipo_cultivo.php",{clase:clase})
var actualizar=document.getElementById('Actualizar').style.display="block";
var eliminar=document.getElementById('eliminar').style.display="block";
}




function consultar() {
	$("#consultar").modal("show");
}



	function inicio() {
  $('#clase').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
   $(document).bind("contextmenu", function(e){
        return false;
    });
var nombre_tipo_cultivo=document.getElementById('nombre_tipo_cultivo').focus();

	
$('#nombre_tipo_cultivo').keyup(validar_nombre_tipo_cultivo);
$(document).keyup(function() {

});
	}


	function validar_nombre_tipo_cultivo () {
			var nombre_cultivo_tipo=document.getElementById('nombre_tipo_cultivo').value;
			nombre_cultivo_tipo=nombre_cultivo_tipo.toLowerCase();
			if(nombre_cultivo_tipo==null  || nombre_cultivo_tipo.length==0 || /[\\^"'<>;ç`,-_ª%&¿¨Ç¡º#~¬€$.*+?=!:|\\/()\[\]{}]/.test(nombre_cultivo_tipo)){
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre_cultivo_tipo").attr("class", "form-group has-error  has-feedback");
				$("#nombre_cultivo_tipo").parent().children("span").text("Debes ingresar un Nombre").show();
				$("#nombre_cultivo").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
				return false;

			}else if (isNaN(nombre_cultivo_tipo)==false) {
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre_cultivo_tipo").attr("class", "form-group has-error has-feedback");
				$("#nombre_cultivo_tipo").parent().children("span").text("No debes Escribir Numeros").show();
				$("#nombre_cultivo_tipo").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
				return false;

			}else if (nombre_cultivo_tipo.length>50) {
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre_cultivo_tipo").attr("class", "form-group has-error has-feedback");
				$("#nombre_cultivo_tipo").parent().children("span").text("No debes Escribir mas de 20 Caracteres").show();
				$("#nombre_cultivo_tipo").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
				return false;

			}else{


				$("#nombre_cultivo_tipo").parent().children("span").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre_cultivo_tipo").attr("class", "form-group has-success has-feedback");
				$("#nombre_cultivo_tipo").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

				return true;
			}


		}
</script>
<script src="../../js/ytmenu.js"></script>
<script src="../../js/menu-siffa.js"></script>
</html>
