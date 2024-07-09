<script>
  // var stateObj =window.location;
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
								<li><a href="ingresar_fertilizante.php" class="dr-icon dr-icon-file-text">Ingresar Fertilizante</a></li><li><a href="#" class="dr-icon dr-icon-file-text">Ingresar LoteCultivo</a></li>
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

			<div class="container">
				<div class="col-md-12">
					<h1 class="help-block text-center">INGRESAR CULTIVO A LOTE</h1>
					<br>
				</div>






				<div class="row">
					<form action="exportaciones/exportar_lotecultivo.php" method="POST" id="formulario">
						<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<div class="form-group">
								<div  id="elemento_finca">

									<label for="finca">Selecciona Finca</label>
									<select name="finca" onclick='mostrar_lote()' id="finca"  class="finca form-control">
										<option value="Selecciona">Selecciona</option>
										<?php
										$connection=mysqli_connect("localhost","root","","siffa");
										$query="SELECT * FROM hacienda ORDER BY Nombre";
										$resource=mysqli_query($connection,$query);
										while ($fila=mysqli_fetch_row($resource)) {
											echo "<option   value='$fila[0]' '>$fila[1]</option>";
										}

										?>
									</select>
									<!-- <span class="help-block icon icono_vereda     icon-map"></span> -->
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<div class="form-group">
								<div  id="elemento_lote">

									<label for="lote">Selecciona Lote</label>

									<div id="elemento_lote1">
										<select name="lote"   id="lote" class="lote form-control">
											<option value="Selecciona">Selecciona</option>
											<?php
											$connection=mysqli_connect("localhost","root","","siffa");
											$query="SELECT * FROM lote ORDER BY NumeroLote";
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
								<div  id="elemento_cultivo">

									<label for="cultivo">Selecciona Cultivo</label>
									<select  class="form-control cultivos" name="cultivo"    id="cultivo"  >

										<option value="Selecciona" >Selecciona</option>
										<?php

										$local="localhost";
										$usuario="root";
										$contra="";
										$bd="siffa";

										$conexion=mysqli_connect($local,$usuario,$contra,$bd)or die ("problemas en la conexion");

										$query1="SELECT * FROM tipo_cultivo";
										$resource1=mysqli_query($conexion,$query1);

										while ( $fila1=mysqli_fetch_row($resource1)) {
											echo "<optgroup label='$fila1[1]'  class='help-block'>";

											$query="SELECT * FROM cultivo 	WHERE  Idtipo_cultivo='$fila1[0]' ORDER BY NombreCultivo";

											$resource=mysqli_query($conexion,$query);

											while ($fila=mysqli_fetch_row($resource)) {

												echo "<option value='$fila[0]' >$fila[1]</option>";
											}

										}


										?>

									</select>
									<!-- <span class="help-block icon icono_vereda     icon-map"></span> -->
								</div>
							</div>

						</div>


						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
							<div class="form-group">
								<label for="Tamaño">Tamaño</label>
								<div id="elemento_tamaño_cultivo">
									<input type="number"  step="Any" name="tamaño_cultivo"  class="form-control"  id="tamaño_cultivo">
									<span class="help-block"></span>
								</div>
							</div>


						</div>


						<div class="col-xs-12 col-md-12 col-lg-12" id="contenedor">

						</div>


					</div>



					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
						<a href="#" name="Registrar" title="Registrar Lote"  class="registrar" id="Registrar" onclick="enviar()"><h1 class="icon  icon-floppy-disk" ></h1></a>
					</div>




					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
						<a href="#" class="consultar" title="Consultar Lote" onclick="consultar()"><h1 class="icon  icon-search"></h1></a>
					</div>
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

						<a href="#"   class="pdf" id="pdf" title="Nuevo Registro" onclick="nuevo_registro()"><h1 class="icon     icon-plus"></h1></a>
					</div>

					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

						<a href="#" class="consultar actualizar" id="Actualizar" onclick="Actualizar()" title="Actualizar Lote" ><h1 class="icon    icon-redo"></h1></a>

					</div>

					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

						<a href="#"  class="eliminar" id="eliminar" onclick="eliminar_cultivo()"  title="Eliminar Lote" ><h1 class="icon   icon-bin"></h1></a>

					</div>
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

						<a href="#"  class="Excel" id="excel"   title="Exportar a Excel" onclick="exportar_excel()" ><h1 class="icon    icon-file-excel"></h1></a>

					</div>

					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

						<a href="#"  class="pdf" id="pdf"   title="Exportar a PDF"  onclick="exportar()"><h1 class="icon    icon-file-pdf"></h1></a>

					</div>

				</form>







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
											<select name="finca1" onclick='mostrar_lote1()' id="finca1"  class="finca1 form-control">
												<option value="Selecciona">Selecciona</option>
												<?php
												$connection=mysqli_connect("localhost","root","","siffa");
												$query="SELECT * FROM hacienda ORDER BY Nombre";
												$resource=mysqli_query($connection,$query);
												while ($fila=mysqli_fetch_row($resource)) {
													echo "<option   value='$fila[0]' >$fila[1]</option>";
												}

												?>
											</select>
										</div>
									</div>


									<div class="col-md-4">

										<label for="">Selecciona  Lote</label>
										<div id="contenedor_lote1">
											<select  class="form-control cultivos" name="lote1"    id="lote1"  >

												<option value="Selecctiona" >Selecctiona </option>

											</select>

										</div>



									</div>

									<div class="col-md-4">

										<label for="">Selecciona  cultivo</label>
										<div id="contenedor_cultivo">
											<select  class="form-control " name=""    id=""  >

												<option value="Selecctiona" >Selecctiona </option>

											</select>

										</div>


									</div>

								</div>

								<div class="col-md-12">

									<a href="#" title="Elegir" data-dismiss="modal" onclick="consultar2()" class="consultar2"><h2 class="icon icon-checkmark"></h1></a>
									</div>









									<div class="modal-footer">
										<a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar Consulta</a>
									</div>
								</div>
							</div>

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


						</style>
						<script>



							function mostrar_lote1() {
								var finca=document.getElementById('finca1').value;


								$("#contenedor_lote1").load("mostrar_lote1.php",{finca:finca})
							}



							function mostrar_cultivo() {


								var lote1=document.getElementById('lote1').value;


								$("#contenedor_cultivo").load("mostrar_cultivo.php",{lote1:lote1})

							}


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
									var formulario=document.getElementById('formulario').action="exportaciones_excel/exportar_todos_lotecultivos.php";
									$("#formulario").submit();
								}, function(dismiss) {
  // dismiss can be 'cancel', 'overlay', 'close', 'timer'
  if (dismiss === 'cancel') { if (validar_finca()==true && validar_lote()==true && validar_cultivo()==true && validar_tamaño_cultivo()==true) {

  	var formulario=document.getElementById('formulario').action="exportaciones_excel/exportar_lotecultivo.php";

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
									var formulario=document.getElementById('formulario').action="exportaciones/exportar_todos_lotecultivos.php";
									$("#formulario").submit();
								}, function(dismiss) {
  // dismiss can be 'cancel', 'overlay', 'close', 'timer'
  if (dismiss === 'cancel') { if (validar_finca()==true && validar_lote()==true && validar_cultivo()==true && validar_tamaño_cultivo()==true) {

  	var formulario=document.getElementById('formulario').action="exportaciones/exportar_lotecultivo.php";

  	$("#formulario").submit();
  }else{
  	swal("Error" ,"Algunos Campos estan Vacios o Incorrectos","error")
  }


}
})



							}


							$(document).ready(function(){
								$(document).bind("contextmenu", function(e){
									return false;
								});
							});


							function Actualizar () {
								if (validar_finca()==true && validar_lote()==true && validar_cultivo()==true && validar_tamaño_cultivo()==true) {
									var finca=document.getElementById('finca').value;
									var lote=document.getElementById('lote').value;
									var cultivo=document.getElementById('cultivo').value;
									var lote1=document.getElementById('lote1').value;
									var id_lotecultivo=this.id_lotecultivo;		

									var tamaño_cultivo=document.getElementById('tamaño_cultivo').value;
									$("#contenedor").load("actualizar_lotecultivo.php",{finca:finca,lote:lote,cultivo:cultivo,lote1:lote1,tamaño_cultivo:tamaño_cultivo,id_lotecultivo:id_lotecultivo});


								}else{

									swal("Error", "Algunos Campos estan Vacios o Incorrectos" ,"error")
								}

							}






							function consultar() {
								$("#consultar").modal("show");
								$("#elemento_lote1").load("mostrar_lote.php",{finca:finca})
							}

							function nuevo_registro() {
								var cultivo=document.getElementById('cultivo').value='Selecciona';
								var tamaño_cultivo=document.getElementById('tamaño_cultivo').value=''
								var finca=document.getElementById('finca').value='Selecciona';
								var lote=document.getElementById('lote').style.opacity='0';
								var actualizar=document.getElementById('Actualizar').style.display="none";
								var eliminar=document.getElementById('eliminar').style.display="none";
								var finca=document.getElementById('finca').focus();
							}

							function consultar2() {

								var lote1=document.getElementById('lote1').value;
								var cultivo1=document.getElementById('cultivo1').value;
								$("#contenedor").load("consultar_lotecultivo.php",{lote1:lote1,cultivo1:cultivo1})
								var actualizar=document.getElementById('Actualizar').style.display="block";
								var eliminar=document.getElementById('eliminar').style.display="block";

							}

							var lote=document.getElementById('lote').style.opacity="0";

							function mostrar_lote() {
								var finca=document.getElementById('finca').value;

								$("#elemento_lote1").load("mostrar_lote.php",{finca:finca})


								var lote=document.getElementById('lote').style.opacity="1";
							};

							function enviar() {

								if (validar_finca()==true && validar_lote()==true && validar_cultivo()==true && validar_tamaño_cultivo()==true) {
									var finca=document.getElementById('finca').value;
									var lote=document.getElementById('lote').value;
									var cultivo=document.getElementById('cultivo').value;
									var tamaño_cultivo=document.getElementById('tamaño_cultivo').value;
									$("#contenedor").load("lotecultivo.php", {finca:finca, lote:lote, cultivo:cultivo,tamaño_cultivo:tamaño_cultivo});


								}else{

									swal("Error", "Algunos Campos estan Vacios o Incorrectos" ,"error")
								}



							}



							$(document).on("ready", inicio);
							function inicio () {
								$("#finca").keyup(validar_finca);
								$("#lote").keyup(validar_lote);
								$("#cultivo").keyup(validar_cultivo);
								$("#tamaño_cultivo").keyup(validar_tamaño_cultivo);

								var finca=document.getElementById('finca').focus();
							}



							function validar_finca () {
								var finca=document.getElementById('finca').value;

								if (finca=="Selecciona") {

									$("#finca").parent().children("p").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_finca").attr("class", "form-group has-error has-feedback");
				$("#finca").parent().append('<span id="icono_texto" class="icon     form-control-feedback"></span>');
				return false;



			} else{
$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
$("#elemento_finca").attr("class", "form-group has-success has-feedback");
$("#finca").parent().children("span").text("").show();
$("#finca").parent().append('<span id="icono_texto" class="icon    form-control-feedback"></span>');

return true;

}
}

