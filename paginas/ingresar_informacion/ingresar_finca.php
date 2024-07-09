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
						<li><a href="#" class="dr-icon dr-icon-file-text">Ingresar Finca</a></li>
						<li><a href="ingresar_lote.php" class="dr-icon dr-icon-file-text">Ingresar Lote</a></li>
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
							<li><a href="../consultas/consultar_lote_cultivo.php" class="dr-icon dr-icon-eye-plus">Consultar Lotecultivo</a></li>
							<li><a href="../consultas/consultar_laboratorio.php" class="dr-icon dr-icon-eye-plus">Consultar Laboratorio</a></li>
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
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

		<h1 class="help-block text-center  icon-home"> Ingresar Finca</h1>
	</div>
	<form action="exportaciones/exportar_finca.php" method="POST" id="formulario" >
		<div class="container">

			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="form-group">
						<div  id="elemento_nombre">

							<label for="">Nombre Finca</label>
							<input type="text" style="text-transform:uppercase" id="nombre" class="form-control" name="nombre">
							<span class="help-block icon icono_nombre   icon-price-tags"></span>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="form-group">
						<div  id="elemento_fax">

							<label for="">Fax</label>
							<input type="number"  id="fax" name="fax" class="form-control">
							<span class="help-block icon icono_fax   icon-printer"></span>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<div  id="elemento_telefono">

							<label for="telefono">Telefono </label>
							<input type="number" placeholder="" name='telefono' id="telefono" class="form-control">
							<span class="help-block icon icono_telefono    icon-phone"></span>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="form-group">
						<div  id="elemento_departamento">

							<label for="departamento"> Departamento</label>
							<select name="departamento"  onclick='mostrar_municipio()' id="departamento"  class="departamento form-control">
								<option value="Selecciona">Selecciona</option>
								<?php
								$connection=mysqli_connect("localhost","root","","siffa");
								$query="SELECT * FROM departamento";
								$resource=mysqli_query($connection,$query);
								while ($fila=mysqli_fetch_row($resource)) {
									echo "<option   value='$fila[0]'>$fila[1]</option>";
								}

								?>
							</select>
							<!-- <span class="help-block icon icono_vereda     icon-map"></span> -->
						</div>
					</div>
				</div>


			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="form-group">
						<div  id="elemento_municipio">

							<label for="municipio">Municipio</label>

							<div id="elemento_municipio1">
								<select name="municipio"   id="municipio" class="municipio form-control">
									<option value="Selecciona">Selecciona</option>
									<?php
									$connection=mysqli_connect("localhost","root","","siffa");
									$query="SELECT * FROM municipio";
									$resource=mysqli_query($connection,$query);
									while ($fila=mysqli_fetch_row($resource)) {
										echo "<option   value='$fila[0]' >$fila[1]</option>";
									}

									?>

								</select>


							</div>
						</div>
					</div>
				</div>


				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="form-group">
						<div  id="elemento_Vereda">

							<label for="Vereda">Selecciona Vereda</label>

							<div id="elemento_Vereda1">
								<select name="vereda"  id="Vereda" class="vereda form-control">
									<option value="Selecciona">Selecciona</option>
									<?php
									$connection=mysqli_connect("localhost","root","","siffa");
									$query="SELECT * FROM vereda";
									$resource=mysqli_query($connection,$query);
									while ($fila=mysqli_fetch_row($resource)) {
										echo "<option   value='$fila[0]' >$fila[1]</option>";
									}

									?>

								</select>


							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<div  id="elemento_tamaño">

							<label for="fax">Tamaño(Ha)</label>
							<input type="number" placeholder="" name="tamaño" id="tamaño" class="form-control">
							<span class="help-block icon icono_tama     icon-map"></span>
						</div>
					</div>

				</div>

			</div>
			<div class="col-md-12">
				<div class="col-xs-1 col-md-1 col-lg-1">
					<div class="col-md-1">
						<a href="#" name="Registrar"  title="Registrar Lote"  class="registrar"  id="Registrar" onclick="enviar()"><h1 class="icon  icon-floppy-disk" ></h1></a>
					</div>


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

			</div>
		</form>
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
					<select  class="form-control finca" name="finca"    id="finca"  >

						<option value="Selecctiona">Selecctiona </option>
						<?php

						$local="localhost";
						$usuario="root";
						$contra="";
						$bd="siffa";

						$conexion=mysqli_connect($local,$usuario,$contra,$bd)or die ("problemas en la conexion");

						$query="SELECT * FROM hacienda ORDER BY Nombre";

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
			.icono_nombre , .icono_fax{
				position: relative;
				display: inline;
				left: 90%;
				top: -25px;
			}

			.icono_telefono {
				position: relative;
				display: inline;
				left: 85%;
				top: -28px;

			}
			.icono_tama{
				position: relative;
				display: inline;
				left: 85%;
				top: -28px;
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

		</style>
		<script>
			var municipio=document.getElementById('municipio').style.opacity="0";
			var vereda=document.getElementById('Vereda').style.opacity="0";

			function mostrar_veredas () {

				var municipio=document.getElementById('municipio').value;

				$("#elemento_Vereda1").load("mostrar_vereda.php", {municipio:municipio});

				var vereda=document.getElementById('Vereda').style.opacity="1";

			}








			function mostrar_municipio () {


				var departamento=document.getElementById('departamento').value;

				$("#elemento_municipio1").load("mostrar_municipio.php", {departamento:departamento});

				var municipio=document.getElementById('municipio').style.opacity="1";
			}



function exportar_excel () {
	
				swal({
					title: 'Advertencia',
					text: "Exportar Todas las Fincas",
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Exportar Todas',
					cancelButtonText: 'Solo Este Formulario',
					buttonsStyling: true
				}).then(function() {
					var formulario=document.getElementById('formulario').action="exportaciones_excel/exportar_todas_fincas.php";
					$("#formulario").submit();
				}, function(dismiss) {
					// dismiss can be 'cancel', 'overlay', 'close', 'timer'
					if (dismiss === 'cancel') { if (validar_nombre()==true && validar_telefono()==true && validar_vereda()==true && validar_tamaño()==true) {

						var formulario=document.getElementById('formulario').action="exportaciones_excel/exportar_finca.php";

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
					text: "Exportar Todas las Fincas",
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Exportar Todas',
					cancelButtonText: 'Solo Este Formulario',
					buttonsStyling: true
				}).then(function() {
					var formulario=document.getElementById('formulario').action="exportaciones/exportar_todas_fincas.php";
					$("#formulario").submit();
				}, function(dismiss) {
					// dismiss can be 'cancel', 'overlay', 'close', 'timer'
					if (dismiss === 'cancel') { if (validar_nombre()==true && validar_telefono()==true && validar_vereda()==true && validar_tamaño()==true) {

						var formulario=document.getElementById('formulario').action="exportaciones/exportar_finca.php";

						$("#formulario").submit();
					}else{
						swal("Error" ,"Algunos Campos estan Vacios o Incorrectos","error")
					}


				}
			})



		}

function nuevo_registro() {
	var tamaño=document.getElementById("tamaño").value='';
				var nombre=document.getElementById("nombre").value='';
				var telefono=document.getElementById("telefono").value='';
				var departamento=document.getElementById('departamento').value='Selecciona';
				var departamento=document.getElementById('municipio').style.opacity='0';
				var departamento=document.getElementById('Vereda').style.opacity='0';
				var fax=document.getElementById("fax").value='';
				var Actualizar=document.getElementById('Actualizar').style.display="none";
			var eliminar=document.getElementById('eliminar').style.display="none";
			var nombre=document.getElementById("nombre").focus();
}

		$(document).on("ready", inicio);
		function consultar2 () {
			var finca=document.getElementById('finca').value;
			var Actualizar=document.getElementById('Actualizar').style.display="block";
			var eliminar=document.getElementById('eliminar').style.display="block";
			$("#contenedor").load("consultar_finca.php", {finca:finca})
		}

		function enviar () {
			if (validar_nombre()==true && validar_fax()==true && validar_telefono()==true && validar_vereda()==true && validar_tamaño()==true) {
				var tamaño=document.getElementById("tamaño").value;
				var nombre=document.getElementById("nombre").value;
				var telefono=document.getElementById("telefono").value;
				var Vereda=document.getElementById("Vereda").value;
				var fax=document.getElementById("fax").value;
				nombre=nombre.toUpperCase();
				$("#contenedor").load("finca.php", {nombre:nombre, telefono:telefono,Vereda:Vereda,fax:fax,tamaño:tamaño})

			}
			else{

				swal("Error", "Algunos Campos estan Vacios o Incorrectos" ,"error")
			}


		}


		function eliminar_finca () {


			swal({
				title: "Advertencia",
				text: "Esta a punto de Eliminar La finca " + nombre,
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


		}



$(document).ready(function(){
    $(document).bind("contextmenu", function(e){
        return false;
    });
});



		function inicio () {

			$("#fax").keyup(validar_fax);
			$("#nombre").keyup(validar_nombre);
			$("#telefono").keyup(validar_telefono);
			$("#Vereda").keyup(validar_vereda)
			$("#tamaño").keyup(validar_tamaño);
			var nombre=document.getElementById("nombre").focus();

			$("#nombre").keyup(validar_existencia);
		}

function validar_existencia () {

	if (validar_nombre()==true) {

var nombre=document.getElementById("nombre").value;

var Vereda=document.getElementById("Vereda").value;

$("#contenedor").load("validar_existencia_finca.php",{nombre:nombre,Vereda:Vereda})

	}

}

		function consultar() {
			$("#consultar").modal("show");

		}


		$(document).ready(function  () {



			$('#finca').selectpicker({
				liveSearch: true,
				maxOptions: 1
			});

			// 	  $('#Vereda').selectpicker({
			//   liveSearch: false,
			//   maxOptions: 1
			// });




		})






		function Actualizar () {
			if (validar_nombre()==true && validar_telefono()==true && validar_vereda()==true && validar_tamaño()==true) {




				var finca=document.getElementById('finca').value;
				var tamaño=document.getElementById("tamaño").value;
				var nombre=document.getElementById("nombre").value;
				var telefono=document.getElementById("telefono").value;
				var Vereda=document.getElementById("Vereda").value;
				var fax=document.getElementById("fax").value;
				nombre=nombre.toUpperCase();

				$("#contenedor").load("actualizar_finca.php", {nombre:nombre,tamaño:tamaño,telefono:telefono,Vereda:Vereda,fax:fax,finca:finca});
			}
			else{

				swal("Error", "Algunos Campos estan Vacios o Incorrectos" ,"error")
			}





		}



		function validar_nombre() {
			var nombre=document.getElementById('nombre').value; nombre=nombre.toLowerCase();
			if(nombre==null  || nombre.length==0 || /[\\^"'<>;ç`,-_ª%&¿¨Ç¡º#~¬€$.*+?=!:|\\/()\[\]{}]/.test(nombre)){
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre").attr("class", "form-group has-error  has-feedback");
				$("#nombre").parent().children("span").text("").show();
				$("#nombre").parent().append('<span id="icono_texto" class="form-control-feedback"></span>');
				return false;

			}else if (isNaN(nombre)==false) {
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre").attr("class", "form-group has-error has-feedback");
				$("#nombre").parent().children("span").text("").show();
				$("#nombre").parent().append('<span id="icono_texto" class="form-control-feedback"></span>');
				return false;

			}else if (nombre.length>50) {
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre").attr("class", "form-group has-error has-feedback");
				$("#nombre").parent().children("span").text("").show();
				$("#nombre").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
				return false;

			}else{


				$("#nombre").parent().children("span").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_nombre").attr("class", "form-group has-success has-feedback");
				$("#nombre").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');

				return true;
			}


		}

		function validar_fax () {

			var fax=parseFloat(document.getElementById('fax').value);

			if(fax==null  || fax.length==0 || /^\s+$/.test(fax) || fax<0){

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_fax").attr("class", "form-group has-error  has-feedback");
				$("#fax").parent().append('<span id="icono_texto" class="icon   form-control-feedback"></span>');

				return false;

			}
			else if (isNaN(fax)) {
				$("#fax").parent().children("span").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_fax").attr("class", "form-group has-error has-feedback");
				$("#fax").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
				return false;

			}else {

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_fax").attr("class", "form-group has-success has-feedback");
				$("#fax").parent().children("span").text("").show();
				$("#fax").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');

				return true;
			}

		}

		function validar_telefono () {

			var telefono=parseFloat(document.getElementById('telefono').value);

			if(telefono==null  || telefono.length==0 || /^\s+$/.test(telefono) || telefono<0){

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_telefono").attr("class", "form-group has-error  has-feedback");
				$("#telefono").parent().append('<span id="icono_texto" class="icon   form-control-feedback"></span>');

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
				$("#telefono").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');

				return true;
			}

		}



		function validar_vereda () {

			Vereda=document.getElementById('Vereda').value;

			if (Vereda=="Selecciona") {

				$("#Vereda").parent().children("p").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_Vereda").attr("class", "form-group has-error has-feedback");
				$("#Vereda").parent().append('<span id="icono_texto" class="icon     form-control-feedback"></span>');
				return false;



			}else{
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_Vereda").attr("class", "form-group has-success has-feedback");
				$("#Vereda").parent().children("span").text("").show();
				$("#Vereda").parent().append('<span id="icono_texto" class="icon    form-control-feedback"></span>');

				return true;

			}
		}





		function validar_tamaño () {

			var tamaño=parseFloat(document.getElementById('tamaño').value);

			if(tamaño==null  || tamaño.length==0 || /^\s+$/.test(tamaño) || tamaño<=0){

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_tamaño").attr("class", "form-group has-error  has-feedback");
				$("#tamaño").parent().append('<span id="icono_texto" class="icon   form-control-feedback"></span>');

				return false;

			}
			else if (isNaN(tamaño)) {
				$("#tamaño").parent().children("span").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_tamaño").attr("class", "form-group has-error has-feedback");
				$("#tamaño").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
				return false;

			}else {

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_tamaño").attr("class", "form-group has-success has-feedback");
				$("#tamaño").parent().children("span").text("").show();
				$("#tamaño").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');

				return true;
			}

		}



	</script>
	<script src="../../js/ytmenu.js"></script>
	<script src="../../js/menu-siffa.js"></script>
	</html>
