<script>
  // var stateObj =window.location;

// window.history.pushState(null , '', ".html");


</script>
<?php 

// PARA SOLUCIONAR EL PROBLE DE LA LETRA GRANDE ES COMOENTAR EL ESCRIP Y LA FUNCION DEL ROLDE CONSULTA
include '../conexion_login/inicio_sesion.php';


echo "<script>


var Rol='$fila[2]';


</script>";

?>

<!DOCTYPE HTML>
<html>
<head>




	<script type="text/javascript">



// AQUI HAGO LA CONSICION PARA LOS PORCENTAJES ORGANICOS SI EL USUARIO SELECCIONA UNO DESATIVA EL OTRO


function habilitar(value)

{

	if(value=="1")

	{

		// habilitamos

		document.getElementById("MO").disabled=false;
		document.getElementById("CO").disabled=true;
		document.getElementById("CO").style.display="none";
		document.getElementById("nivel_CO").style.display="none";
		document.getElementById("MO").style.display="block";
		document.getElementById("nivel_MO").style.display="block";

	}else if(value=="2"){

		// deshabilitamos

		document.getElementById("MO").disabled=true;
		document.getElementById("CO").disabled=false;
		document.getElementById("MO").style.display="none";
		document.getElementById("CO").style.display="block";
		document.getElementById("nivel_MO").style.display="none";
		document.getElementById("nivel_CO").style.display="block";


	}

};






function graficos() {
	var cultivo_select=document.getElementById('cultivo').value;

	$("#contenedor").load("graficar.php", {cultivo_select:cultivo_select});

};




// // AQUI ES PARA PONER OCULTAR LO DEL ANALISIS Y MOSTRAR LO DEL PLAN
// function plan_nutricional () {
// var mostar_plan_nutricional=document.getElementById('padre').style.display="none";
// var mostrar_analisis=document.getElementById('mostrar_analisis').style.display="block";
//   }

//   // AQUI ES PARA MOSTRAR EL ANALISIS Y OCULTAR EL PLAN NUTRICIONAL
//   function mostrar_analisis() {
// var mostar_plan_nutricional=document.getElementById('padre').style.display="block";
// var mostrar_analisis=document.getElementById('mostrar_analisis').style.display="none";

//   }





</script>
</head>

<link rel="stylesheet" type="text/css" href="../../css/demo.css" />
<link rel="stylesheet" type="text/css" href="../../css/anuncios.css" />
<link rel="stylesheet" type="text/css" href="../../css/menu_siffa1.css" />
<link rel="stylesheet" href="../../css/bootstrap.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" type="text/css" href="../../css/default.css" />
<link rel="stylesheet" type="text/css" href="../../css/style.css" />
<link rel="stylesheet" type="text/css" href="../../css/estilos.css" />
<script src="../../js/jquery.js"></script>
<!-- <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8"> -->
<link rel="stylesheet" href="../../css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="../../css/alert.css">
<link rel="stylesheet" href="../../css/alert2.css">
<link rel="stylesheet" href="../../css/formValidation.css"/>
<link rel="stylesheet" type="text/css" href="../../engine1/style.css" />



<link href="../../img/logosolo1.png" rel="icon" >
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../../css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="../../css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="../../css/alert.css">
<link rel="stylesheet" href="../../css/formValidation.css"/>
<link rel="stylesheet" href="../../css/estilos.css" media="screen" title="no title" charset="utf-8">
<!-- <link rel="stylesheet" type="text/css" href="css/menu_siffa.css" /> -->


<script src="../../js/ajax.js"></script>
<script src="../../js/jquery.js"></script>
<script src="../../js/validacion.js"></script>
<script src="../../js/bootstrap.min.js" charset="utf-8"></script>
<script src="../../js/alert.js"></script>
<!-- <script src="js/alert2.js"></script> -->
<script src="../../js/formValidation.js"></script>
<script type="text/javascript" src="../../js/bootstrap.js"></script>
<script src="../../js/validator.js"></script>
<script src="../../js/highcharts.js"></script>
<script src="../../js/highcharts-3d.js"></script>
<!-- <script src="../../js/modules/exporting.js"></script> -->


<script src="../../js/cambiar_url.js"></script>
<script src="barras_movibles.js"></script>
<script src="../../js/highcharts.js"></script>
<script src="../../js/exporting.js"></script>
<script src="../../js/canvas-tools.js"></script>
<script src="../../js/export-csv.js"></script>
<script src="../../js/jspdf.js"></script>
<script src="../../js/highcharts-export-clientside.js"></script>



<title>INTERPRETACION</title>

<script src="../../js/modules/data.js"></script>
<script src="../../js/degradado.js"></script>
<script src="../../js/modules/heatmap.js"></script>

