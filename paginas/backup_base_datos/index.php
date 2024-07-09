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
		include './Connet.php';
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
          <li><a class="dr-icon dr-icon-eye" id="submenu1" href="#">Consultas</a>
            <ul class="children"  id="children1">
              <li><a href="../consultas/consultar_requerimiento.php" class="dr-icon  dr-icon-eye-plus">Requerimientos </a></li>
              <li><a href="../consultas/consultar_analisis.php" class="dr-icon dr-icon-eye-plus">Consultar Analisis</a></li>
              <li><a href="../consultas/consultar_cultivo.php" class="dr-icon dr-icon-eye-plus">Consultar Cultivo </a></li>
              <li><a href="../consultas/consultar_finca.php" class="dr-icon dr-icon-eye-plus">Consultar Finca </a></li>
              <li><a href="../consultas/consultar_lote_cultivo.php" class="dr-icon dr-icon-eye-plus">Consultar Lotecultivo </a></li>
              <li><a href="../consultas/consultar_laboratorio.php" class="dr-icon dr-icon-eye-plus">Consultar Laboratorio  </a></li>
              <li><a href="../consultas/consultar_fetilizante.php" class="dr-icon dr-icon-eye-plus">Consultar Fertilizante</a></li>


            </ul></li>
            <li><a class="dr-icon dr-icon-settings" href="../ayuda_online/index.php">Ayuda</a></li>
            <li id="copia_seguridad"><a class="dr-icon   dr-icon-cloud" href="#">Copia de Seguridad</a></li>
            <li id='configuraciones'><a class="dr-icon   icon-cog" href="../configuraciones/configurar.php">Configuraciones</a></li>
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

<div class="container">
	
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<h2 class=" icon icon-database text-center titulo1"> COPIA DE SEGURIDAD BASE DE DATOS SIFFA</h2><h1 ><a href="#" class=" icon-cloud-download icono_backup text-center" onclick="backup()" title='Realizar Backup'></a> </h1>
</div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="contenedor">
    
    
  </div>
<div class="row">
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
			
		




	</div>

</div>
<div class="row">
  

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<br>
<h2 class=" icon icon-database text-center titulo1">  RESTAURAR BACKUP</h2>

</div>
	
</div>


<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		
<h3 class="icon icon-history">  Selecciona Punto de Restauracion</h3>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="contenedor2">
		<h3 class="icon   icon-spinner6" id="espere">  Por favor Espere Restaurando Backup</h3>


	</div>
</div>

<div class="row">
	<div class="col-md-4col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<select name="restaurar" id="restaurar" class="form-control">
			<option value="Selecciona" >Selecciona</option>
			<?php
				$ruta=BACKUP_PATH;
				if(is_dir($ruta)){
				    if($aux=opendir($ruta)){
				        while(($archivo = readdir($aux)) !== false){
				            if($archivo!="."&&$archivo!=".."){
				                $nombrearchivo=str_replace(".sql", "", $archivo);
				                $nombrearchivo=str_replace("-", ":", $nombrearchivo);
				                $ruta_completa=$ruta.$archivo;
				                if(is_dir($ruta_completa)){
				                }else{
				                    echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
				                }
				            }
				        }
				        closedir($aux);
				    }
				}else{
				    echo $ruta." No es ruta válida";
				}
			?>
		</select>
	</div>
	<div class="col-md-2">
		<h2 title='Restaurar Base de datos'><a href="#" onclick="restaurar()" class="icon-cloud-upload icono_backup  restaurar"></a></h2>
		
	</div>


</div>
	


	


	</div>
</body>

<script>






var espere=document.getElementById('espere').style.display='none';
	
function restaurar() {

		var restaurar=document.getElementById('restaurar').value;
	if (restaurar=="Selecciona") {
swal("ERROR", "Selecciona Un Punto de Restauracion", "error")


	}else{
var restaurar=document.getElementById('restaurar').value;
var espere=document.getElementById('espere').style.display='block';
$("#contenedor2").load("Restore.php",{restaurar:restaurar});
		
	}




}

function backup(){


$("#contenedor").load('Backup.php');
}

</script>
<style>
.restaurar{

	position: relative;
	top: -11px;
}


.icono_backup{

color: brown;
}

.icono_backup:hover{

	text-decoration: none;
	color: brown;
}


.titulo1{

border-bottom: 1px solid black;
color: #000;
}


.grupo{
  display: block;
  position: relative;
  left: 550px;
  bottom: 280px;
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


    position: relative;
    top: 440px;
    left: 200px;
  }


.boton{

    position: relative;
    display: block;
    width: 50px;
    height: 50px;
    top-height:0;
    bottom-height:0;
    left: 90%;
    top: 3px;
}

  .caja{

    position: relative;
    display: block;
    width: 100%;
    height: 320px;
  }

  .cultivo{

    position: relative;
    display: block;
    width: 100px;

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

#pdf_boton{
  position: relative;
  display: block;
height: 45px;
z-index: 4;
top: -50px;
opacity: 0;
}

</style>

       <script>
         $(document).ready(function(){
    $(document).bind("contextmenu", function(e){
        return false;
    });
});

         
       </script>
  <script src="../../js/ytmenu.js"></script>
  <script src="../../js/menu-siffa.js"></script>
</html>