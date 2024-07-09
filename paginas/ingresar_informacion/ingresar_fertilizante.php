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
						<li><a href="#" class="dr-icon dr-icon-file-text">Ingresar Fertilizante</a></li>
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



	<div class="container">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<h1 class="help-block text-center dr-icon icon-lab"> Ingresar Fertilizante</h1>
			<br>
		</div>
		<div class="row">


			<form action="exportaciones/exportar_fertilizante.php" id="formulario" method="POST">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<div class="form-group">
						<label for="nombre">Nombre Fertilizante</label>
						<div id="elemento_nombre_fetilizante">
							<input type="text" name="nombre_fetilizante" style="text-transform:uppercase" class="form-control"  id="nombre_fetilizante">
							<span class="help-block icono_fetilizante icon icon-lab"></span>
						</div>

					</div>
				</div>

				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<label for="nitrogeno">Nitrogeno (N)</label>
						<div id="elemento_nutriente_N">
							<input type="number" step="Any" name="nutriente_N"  class="form-control"  id="nutriente_N">
							<span class="help-block"></span>
						</div>
					</div>


				</div>

				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<label for="fosforo">Fosforo (P)</label>
						<div id="elemento_nutriente_F">
							<input type="number" step="Any" name="nutriente_P"  class="form-control"  id="nutriente_F">
							<span class="help-block"></span>
						</div>
					</div>


				</div>


				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<label for="Postasio">Potasio (K)</label>
						<div id="elemento_nutriente_K">
							<input type="number" step="Any" name="nutriente_K"  class="form-control"  id="nutriente_K">
							<span class="help-block"></span>
						</div>
					</div>


				</div>

				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<label for="Calcio">Calcio (Ca)</label>
						<div id="elemento_nutriente_Ca">
							<input type="number" step="Any" name="nutriente_Ca"  class="form-control"  id="nutriente_Ca">
							<span class="help-block"></span>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<label for="Magnesio">Magnesio(Mg)</label>
						<div id="elemento_nutriente_Mg">
							<input type="number" step="Any" name="nutriente_Mg"  class="form-control"  id="nutriente_Mg">
							<span class="help-block"></span>
						</div>
					</div>


				</div>

				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<label for="Azufre">Azufre (S)</label>
						<div id="elemento_nutriente_S">
							<input type="number" step="Any"  name="nutriente_S"  class="form-control"  id="nutriente_S">
							<span class="help-block"></span>
						</div>
					</div>


				</div>




				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<label for="Zinc">Boro (B)</label>
						<div id="elemento_nutriente_B">
							<input type="number" step="Any" name="nutriente_B"  class="form-control"  id="nutriente_B">
							<span class="help-block"></span>
						</div>
					</div>


				</div>

				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<label for="Zinc">Zinc (Zn)</label>
						<div id="elemento_nutriente_Zn">
							<input type="number"  step="Any" name="nutriente_Zn"  class="form-control"  id="nutriente_Zn">
							<span class="help-block"></span>
						</div>
					</div>


				</div>

				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<label for="Zinc">Cobre (Cu)</label>
						<div id="elemento_nutriente_Cu">
							<input type="number" step="Any" name="nutriente_Cu"  class="form-control"  id="nutriente_Cu">
							<span class="help-block"></span>
						</div>
					</div>

				</div>
			</div>






			<div class="row">

				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

					<a href="#"  name="Registrar" title="Registrar Cultivo" disabled class="registrar"  id="Registrar" onclick="enviar()"><h1 class="icon  icon-floppy-disk" ></h1></a>
				</div>
				<div class="col-xs-1 col-md-1 col-lg-1">
					<a href="#" class="consultar" title="Consultar Cultivo" onclick="consultar()"><h1 class="icon  icon-search"></h1></a>

				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