<body  >



	<!-- AQUI ABAJO ES LO DE MENU -->


	<!-- AQUI ABAJO ES LO DE MENU -->
	<!-- /container -->




	<div class="col-md-12 header">

	</div>

	<div class="titulo">
		<img src="../../img/logosolo.png" alt="">
		<h1 class="help-block">SIFFA</h1>
	</div>






	<!-- AQUI ABAJO ES LO DE MENU -->
	<div class="side">
		<nav class="dr-menu">
			<div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label"></a></div>
			<ul>
				<li><a class="dr-icon dr-icon-user" href="#"><?php echo $fila[1] ?></a></li>
				<li  class="submenu" id="captura_datos"><a id="submenu" class="dr-icon dr-icon-pencil2"    href="#" >Captura de Datos</a>
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
					<li><a class="dr-icon dr-icon-stats-dots" href="../analisis_reg/calcular.php">Analisis de suelo</a>
					</li>
					<li><a class="dr-icon dr-icon-eye" id="submenu1" href="#">Consultas</a>
						<ul class="children"  id="children1">
							<li><a href="../consultas/consultar_requerimiento.php" class="dr-icon  dr-icon-eye-plus">Requerimientos </a></li>
							<li><a href="../consultas/consultar_analisis.php" class="dr-icon dr-icon-eye-plus">Consultar Analisis</a></li>
							<li><a href="../consultas/consultar_cultivo.php" class="dr-icon dr-icon-eye-plus">Consultar Cultivo </a></li>
							<li><a href="../consultas/consultar_finca.php" class="dr-icon dr-icon-eye-plus">Consultar Finca </a></li>
							<li><a href="../consultas/consultar_laboratorio.php" class="dr-icon dr-icon-eye-plus">Consultar Laboratorio</a></li>
							<li><a href="../consultas/consultar_lote_cultivo.php" class="dr-icon dr-icon-eye-plus">Consultar LoteCultivo</a></li>
							<li><a href="../consultas/consultar_fetilizante.php" class="dr-icon dr-icon-eye-plus">Consultar Fertilizante</a></li>
							<li><a href="../consultas/consultar_Laboratorio.php" class="dr-icon dr-icon-eye-plus">Consultar Laboratorio</a></li>


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





	<div class="container-fluid  ">

		<form action="" id="formulario" method="POST">
			<div class="table-responsive">
				<div class="col-md-12">
					<h1>ANALISIS DE LABORATORIO</h1>
				</div>


				<div class="col-md-2">
					<div class="form-group">
						<label for="numero_muestra"># Analisis</label>
						<div id="elemento_numero_muestra">
							<input type="number" step="Any" name="numero_muestra"  class="form-control"  id="numero_muestra">
							<span class="help-block"></span>
						</div>
					</div>


				</div>

				<div class="col-md-2">
					<label for="">Elige un Laboratorio</label>
					<div id="elemento_laboratorio">
						<select  class="form-control " name="laboratorio"    id="laboratorio"  >

							<option value="Selecciona" >Selecciona </option>
							<?php
							$connection=mysqli_connect("localhost","root","","siffa");
							$query="SELECT * FROM laboratorio";
							$resource=mysqli_query($connection,$query);
							while ($fila=mysqli_fetch_row($resource)) {
								echo "<option value='$fila[0]' >$fila[1]</option>";
							}

							?>
						</select>
					</div>
				</div>


				<div class="col-md-3">
					<label for="">Elige un Finca</label>
					<div id="elemento_finca">
						<select  class="form-control " onclick='mostrarlote()' name="finca"    id="finca"  >

							<option value="Selecciona" >Selecciona </option>
							<?php
							$connection=mysqli_connect("localhost","root","","siffa");
							$query="SELECT * FROM hacienda";
							$resource=mysqli_query($connection,$query);
							while ($fila=mysqli_fetch_row($resource)) {
								echo "<option value='$fila[0]' >$fila[1]</option>";
							}

							?>
						</select>
					</div>

				</div>

				<div class="col-md-3">
					<label for="">Elige un lote</label>
					<div id="elemento_lote">
						<div id="contenedor_lote">
							<?php 


							$connection=mysqli_connect("localhost","root","","siffa");

							$query="SELECT * FROM lote  ORDER BY NumeroLote";
							$resource=mysqli_query($connection,$query);

							echo "<select name='lote' id='lote' onclick='mostrar_cultivo()' class='lote form-control'>";
							echo "<option value='Selecciona'  >Selecciona</option>";
							while($fila=mysqli_fetch_row($resource)){
								echo "<option value='$fila[0]'   >$fila[1]</option>";
							}
							echo "</select>"; ?>
						</div>
					</div>
				</div>


				<div class="col-md-2">
					<label for="">Fecha realizacion Analisis</label>
					<input type="date" name="" id="fecha" class="form-control">
				</div>



				<div >


					<table class="table table-bordered table-condensed table-hover table-responsive" >
						<tr>
							<td class=" " >Tamaño (Ha)</td>
							<td id="elemento_hectarea"><input class="form-control" id="hectarea" name="hectarea" type="number"  step="any">
								<span class="help-block"></span>
							</td>


							<td class="" >Profundidad (m)</td>
							<td id="elemento_profundidad" ><input class="form-control" id="profundidad" name="profundidad" type="number" step="any">
								<span class="help-block"></span>
							</td>


							<td  class=" " >Clima (Fío-Calido-Medio)</td>
							<td  id="elemento_clima">
								<select class="form-control"  name="cilma" id="clima">
									<option value="Selecciona">Selecciona</option>
									<option value="frio">frio</option>
									<option value="Medio">medio</option>
									<option value="calido">calido</option>
								</select>
								<span class="help-block"></span></td>


								<td class=" " >Densidad Aparente (g/cc)</td>
								<td id="elemento_densidad_aparente"><input class="form-control" id="densidad_aparente" name="densidad_aparente" type="number" step="any">
									<span class="help-block"></span>
								</td>



							</tr>
						</table>

					</div>



					<table style="display:table"  class="table table-bordered table-hover table-responsive table-condensed" >
						<tr class=" text-center danger" >
							<td rowspan="2">
								<p class="">Elementos</p>
							</td>
							<td rowspan="2"><p class="">PH</p> </td>
							<td id="elemento_radio" rowspan="2" class=""><input type="radio"  class=" form-group" name="%"   value="1" id="1" onchange="habilitar(this.value)" required >%MO</input>
								<span class="help-block"></span>
							</td>
							<td rowspan="2" class=""><input type="radio"  class="form-group "  name="%" value="2" id="" onchange="habilitar(this.value)" required >%CO</input></td>

							<td rowspan="2"><p class="">P  ppm-B-||</p></td>
							<td colspan="5"><p class="">BASES [cmol(c)/ Kg Suelo]</p></td>
							<td rowspan="2"><p class="">CICE</p></td>
							<td rowspan="2"><p class="">S  -ppm</p></td>


						</tr>
						<tr class=" text-center warning">




							<td><p class="">AL</p></td>
							<td><p class="">Ca</p></td>
							<td><p class="">Mg</p></td>
							<td><p class="">K</p></td>
							<td><p class="">Na</p></td>

						</tr>
						<tr class="   text-center" id="input-text">
							<td id=""><p class="">Resultados</p></td>

							<td class=" form-group"  id="elemento_PH" ><input  required type="number" step="any" name="PH" id="PH" class="form-control elementos"  ><span class="help-block"></span>

							</td>


							<td id="elemento_MO" class="form-group"><input required type="number" step="any" name="MO" id="MO"  class=" form-control  elementos"><span class="help-block"></span>
							</td>
							<td  class=" form-group" id="elemento_CO"><input required type="number" step="any" name="CO" id="CO" class="form-control elementos"><span class="help-block"></span></td>
							<td class=" form-group" id="elemento_P"><input required type="number" step="any" name="P" id="P" class="form-control  elementos"><span class="help-block"></span></td>
							<td class=" form-group" id="elemento_Al"><input required type="number" step="any" name="Al" id="Al" class="form-control  elementos"><span class="help-block"></span></td>
							<td class=" form-group" id="elemento_Ca"><input required type="number" step="any" name="Ca" id="Ca" class="form-control  elementos"><span class="help-block"></span></td>
							<td class=" form-group" id="elemento_Mg"><input required type="number" step="any" name="Mg" id="Mg" class="form-control  elementos"><span class="help-block"></span></td>
							<td class=" form-group" id="elemento_K"><input required type="number" step="any" name="K" id="K" class="form-control  elementos"><span class="help-block"></span></td>
							<td class=" form-group" id="elemento_Na"><input required type="number" step="any" name="Na" id="Na" class="form-control  elementos"><span class="help-block"></span></td>
							<td class=" form-group" id="elemento_CICE"><input required type="button" name="CICE" id="CICE" class="form-control  cice elementos"><span class="help-block"></span></td>
							<td class=" form-group" id="elemento_S"><input required type="number" step="any" name="S" id="S" class="form-control  elementos"><span class="help-block"></span></td>

						</tr>
						<tr class="text-center" id="fila_nivel1" style="display:none">
							<td ><p class="">Niveles</p></td>
							<td><input type="button" value="" id="nivel_PH" class="btn elemento"></td>
							<td><input type="button" value="" id="nivel_MO" class="btn elemento"></td>
							<td><input type="button" value="" id="nivel_CO" class="btn elemento"></td>
							<td><input type="button" value="" id="nivel_P" class="btn elemento"></td>
							<td><input type="button" value="" id="nivel_Al" class="btn elemento"></td>
							<td><input type="button" value="" id="nivel_Ca" class="btn elemento"></td>
							<td><input type="button" value="" id="nivel_Mg" class="btn elemento"></td>
							<td><input type="button" value="" id="nivel_K" class="btn elemento"></td>
							<td><input type="button" value="" id="nivel_Na" class="btn elemento"></td>
							<td><input type="button" value="" id="nivel_CICE" class="btn elemento"></td>
							<td><input type="button" value=""  id="nivel_S" class="btn elemento"></td>

						</tr>
					</table style="display:table" >
					<table  class=" table table-bordered table-responsive table-hover table-condensed ">
						<tr class="danger text-center">

							<td colspan="5"><p class="">ELEMENTOS MENORES(ppm)</p></td>
							<td colspan="4"><p class="">Saturación( % )</p></td></tr>
							<tr class="warning text-center">
								<td><p class="">Elementos</p></td>
								<td><p class="">Fe</p></td>
								<td><p class="">Mn</p></td>
								<td><p class="">Cu</p></td>
								<td><p class="">Zn</p></td>
								<td><p class="">B</p></td>
								<td><p class="">Al</p></td>
								<td><p class="">Na</p></td>
								<td><p class="">CE-ds/m</p></td></tr>
								<tr class="text-center">
									<td >
										<p class="">Resultados</p>
									</td><td id="elemento_Fe"><input required type="number"  step="any" name="Fe" id="Fe" class="form-control  elementos"><span class="help-block"></span></td>
									<td class=" form-group" id="elemento_Mn"><input required type="number" step="any" name="Mn" id="Mn" class="form-control  elementos"><span class="help-block"></span></td>
									<td class=" form-group" id="elemento_Cu"><input required type="number" step="any" name="Cu" id="Cu" class="form-control  elementos"><span class="help-block"></span></td>
									<td class=" form-group" id="elemento_Zn"><input required type="number" step="any" name="Zn" id="Zn" class="form-control  elementos"><span class="help-block"></span></td>
									<td class=" form-group" id="elemento_B"><input required type="number" step="any" name="B" id="B" class="form-control  elementos"><span class="help-block"></span></td>
									<td class=" form-group" id="elemento_porcentaje_Al"><input required type="button" name="porcentaje_Al" id="porcentaje_Al" class="form-control  elementos"><span class="help-block"></span></td>
									<td class=" form-group" id="elemento_porcentaje_Na"><input required type="button" name="porcentaje_Na" id="porcentaje_Na" class="form-control  elementos"><span class="help-block"></span></td>
									<td class=" form-group" id="elemento_CE"><input required type="number" step="any" name="CE" id="CE" class="form-control  elementos"><span class="help-block"></span></td></tr>



									<tr class="text-center" style="display:none" id="fila_nivel" >
										<td >
											<p class="">Niveles</p>
										</td>
										<td><input type="button" value="" id="nivel_Fe"  class="btn elemento"></td>
										<td><input type="button" value="" id="nivel_Mn"  class="btn elemento"></td>
										<td><input type="button" value="" id="nivel_Cu"  class="btn elemento"></td>
										<td><input type="button" value="" id="nivel_Zn"  class="btn elemento"></td>
										<td><input type="button" value="" id="nivel_B"  class="btn elemento"></td>
										<td><input type="button" value="" id="porcentaje_nivel_Al" class="btn elemento"></td>
										<td><input type="button" value="" id="porcentaje_nivel_Na" class="btn elemento"></td>
										<td><input type="button" value="" id="nivel_CE" class="btn elemento"></td></tr>
										<tr>

											<td><input type="button" value="Guardar Analisis" onclick="enviar1()" id="enviar" class="interpretar btn btn-danger"> <span id="icono_guardar" class="icon icono_guardar   icon-floppy-disk"></span></td>
												<td><input type="button" value="Plan Nutricional"  onclick="exportar()"  id="plan" onclick="plan_nutricional()"  class="btn btn-success  plan "><span style="display:none" id="icono_plan" class="icon icono_plan   icon-table2"></span></td>
									<!-- 	<td><input type="button" value="Buscar Analisis"  onclick="consultar_analisis()" class="interpretar btn btn-danger"> <span class="icon icono_guardar    icon-search"></span></td>
									-->
								</tr>
							</table>
						</form>

					</div>
				</div>
				<div id="contenedor">

				</div>

				<div id="tamaño">


				</div>


			</div>





