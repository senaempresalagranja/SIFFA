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
				<li ><a class="dr-icon dr-icon-user" href="#"><?php echo $fila[1] ?></a></li>
				 <li  class="submenu" id="captura_datos"><a id="submenu" class="dr-icon dr-icon-pencil2"    href="#" >Captura de Datos</a>
					<ul class="children"  id="children">
						<li ><a href="../ingresar_informacion/ingresar_finca.php" class="dr-icon dr-icon-file-text">Ingresar Finca</a></li>
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
							<li><a href="#" class="dr-icon  dr-icon-eye-plus">Requerimientos </a></li>
							<li><a href="consultar_analisis.php" class="dr-icon dr-icon-eye-plus">Consultar Analisis</a></li>
              <li><a href="consultar_finca.php" class="dr-icon dr-icon-eye-plus">Consultar Finca </a></li>
							<li><a href="consultar_cultivo.php" class="dr-icon dr-icon-eye-plus">Consultar Cultivo </a></li>
              <li><a href="consultar_laboratorio.php" class="dr-icon dr-icon-eye-plus">Consultar Laboratorio   </a></li>
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
</body>




<div class="container-fluid">
<div class="row">
  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
  <label for="" class="">Selecciona Un cultivo</label>
    <select name="cultivo" class="cultivo form-control" id="cultivo">
      <option value="Selecctiona" >Selecctiona </option>
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

                $query="SELECT * FROM cultivo   WHERE  Idtipo_cultivo='$fila1[0]' ORDER BY NombreCultivo";

                $resource=mysqli_query($conexion,$query);

                while ($fila=mysqli_fetch_row($resource)) {

                  echo "<option value='$fila[0]' >$fila[1]</option>";
                }

                }


                 ?>
    </select>
  </div>

	<div class="col-md-2">
		<input type="button" onclick="graficar()" class="graficar btn btn-danger"  name="" value="Graficar">
		<span class=" icon-stats-bars2 icono_graficar"></span>
	</div>

	<div class="col-md-12">
		<div id="contenedor">

		</div>
	</div>
</div>
<div class="col-md-12">
  <div class="col-md-8">
 <div class="analisis" id="container" style="min-width: 310px; height: 500px; margin: 0 auto"></div>

  </div>

  <div class="col-md-4">

    <table class="table table-bordered table-responsive">

      <tr>
        <td colspan="2" class="text-center danger"><h3 class="help-block">Nutrientes</h3></td>

      </tr>
      <tr>
        <td><h4 class="help-block " >Nombre Nutriente </h3></td>
        <td><h4 class="help-block " >Cantidad Nutriente </h3></td>
      </tr>
       <tr>
        <td>Nitrogeno (N)</td>
        <td><input type="button" id="nutriente_N" value="" class="btn"></td>
      </tr>
      <tr>
        <td>Fosforo (P)</td>
        <td><input type="button" id="nutriente_P" value="" class="btn"></td>
      </tr>
      <tr>
        <td>Potasio (K)</td>
        <td><input type="button" id="nutriente_K" value="" class="btn"></td>
      </tr>
      <tr>
        <td>Calcio (Ca)</td>
        <td><input type="button" id="nutriente_Ca" value="" class="btn"></td>
      </tr>
      <tr>
        <td>Magnesio (Mg)</td>
        <td><input type="button" id="nutriente_Mg" value="" class="btn"></td>
      </tr>
      <tr>
        <td>Azufre (S)</td>
        <td><input type="button" id="nutriente_S" value="" class="btn"></td>
      </tr>
      <tr>
        <td>Zinc (Zn)</td>
        <td><input type="button" id="nutriente_Zn" value="" class="btn"></td>
      </tr>
      <tr>
        <td>Boro (B)</td>
        <td><input type="button" id="nutriente_B" value="" class="btn"></td>
      </tr>
        <tr>
        <td>Cobre (Cu)</td>
        <td><input type="button" id="nutriente_Cu" value="" class="btn"></td>
      </tr>
    </table>
  </div>
</div>


</div>



<script>

$(document).ready(inicio);

function inicio () {


    $('#cultivo').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });


  if (Rol=='Consulta') {


var captura_datos=document.getElementById('captura_datos').style.display='none';

var configuraciones=document.getElementById('configuraciones').style.display='none';


var copia_seguridad=document.getElementById('copia_seguridad').style.display='none';





};





}





  




function graficar() {

var cultivo=document.getElementById('cultivo').value;
$("#contenedor").load("graficar.php", {cultivo:cultivo})


  }

  $(document).ready(function(){
    $(document).bind("contextmenu", function(e){
        return false;
    });
});
</script>




<style>

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

	.graficar{

		position: relative;
		display: block;
		padding-right:30px;
top: 20px;
	}

	.icono_graficar{

		position: relative;
		display: block;
		left: 70px;
		bottom: 5px;
		color: white;
	}

</style>
</html>
	<script src="../../js/ytmenu.js"></script>
	<script src="../../js/menu-siffa.js"></script>
            <script src="../../js/highcharts.js"></script>
        <script src="../../js/highcharts-3d.js"></script>
                  <script src="../../js/modules/exporting.js"></script>