function validar_lote () {
	var lote=document.getElementById('lote').value;

	if (lote=="Selecciona") {

		$("#lote").parent().children("p").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_lote").attr("class", "form-group has-error has-feedback");
				$("#lote").parent().append('<span id="icono_texto" class="icon     form-control-feedback"></span>');
				return false;



			} else{
$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
$("#elemento_lote").attr("class", "form-group has-success has-feedback");
$("#lote").parent().children("span").text("").show();
$("#lote").parent().append('<span id="icono_texto" class="icon    form-control-feedback"></span>');

return true;

}
}


function validar_cultivo () {
	var cultivo =document.getElementById('cultivo').value;

	if (cultivo =="Selecciona") {

		$("#cultivo ").parent().children("p").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_cultivo ").attr("class", "form-group has-error has-feedback");
				$("#cultivo ").parent().append('<span id="icono_texto" class="icon     form-control-feedback"></span>');
				return false;



			} else{
$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
$("#elemento_cultivo ").attr("class", "form-group has-success has-feedback");
$("#cultivo ").parent().children("span").text("").show();
$("#cultivo ").parent().append('<span id="icono_texto" class="icon    form-control-feedback"></span>');

return true;

}
}


function validar_tamaño_cultivo() {

	var tamaño_cultivo=parseFloat(document.getElementById('tamaño_cultivo').value);

	if(tamaño_cultivo==null  || tamaño_cultivo.length==0 || /^\s+$/.test(tamaño_cultivo)|| tamaño_cultivo<=0){

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_tamaño_cultivo").attr("class", "form-group has-error  has-feedback");
				$("#tamaño_cultivo").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');

				return false;

			}
			else if (isNaN(tamaño_cultivo)) {
				$("#tamaño_cultivo").parent().children("span").text("").show();
				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_tamaño_cultivo").attr("class", "form-group has-error has-feedback");
				$("#tamaño_cultivo").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
				return false;

			}else {

				$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
				$("#elemento_tamaño_cultivo").attr("class", "form-group has-success has-feedback");
				$("#tamaño_cultivo").parent().children("span").text("").show();
				$("#tamaño_cultivo").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

				return true;
			}

		}

	</script>
	<script src="../../js/ytmenu.js"></script>
	<script src="../../js/menu-siffa.js"></script>
	</html>