<div id="tabla" style="display: none; position: relative;z-index: 0; top: 100%;">
							<table class="table table-bordered">


								<tr>
									<td >ELEMENTO</td>
									<td>PH</td>
									<td>%MO</td>
									<td>P</td>
									<td>Al</td>
									<td>Ca</td>
									<td>Mg</td>
									<td>K</td>
									<td>Na</td>
									<td>CICE</td>
									<td>S</td>
								</tr>



								<tr>
									<td>RESULTADO</td>
									<td ><p id="resultado_PH"></p></td>
									<td id="resultado_MO"></td>
									<td id="resultado_P"></td>
									<td id="resultado_Al"></td>
									<td id="resultado_Ca"></td>
									<td id="resultado_Mg"></td>
									<td id="resultado_K"></td>
									<td id="resultado_Na"></td>
									<td id="resultado_CICE"></td>
									<td id="resultado_S"></td>


								</tr>

								<tr>      
									<td >NIVEL</td>
									<td id="niveles_PH"></td>
									<td id="niveles_MO"></td>
									<td id="niveles_P"></td>
									<td id="niveles_Al"></td>
									<td id="niveles_Ca"></td>
									<td id="niveles_Mg"></td>
									<td id="niveles_K"></td>
									<td id="niveles_Na"></td>
									<td id="niveles_CICE"></td>
									<td id="niveles_S"></td>


								</tr>

							</table>


							<table class="table table-bordered">
								<tr>
									<td>ELEMENTO</td>
									<td>Fe</td>
									<td>Mn</td>
									<td>Cu</td>
									<td>Zn</td>
									<td>B</td>
									<td>Al</td>
									<td>Na</td>
									<td>CE</td>
								</tr>
								<tr>
									<td>RESULTADO</td>
									<td id="resultado_Fe"></td>
									<td id="resultado_Mn"></td>
									<td id="resultado_Cu"></td>
									<td id="resultado_Zn"></td>
									<td id="resultado_B"></td>
									<td id="resultado_porcentaje_Al"></td>
									<td id="resultado_porcentaje_Na"></td>
									<td id="resultado_Ce"></td>
								</tr>
								<tr>
									<td>NIVELES</td>
									<td id="niveles_Fe"></td>
									<td id="niveles_Mn"></td>
									<td id="niveles_Cu"></td>
									<td id="niveles_Zn"></td>
									<td id="niveles_B"></td>
									<td id="niveles_porcentaje_Al"></td>
									<td id="niveles_porcentaje_Na"></td>
									<td id="niveles_Ce"></td>
								</tr>
							</table>

							<table class="table table-bordered">

								<tr>
									<td>#</td>
									<td>Nombre Nutriente</td>
									<td>Cantidad Suelo</td>
									<td>Requerimiento Nutricional</td>
									<td>Diferencia</td>
								</tr>
								<tr>
									<td>1</td>
									<td>Nitrogeno (N)</td>
									<td ><p id="tabla_N1"></p></td>
									<td ><p id="nutriente_necesario_N1"></p></td>
									<td ><p id="diferencia_N1"></p></td>
								</tr>
								<tr>
									<td>2</td>
									<td>Fosforo (P)</td>
									<td><p  id="tabla_P1"></p></td>
									<td><p  id="nutriente_necesario_P1"></p></td>
									<td><p  id="diferencia_P1"></p></td>
									<!-- <td></td> -->
								</tr>
								<tr>
									<td>3</td>
									<td>Potasio (K)</td>
									<td><p id="tabla_K1"></p></td>
									<td><p id="nutriente_necesario_K1"  ></p></td>
									<td><p id="diferencia_K1"></p></td>
									<!-- <td></td> -->
								</tr>
								<tr>
									<td>4</td>
									<td>Calcio (Ca)</td>
									<td><span id="tabla_Ca1"></span></td>
									<td><p  id="nutriente_necesario_Ca1"></p></td>
									<td><p  id="diferencia_Ca1"></p></td>
									<!-- <td></td> -->
								</tr>
								<tr>
									<td>5</td>
									<td>Magnesio (Mg)</td>
									<td><p id="tabla_Mg1"  ></p></td>
									<td><p  id="nutriente_necesario_Mg1"></p></td>
									<td><p  id="diferencia_Mg1"></p></td>
									<!-- <td></td> -->
								</tr>
								<tr>
									<td>6</td>
									<td>Azufre (S)</td>
									<td><span id="tabla_S1" ></span></td>
									<td><p  id="nutriente_necesario_S1"></p>
									</td>
									<td><p id="diferencia_S1" ></p></td>
									<!-- <td></td> -->
								</tr>
								<tr>
									<td>7</td>
									<td>Zinc (Zn)</td>
									<td><p id="tabla_Zn1"  ></p></td>
									<td><p  id="nutriente_necesario_Zn1"></p></td>
									<td><p  id="diferencia_Zn1"></p></td>
									<!-- <td></td> -->
								</tr>
								<tr>
									<td>8</td>
									<td>Boro (B)</td>
									<td><p id="tabla_B1"  ></p></td>
									<td><p  id="nutriente_necesario_B1"></p></td>
									<td><p  id="diferencia_B1"></p></td>
									<!-- <td></td> -->
								</tr>
								<tr>
									<td>9</td>
									<td>Cobre (Cu)</td>
									<td><p id="tabla_Cu1"  ></p></td>
									<td><p  id="nutriente_necesario_Cu1"></p></td>
									<td><p  id="diferencia_Cu1"></p></td>
									<!-- <td></td> -->
								</tr>


							</table>




						</div>

						<div class="container-fluid">
							<div class="row">
								<div class="col-md-7">
									<table id="requisito_tabla"   class="table table-bordered" style="display:none">
										<tr class="text-center danger">
											<td colspan="6">Kg/Ha</td>

										</tr>
										<tr class="text-center warning">
											<td>#</td>
											<td>Nombre Nutriente</td>
											<td>Cantidad-Suelo</td>
											<td>Requerimiento Nutricional (Cultivo)</td>
											<td>Diferencia</td>
											<!-- <td> Aporte Fuente</td> -->
										</tr>
										<tr>
											<td>1</td>
											<td>Nitrogeno (N)</td>
											<td ><p class="form-control text-center" id="tabla_N"></p></td>
											<td ><p class="form-control text-center" id="nutriente_necesario_N"></p></td>
											<td ><p class="form-control text-center" id="diferencia_N"></p></td>
											<!-- <td></td> -->
										</tr>
										<tr>
											<td>2</td>
											<td>Fosforo (P)</td>
											<td><p class="text-center form-control" id="tabla_P"></p></td>
											<td><p class="text-center form-control" id="nutriente_necesario_P"></p></td>
											<td><p class="form-control text-center" id="diferencia_P"></p></td>
											<!-- <td></td> -->
										</tr>
										<tr>
											<td>3</td>
											<td>Potasio (K)</td>
											<td><p id="tabla_K" class="form-control elementos text-center" ></p></td>
											<td><p id="nutriente_necesario_K"  class="form-control text-center"></p></td>
											<td><p class="form-control text-center" id="diferencia_K"></p></td>
											<!-- <td></td> -->
										</tr>
										<tr>
											<td>4</td>
											<td>Calcio (Ca)</td>
											<td><span id="tabla_Ca" class="form-control elementos text-center" ></span></td>
											<td><p class="form-control text-center" id="nutriente_necesario_Ca"></p></td>
											<td><p class="form-control text-center" id="diferencia_Ca"></p></td>
											<!-- <td></td> -->
										</tr>
										<tr>
											<td>5</td>
											<td>Magnesio (Mg)</td>
											<td><p id="tabla_Mg" class="form-control elementos text-center" ></p></td>
											<td><p class="form-control text-center" id="nutriente_necesario_Mg"></p></td>
											<td><p class="form-control text-center" id="diferencia_Mg"></p></td>
											<!-- <td></td> -->
										</tr>
										<tr>
											<td>6</td>
											<td>Azufre (S)</td>
											<td><span id="tabla_S" class="form-control elementos text-center" ></span></td>
											<td><p class="form-control text-center" id="nutriente_necesario_S"></p>
											</td>
											<td><p class="form-control text-center" id="diferencia_S" ></p></td>
											<!-- <td></td> -->
										</tr>
										<tr>
											<td>7</td>
											<td>Zinc (Zn)</td>
											<td><p id="tabla_Zn" class="form-control elementos text-center" ></p></td>
											<td><p class="form-control text-center" id="nutriente_necesario_Zn"></p></td>
											<td><p class="text-center form-control" id="diferencia_Zn"></p></td>
											<!-- <td></td> -->
										</tr>
										<tr>
											<td>8</td>
											<td>Boro (B)</td>
											<td><p id="tabla_B" class="form-control elementos text-center" ></p></td>
											<td><p class="form-control text-center" id="nutriente_necesario_B"></p></td>
											<td><p class="form-control text-center" id="diferencia_B"></p></td>
											<!-- <td></td> -->
										</tr>
										<tr>
											<td>9</td>
											<td>Cobre (Cu)</td>
											<td><p id="tabla_Cu" class="form-control elementos text-center" ></p></td>
											<td><p class="form-control text-center" id="nutriente_necesario_Cu"></p></td>
											<td><p class="form-control text-center" id="diferencia_Cu"></p></td>
											<!-- <td></td> -->
										</tr>
									</table>
								</div>
								<div class="col-md-5">
									<!-- AQUI ABAJO VA LO DE APLICACION FERTILIZANTE -->
									<div class="caja_fertilizante" style="display: none" id="caja_fertilizante">
										<span class="icon  icon-cancel-circle" title="Cerrar Ventana"></span>
										<h4 class="text-center">FERTILIZANTES</h4>
										<div class="hijo_fertilizante">
											<table class="table-bordered table table-condensed " id="tabla_fertiizante">
												<tr class="danger">
													<td>NOMBRE FERTILIZANTE</td>
													<td>CANTIDAD DE BULTOS</td>
													<td>CANTIDAD DE BULTOS RECOMENDADOS</td>
													<td>RETIRAR FERTILIZANTE</td>
												</tr>
												<tr>
			<!-- <td></td>
				<td><input type="text" class="form-control" id="fertilizante_compuesto"></td>
				<td><h3 class="icon   icon-bin" title="Retirar Fertilizante"></h3></td> -->
			</tr>

		</table>
	</div>