<a href="#"   class="pdf" id="pdf" title="Nuevo Registro" onclick="nuevo_registro()"><h1 class="icon     icon-plus"></h1></a>
</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

					<a href="#" class="consultar actualizar" id="Actualizar" onclick="actualizar()" title="Actualizar Cultivo" ><h1 class="icon    icon-undo"></h1></a>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

					<a href="#"  class="eliminar" id="eliminar" onclick="eliminar_cultivo()"  title="Eliminar Cultivo" ><h1 class="icon   icon-bin"></h1></a>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

					<a href="#"  class="Excel" id="excel"   title="Exportar a Excel" onclick='exportar_excel()' ><h1 class="icon    icon-file-excel"></h1></a>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

					<a href="#"   class="pdf" id="pdf" title="Exportar a Pdf" onclick="exportar()"><h1 class="icon    icon-file-pdf"></h1></a>
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
					<h1 class="modal-title">SELECCIONA UN CULTIVO</h1>

				</div>
				<div class="modal-body">
					<span class="help-block">Selecciona </span>
					<select  class="form-control cultivos" name="fertilizante"    id="fertilizante"  >

						<option value="Selecctiona" onclick="Cambiar_imagen()">Selecctiona </option>
						<?php

						$local="localhost";
						$usuario="root";
						$contra="";
						$bd="siffa";

						$conexion=mysqli_connect($local,$usuario,$contra,$bd)or die ("problemas en la conexion");





						$query="SELECT * FROM fertilizantes ORDER BY NombreFertilizante";

						$resource=mysqli_query($conexion,$query);

						while ($fila=mysqli_fetch_row($resource)) {

							echo "<option value='$fila[0]' >$fila[1]</option>";
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

		<script>
		function exportar_excel () {
				swal({
					title: 'Advertencia',
					text: "Exportar Todos los Fertilizantes",
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Exportar Todos',
					cancelButtonText: 'Solo Este Formulario',
					buttonsStyling: true
				}).then(function() {
					var formulario=document.getElementById('formulario').action="exportaciones_excel/exportar_todos_fertilizantes.php";
					$("#formulario").submit();
				}, function(dismiss) {
					// dismiss  'cancel', 'overlay', 'close', 'timer'
					if (dismiss === 'cancel') { if (validar_nombre_fetilizante()==true &&  validar_nutriente_N()==true &&
						validar_nutriente_F()==true && validar_nutriente_K()==true && validar_nutriente_Ca()==true
						&& validar_nutriente_Mg()==true && validar_nutriente_S()==true && validar_nutriente_Zn()==true && validar_nutriente_B()==true && validar_nutriente_Cu()==true) {

							var formulario=document.getElementById('formulario').action="exportaciones_excel/exportar_fertilizante.php";

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
					text: "Exportar Todos los Fertilizantes",
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Exportar Todos',
					cancelButtonText: 'Solo Este Formulario',
					buttonsStyling: true
				}).then(function() {
					var formulario=document.getElementById('formulario').action="exportaciones/exportar_todos_fertilizantes.php";
					$("#formulario").submit();
				}, function(dismiss) {
					// dismiss  'cancel', 'overlay', 'close', 'timer'
					if (dismiss === 'cancel') { if (validar_nombre_fetilizante()==true &&  validar_nutriente_N()==true &&
						validar_nutriente_F()==true && validar_nutriente_K()==true && validar_nutriente_Ca()==true
						&& validar_nutriente_Mg()==true && validar_nutriente_S()==true && validar_nutriente_Zn()==true && validar_nutriente_B()==true && validar_nutriente_Cu()==true) {

							var formulario=document.getElementById('formulario').action="exportaciones/exportar_fertilizante.php";

							$("#formulario").submit();
						}else{
							swal("Error" ,"Algunos Campos estan Vacios o Incorrectos","error")
						}


					}
				})



			}





			function actualizar() {


				if (validar_nombre_fetilizante()==true &&  validar_nutriente_N()==true &&
				validar_nutriente_F()==true && validar_nutriente_K()==true && validar_nutriente_Ca()==true
				&& validar_nutriente_Mg()==true && validar_nutriente_S()==true && validar_nutriente_Zn()==true && validar_nutriente_B()==true && validar_nutriente_Cu()==true) {
					var fertilizante=document.getElementById('fertilizante').value;
					var nombre_fetilizante=document.getElementById('nombre_fetilizante').value;
					nombre_fetilizante= nombre_fetilizante.toUpperCase();
					var nutriente_N=document.getElementById("nutriente_N").value;
					var nutriente_F=document.getElementById("nutriente_F").value;
					var nutriente_K=document.getElementById("nutriente_K").value;
					var nutriente_Ca=document.getElementById("nutriente_Ca").value;
					var nutriente_Mg=document.getElementById("nutriente_Mg").value;
					var nutriente_S=document.getElementById("nutriente_S").value;
					var nutriente_Zn=document.getElementById("nutriente_Zn").value;
					var nutriente_B=document.getElementById("nutriente_B").value;
					var nutriente_Cu=document.getElementById("nutriente_Cu").value;



					$("#contenedor").load("actualizar_fertilizante.php",{fertilizante:fertilizante,nombre_fetilizante:nombre_fetilizante,nutriente_N:nutriente_N,nutriente_F:nutriente_F,nutriente_Ca:nutriente_Ca,nutriente_K:nutriente_K,
						nutriente_Ca:nutriente_Ca,nutriente_Mg:nutriente_Mg,nutriente_S:nutriente_S,nutriente_Zn:nutriente_Zn,
						nutriente_B:nutriente_B,nutriente_Cu:nutriente_Cu})


					}else{
						swal("Error" ,"Algunos Campos estan Vacios o Incorrectos","error")
					}

				}





				function consultar() {
					$("#consultar").modal("show");
				}





				function enviar () {
					if (validar_nombre_fetilizante()==true &&  validar_nutriente_N()==true &&
					validar_nutriente_F()==true && validar_nutriente_K()==true && validar_nutriente_Ca()==true
					&& validar_nutriente_Mg()==true && validar_nutriente_S()==true && validar_nutriente_Zn()==true && validar_nutriente_B()==true && validar_nutriente_Cu()==true) {


						var nombre_fetilizante=document.getElementById('nombre_fetilizante').value;
						nombre_fetilizante= nombre_fetilizante.toUpperCase();
						var nutriente_N=document.getElementById("nutriente_N").value;
						var nutriente_F=document.getElementById("nutriente_F").value;
						var nutriente_K=document.getElementById("nutriente_K").value;
						var nutriente_Ca=document.getElementById("nutriente_Ca").value;
						var nutriente_Mg=document.getElementById("nutriente_Mg").value;
						var nutriente_S=document.getElementById("nutriente_S").value;
						var nutriente_Zn=document.getElementById("nutriente_Zn").value;
						var nutriente_B=document.getElementById("nutriente_B").value;
						var nutriente_Cu=document.getElementById("nutriente_Cu").value;


						$("#contenedor").load("fertilizante.php",{nombre_fetilizante:nombre_fetilizante,nutriente_N:nutriente_N,nutriente_F:nutriente_F,nutriente_Ca:nutriente_Ca,nutriente_K:nutriente_K,
							nutriente_Ca:nutriente_Ca,nutriente_Mg:nutriente_Mg,nutriente_S:nutriente_S,nutriente_Zn:nutriente_Zn,
							nutriente_B:nutriente_B,nutriente_Cu:nutriente_Cu})



						}else{
							swal("Error" ,"Algunos Campos estan Vacios o Incorrectos","error")
						}



					}

$(document).ready(function(){
    $(document).bind("contextmenu", function(e){
        return false;
    });
});
					$(document).ready(function () {

var nombre_fetilizante=document.getElementById('nombre_fetilizante').focus();
						$('.cultivos').selectpicker({
							liveSearch: true,
							maxOptions: 1
						});




					});



function nuevo_registro() {

						var nombre_fetilizante=document.getElementById('nombre_fetilizante').value='';
						nombre_fetilizante= nombre_fetilizante.toUpperCase();
						var nutriente_N=document.getElementById("nutriente_N").value='';
						var nutriente_F=document.getElementById("nutriente_F").value='';
						var nutriente_K=document.getElementById("nutriente_K").value='';
						var nutriente_Ca=document.getElementById("nutriente_Ca").value='';
						var nutriente_Mg=document.getElementById("nutriente_Mg").value='';
						var nutriente_S=document.getElementById("nutriente_S").value='';
						var nutriente_Zn=document.getElementById("nutriente_Zn").value='';
						var nutriente_B=document.getElementById("nutriente_B").value='';
						var nutriente_Cu=document.getElementById("nutriente_Cu").value='';
var nombre_fetilizante=document.getElementById('nombre_fetilizante').focus();
var actualizar=document.getElementById('Actualizar').style.display="none";
						var eliminar=document.getElementById('eliminar').style.display="none";
}
					function consultar2() {
						var fertilizante=document.getElementById('fertilizante').value;

						$("#contenedor").load("consultar_fertilizante.php",{fertilizante:fertilizante})
						var actualizar=document.getElementById('Actualizar').style.display="block";
						var eliminar=document.getElementById('eliminar').style.display="block";
					}

					// VALIDACION
					$(document).on("ready", inicio);

					function inicio () {

						$("#nombre_fetilizante").keyup(validar_nombre_fetilizante);
						$("#nutriente_N").keyup(validar_nutriente_N);
						$("#nutriente_F").keyup(validar_nutriente_F);
						$("#nutriente_K").keyup(validar_nutriente_K);
						$("#nutriente_Ca").keyup(validar_nutriente_Ca);
						$("#nutriente_Mg").keyup(validar_nutriente_Mg);
						$("#nutriente_S").keyup(validar_nutriente_S);
						$("#nutriente_Zn").keyup(validar_nutriente_Zn);
						$("#nutriente_B").keyup(validar_nutriente_B);
						$("#nutriente_Cu").keyup(validar_nutriente_Cu);
$("#nombre_fetilizante").keyup(validar_existencia);
					}


					function validar_existencia () {


			if (validar_nombre_fetilizante()==true) {

				var nombre_fetilizante=document.getElementById('nombre_fetilizante').value;


$("#contenedor").load("validar_existencia_fertilizante.php",{nombre_fetilizante:nombre_fetilizante})	
			}		



}
					

					function validar_nombre_fetilizante() {

						var nombre_fetilizante=document.getElementById('nombre_fetilizante').value;
						nombre_fetilizante=nombre_fetilizante.toLowerCase();
						if(nombre_fetilizante==null  || nombre_fetilizante.length==0 || /[\\^"'<>;ç`,_ª%&¿¨Ç¡º#~¬€$.*+?=!:|\\/\[\]{}]/.test(nombre_fetilizante)){
							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nombre_fetilizante").attr("class", "form-group has-error  has-feedback");
							$("#nombre_fetilizante").parent().children("span").text("").show();
							$("#nombre_fetilizante").parent().append('<span id="icono_texto" class="icon  form-control-feedback"></span>');
							return false;

						}else if (isNaN(nombre_fetilizante)==false) {
							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nombre_fetilizante").attr("class", "form-group has-error has-feedback");
							$("#nombre_fetilizante").parent().children("span").text("").show();
							$("#nombre_fetilizante").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
							return false;

						}else if (nombre_fetilizante.length>50) {
							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nombre_fetilizante").attr("class", "form-group has-error has-feedback");
							$("#nombre_fetilizante").parent().children("span").text("").show();
							$("#nombre_fetilizante").parent().append('<span id="icono_texto" class="icon   form-control-feedback"></span>');
							return false;

						}else{


							$("#nombre_fetilizante").parent().children("span").text("").show();
							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nombre_fetilizante").attr("class", "form-group has-success has-feedback");
							$("#nombre_fetilizante").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');
							return true;
						}



					}


					function validar_nutriente_N () {

						var nutriente_N=parseFloat(document.getElementById('nutriente_N').value);

						if(nutriente_N==null  || nutriente_N.length==0 || /^\s+$/.test(nutriente_N) || nutriente_N<0){

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_N").attr("class", "form-group has-error  has-feedback");
							$("#nutriente_N").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');

							return false;

						}
						else if (isNaN(nutriente_N)) {
							$("#nutriente_N").parent().children("span").text("").show();
							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_N").attr("class", "form-group has-error has-feedback");
							$("#nutriente_N").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
							return false;

						}else {

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_N").attr("class", "form-group has-success has-feedback");
							$("#nutriente_N").parent().children("span").text("").show();
							$("#nutriente_N").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

							return true;
						}

					}



					function validar_nutriente_F () {

						var nutriente_F=parseFloat(document.getElementById('nutriente_F').value);

						if(nutriente_F==null  || nutriente_F.length==0 || /^\s+$/.test(nutriente_F)|| nutriente_F<0) {

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_F").attr("class", "form-group has-error  has-feedback");
							$("#nutriente_F").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');

							return false;

						}
						else if (isNaN(nutriente_F)) {
							$("#nutriente_F").parent().children("span").text("").show();
							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_F").attr("class", "form-group has-error has-feedback");
							$("#nutriente_F").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
							return false;

						}else {

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_F").attr("class", "form-group has-success has-feedback");
							$("#nutriente_F").parent().children("span").text("").show();
							$("#nutriente_F").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

							return true;
						}

					}


					function validar_nutriente_K () {

						var nutriente_K=parseFloat(document.getElementById('nutriente_K').value);

						if(nutriente_K==null  || nutriente_K.length==0 || /^\s+$/.test(nutriente_K)|| nutriente_K<0){

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_K").attr("class", "form-group has-error  has-feedback");
							$("#nutriente_K").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');

							return false;

						}
						else if (isNaN(nutriente_K)) {
							$("#nutriente_K").parent().children("span").text("").show();
							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_K").attr("class", "form-group has-error has-feedback");
							$("#nutriente_K").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
							return false;

						}else {

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_K").attr("class", "form-group has-success has-feedback");
							$("#nutriente_K").parent().children("span").text("").show();
							$("#nutriente_K").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

							return true;
						}

					}


					function validar_nutriente_Ca () {

						var nutriente_Ca=parseFloat(document.getElementById('nutriente_Ca').value);

						if(nutriente_Ca==null  || nutriente_Ca.length==0 || /^\s+$/.test(nutriente_Ca)|| nutriente_Ca<0){

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_Ca").attr("class", "form-group has-error  has-feedback");
							$("#nutriente_Ca").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');

							return false;

						}
						else if (isNaN(nutriente_Ca)) {
							$("#nutriente_Ca").parent().children("span").text("").show();
							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_Ca").attr("class", "form-group has-error has-feedback");
							$("#nutriente_Ca").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
							return false;

						}else {

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_Ca").attr("class", "form-group has-success has-feedback");
							$("#nutriente_Ca").parent().children("span").text("").show();
							$("#nutriente_Ca").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

							return true;
						}

					}

					function validar_nutriente_Mg () {

						var nutriente_Mg=parseFloat(document.getElementById('nutriente_Mg').value);

						if(nutriente_Mg==null  || nutriente_Mg.length==0 || /^\s+$/.test(nutriente_Mg)|| nutriente_Mg<0){

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_Mg").attr("class", "form-group has-error  has-feedback");
							$("#nutriente_Mg").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');

							return false;

						}
						else if (isNaN(nutriente_Mg)) {
							$("#nutriente_Mg").parent().children("span").text("").show();
							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_Mg").attr("class", "form-group has-error has-feedback");
							$("#nutriente_Mg").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
							return false;

						}else {

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_Mg").attr("class", "form-group has-success has-feedback");
							$("#nutriente_Mg").parent().children("span").text("").show();
							$("#nutriente_Mg").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

							return true;
						}

					}


					function validar_nutriente_S () {

						var nutriente_S=parseFloat(document.getElementById('nutriente_S').value);

						if(nutriente_S==null  || nutriente_S.length==0 || /^\s+$/.test(nutriente_S)|| nutriente_S<0){

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_S").attr("class", "form-group has-error  has-feedback");
							$("#nutriente_S").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');

							return false;

						}
						else if (isNaN(nutriente_S)) {
							$("#nutriente_S").parent().children("span").text("").show();
							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_S").attr("class", "form-group has-error has-feedback");
							$("#nutriente_S").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');

							return false;

						}else {

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_S").attr("class", "form-group has-success has-feedback");
							$("#nutriente_S").parent().children("span").text("").show();
							$("#nutriente_S").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

							return true;
						}

					}

					function validar_nutriente_Zn () {

						var nutriente_Zn=parseFloat(document.getElementById('nutriente_Zn').value);

						if(nutriente_Zn==null  || nutriente_Zn.length==0 || /^\s+$/.test(nutriente_Zn)|| nutriente_Zn<0){

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_S").attr("class", "form-group has-error  has-feedback");
							$("#nutriente_Zn").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');

							return false;

						}
						else if (isNaN(nutriente_Zn)) {
							$("#nutriente_Zn").parent().children("span").text("").show();
							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_Zn").attr("class", "form-group has-error has-feedback");
							$("#nutriente_Zn").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
							return false;

						}else {

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_Zn").attr("class", "form-group has-success has-feedback");
							$("#nutriente_Zn").parent().children("span").text("").show();
							$("#nutriente_Zn").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

							return true;
						}

					}

					function validar_nutriente_B () {

						var nutriente_B=parseFloat(document.getElementById('nutriente_B').value);

						if(nutriente_B==null  || nutriente_B.length==0 || /^\s+$/.test(nutriente_B)|| nutriente_B<0){

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_B").attr("class", "form-group has-error  has-feedback");
							$("#nutriente_B").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');

							return false;

						}
						else if (isNaN(nutriente_B)) {
							$("#nutriente_B").parent().children("span").text("").show();
							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_B").attr("class", "form-group has-error has-feedback");
							$("#nutriente_B").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
							return false;

						}else {

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_B").attr("class", "form-group has-success has-feedback");
							$("#nutriente_B").parent().children("span").text("").show();
							$("#nutriente_B").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

							return true;
						}

					}

					function validar_nutriente_Cu () {

						var nutriente_Cu=parseFloat(document.getElementById('nutriente_Cu').value);

						if(nutriente_Cu==null  || nutriente_Cu.length==0 || /^\s+$/.test(nutriente_Cu)|| nutriente_Cu<0){

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_Cu").attr("class", "form-group has-error  has-feedback");
							$("#nutriente_Cu").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');

							return false;

						}
						else if (isNaN(nutriente_Cu)) {
							$("#nutriente_Cu").parent().children("span").text("").show();
							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_Cu").attr("class", "form-group has-error has-feedback");
							$("#nutriente_Cu").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
							return false;

						}else {

							$("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
							$("#elemento_nutriente_Cu").attr("class", "form-group has-success has-feedback");
							$("#nutriente_Cu").parent().children("span").text("").show();
							$("#nutriente_Cu").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

							return true;
						}

					}

				</script>
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


					.icono_fetilizante{

						position: relative;
						display: block;
						left: 93%;
						top: -28px;
					}
				</style>
				<script src="../../js/ytmenu.js"></script>
				<script src="../../js/menu-siffa.js"></script>
				</html>