</div>
</div>
</div>
</div>






<div class="row">
	<div class="col-md-3">
		<div class="analisis exportar" id="container" style="min-width: 150px; height: 500px; margin: 0 auto"></div>
	</div>
	<div class="container-fluid">
		<div class="col-md-9">
			<div class="analisis exportar2" id="analisis" style="min-width: 310px; height: 500px; margin: 0 auto">
			</div>
		</div>
	</div>

</div>













			<div class="modal fade" id="consultar_analisis" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title">BUSCAR ANALSIS</h1>

						</div>
						<div class="modal-body">
							<div class="col-md-12">

								<div class="col-md-4">
									<label for="">Selecciona Finca</label>
									<select  class="form-control finca" onclick='mostrarlote1()' name="finca"    id="finca1"  >

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

											echo "<option value='$fila[0]' >$fila[1]</option>";
										}




										?>

									</select>
								</div>

								<div class="col-md-4">

									<label for="">Selecciona Lote</label>
									<div id="contenedor_lote1">

									</div>
								</div>

								<div class="col-md-4">

									<label for="">Selecciona Cultivo</label>
									<div id="contenedor_cultivo1"></div>
								</div>

							</div>

							<div class="col-md-12">

								<div class="col-md-4">
									<br>
									<label for="">Selecciona # Muestra</label>	

									<div id="contenedor_muestra">

									</div>
								</div>



							</div>


						</div>
						<div class="modal-footer">

							<a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
						</div>
					</div>
				</div>


				<style>
				.caja_fertilizante{

					width: 100%;
					z-index: 20;
					border: 2px solid #ccc;
					position: absolute;
					padding: 15px;
					opacity: 1;
					overflow: auto;


				}

				.caja_fertilizante span{
					color: red;
					position: relative;
					cursor: pointer;


				}

				.caja_fertilizante h3{
					color: red;
					cursor: pointer;
					/*border: 1px solid black;*/
					width: 20%;
					position: relative;
					margin: auto;
				}
				.titulo img{


					position: relative;display: block;
					top: 46px;
					left: 45px;
				}
				.titulo h1{
					position: relative;
					color: white;
					left: 0px;
					top: 20px;
				}

				.titulo{
					position: absolute;
					width: 150px;
					left: 350px;
					height: 180px;
					z-index: 1;
					background: #A5DF00;
				}

				.header{

					position: absolute;
					z-index: 0;
					/**/
					height: 70px;


				}

				.padre{
					position: relative;
					z-index: 2;

				}

				.dr-menu{
					z-index: 2;
					bottom: 565px;

				}

				.ca-menu{


					position: absolute;
					top: 440px;
					left: 200px;
				}

				.interpretar{
					padding-right: 30px;
				}

				.icono_interpretar{

					position: relative;display: block;
					top: -23px;
					left: 85px;
					color: white;
				}
				.cice{
					background: #00cc33;
				}

				.plan{
					padding-right: 30px;

				}
				.icono_plan{

					position: relative;display: block;
					top: -23px;
					left: 120px;
					color: white;

				}

				.icono_guardar{

					position: relative;
					display: block;
					left: 68%;
					bottom: 23px;
					color: white;
				}

				#icono_fetilizante{


					position: relative;
					display: block;
					color:white;
					top: -24px;
					left: 85%;
					width: 24px;
				}
			</style>


			<script>



// function prueba() {
// 	var doc = new jsPDF('P' , 'pt');
// doc.fromHTML($("#tabla").get(0),20,20,{

//     "height":'500'
// })

// doc.save("prueba.pdf")
// }

function exportar() {


	var laboratorio=document.getElementById("laboratorio").value;
	var cultivo=document.getElementById('cultivo').value;

	$("#contenedor").load("exportar_pdf/exportar_analisis.php", {laboratorio:laboratorio,cultivo:cultivo})




}






function exportar_pdf() {
	var formulario=document.getElementById('formulario').action="exportar_pdf/exportar_analisis.php";

	$("#formulario").submit();

}



function inicio() {








	if (Rol=='Consulta') {

		var captura_datos=document.getElementById('captura_datos').style.display='none';
		var copia_seguridad=document.getElementById('copia_seguridad').style.display='none';
		var configuraciones=document.getElementById('configuraciones').style.display='none';
		var enviar=document.getElementById('enviar').style.display='none';
		var icono_guardar=document.getElementById('icono_guardar').style.display='none';

	}


}

function consultar_analisis() {
	$("#consultar_analisis").modal("show");

}

function mostrarlote() {

	var finca=document.getElementById('finca').value;

	$("#contenedor_lote").load("mostrar_lote.php",{finca:finca});


}
var lote=document.getElementById('lote').style.opacity='0';
var cultivo=document.getElementById('cultivo').style.opacity='0';


function mostrar_cultivo() {
	var lote1=document.getElementById('lote').value;

	$("#contenedor_cultivo").load("mostrar_cultivo.php",{lote1:lote1});

	var cultivo=document.getElementById('cultivo').style.opacity='1';
}






function enviar1() {

	if (validar_numero_muestra()==true  && validar_laboratorio()==true && validar_finca()==true && validar_lote()==true && validar_hectarea()==true && validar_profundidad()==true && validar_clima()==true && validar_densidad_aparente()==true && validar_PH()==true && validar_MO()==true  && validar_P()==true && validar_Al()==true && validar_Ca()==true && validar_Mg()==true &&
		validar_K()==true && validar_Na()==true && validar_S()==true && validar_Fe()==true && validar_Mn()==true &&validar_Cu()==true &&
		validar_Zn()==true && validar_B()==true && validar_CE()==true  ) {



		var numero_muestra=document.getElementById('numero_muestra').value;
	var laboratorio=document.getElementById("laboratorio").value;
	var lote=document.getElementById('lote').value;

														// AQUI ABAJO ALMACENO LO QUE DIGITEN EN LA TABLA PEQUEÑA
														var clima=document.getElementById('clima').value;
														var profundidad=parseFloat(document.getElementById('profundidad').value);
														var densidad_aparente=parseFloat(document.getElementById('densidad_aparente').value);
														var hectarea=parseFloat(document.getElementById('hectarea').value);
														var fecha=document.getElementById('fecha').value;

														// TABLA GRAMDE
														var PH=parseFloat(document.getElementById('PH').value);
														var MO=parseFloat(document.getElementById('MO').value);
														var P=parseFloat(document.getElementById('P').value);
														var Al=parseFloat(document.getElementById('Al').value);
														var Ca=parseFloat(document.getElementById('Ca').value);
														var Mg=parseFloat(document.getElementById('Mg').value);
														var K=parseFloat(document.getElementById('K').value);
														var Na=parseFloat(document.getElementById('Na').value);
														var CICE=parseFloat(document.getElementById('CICE').value);
														var S=parseFloat(document.getElementById('S').value);
														var Fe=parseFloat(document.getElementById('Fe').value);
														var Mn=parseFloat(document.getElementById('Mn').value);
														var Cu=parseFloat(document.getElementById('Cu').value);
														var Zn=parseFloat(document.getElementById('Zn').value);
														var B=parseFloat(document.getElementById('B').value);
														var porcentaje_Al=parseFloat(document.getElementById('porcentaje_Al').value);
														var porcentaje_Na=parseFloat(document.getElementById('porcentaje_Na').value);

														var CE=parseFloat(document.getElementById('CE').value);




														$("#contenedor").load("guardar_analisis.php",{lote:lote,numero_muestra:numero_muestra, laboratorio:laboratorio, clima:clima,profundidad:profundidad,densidad_aparente:densidad_aparente,hectarea:hectarea,PH:PH, MO:MO, P:P, Al:Al, Ca:Ca, Mg:Mg , K:K, Na:Na, CICE:CICE, S:S, Fe:Fe, Mn:Mn, Cu:Cu, Zn:Zn, B:B, porcentaje_Al:porcentaje_Al, porcentaje_Na:porcentaje_Na, CE:CE,fecha:fecha})

													}else {
														swal("Error","Algunos Campos Estan Vacios o Incorrectos Por Favor Revíselos", "error");

													}



												}

											</script>
											
											<script src="../../js/menu-siffa.js"></script>
											<script src="../../js/ytmenu.js"></script>
										</body>
										</html>
