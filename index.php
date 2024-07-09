<!DOCTYPE html>
<html lang="en">
<head>
<head>
<script>
  // var stateObj =window.location;

// window.history.pushState(null , '', ".html");

window.history.replaceState( {} , '', '' );
window.location = "#JERR";
</script>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>SIFFA</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/menu_siffa.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/alert.css">
	<link rel="stylesheet" href="css/fileinput.css">
	<link rel="stylesheet" href="css/alert2.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap-select.css">
  <link rel="stylesheet" type="text/css" href="css/anuncios.css" />
	<script src="js/alert.js"></script>
	<script src="js/jquery.js" charset="utf-8"></script>
	<script src="js/bootstrap.min.js" charset="utf-8"></script>
	<script src="js/bootstrap.js" charset="utf-8"></script>
	<script src="js/alert.js" charset="utf-8"></script>
	<script src="js/alert2.js" charset="utf-8"></script>
	<script src="js/bootstrap-select.js"></script>
	<script src="js/fileinput.js"></script>
		<!-- <script src="js/cambiar_url.js"></script> -->
	<link href="img/logosolo1.png" rel="icon" >
	<meta charset="UTF-8">
</head>
</head>
<body>

<div class="col-xs-12 col-md-12 col-lg-12 header">

</div>

<div class="col-xs-12 col-md-12 col-lg-12">
  <div class=" col-xs-7 col-xm-7 col-sm-7 col-md-5 col-lg-3 titulo1"></div>



  <div class="col-xs-1 col-md-2 col-lg-2 titulo">
     <div class="titulo">
  <img src="img/logosolo.png" alt="">
<h1 class="help-block">SIFFA</h1>
</div> 

  </div>

<div class="col-xs-12 col-md-12 col-lg-12 menu">
<div class="col-xs-12 col-sm-7 col-md-6 col-lg-4">
	<!-- AQUI ABAJO ES LO DE MENU -->
 <div class="side">
    <nav class="dr-menu">
      <div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label"></a></div>
      <ul>
        <li><a class="dr-icon dr-icon-users" onclick="quienes_somos()" href="#">Quienes Somos</a></li>
        <!-- <li  class=""><a id="submenu" class="dr-icon dr-icon-pencil2"    href="#" >Contratenos</a></li> -->
        <li><a class="dr-icon  dr-icon-book" onclick="reseña_historica()" href="#">Reseña Historica</a>
        </li>

        <li><a class="dr-icon  dr-icon-book" onclick="asesores_colaboradores()" href="#">Instructores Asesores</a>
        </li>

        <li><a class="dr-icon icon-blogger" id="" href="http://siifasof.blogspot.com.co/">Blog SIFFA</a></li>
		<li> <a href="#" class="icon-user" onclick="mostrar_inicio()"> Iniciar Sesion</a></li>

      </ul>
    </nav>
  </div>
		</div>

	</div>




</div>

<div class="row">
	<img class=" imagen img img-responsive " src="img/header.png" alt="">

	<div class="col-xs-0 col-sm-3 col-md-4 col-lg-5"></div>
		<div class="col-xs-12 col-sm-9 col-md-8 col-lg-7">
		<br>
	<br><br>
	<br>
	<br>
	<br>
	
	  <h1 class="texto_imagen icon  icon-coin-dollar"> Mejora La Produccion de tus Cultivos</h1>
	  </div>
</div>

<div class="container-fluid">

<div class="row"><div class="col-md-12"><br> <br><br><br><h1 class="text-center">¿  PORQUE ELEGIRNOS ?</h1></div></div>

<div class="row">

  <ul class="ca-menu">
  
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
    <li>
      <a href="#">
        <span class="ca-icon"></span>
        <div class="ca-content">
          <h2 class="ca-main">Ahorra Dinero</h2>
          <h3 class="ca-sub">Nuevos niveles de ahorro y beneficios en todo tipo de cultivos</h3>
        </div>
      </a>
    </li>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
    <li>
      <a href="#">
        <span class="ca-icon"></span>
        <div class="ca-content">
          <h2 class="ca-main">Ayude al Medio Ambiente</h2>
          <h3 class="ca-sub">Evita la contaminación del suelo  y trabaja con estándares modernos</h3>
        </div>
      </a>
    </li>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
    <li>
      <a href="#">
        <span class="ca-icon"></span>
        <div class="ca-content">
          <h2 class="ca-main">Plan Nutricional en Segundos</h2>
          <h3 class="ca-sub">Recommienda planes de fertilización en minutos para todos los cultivos</h3>
        </div>
      </a>
    </li>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
    <li>
      <a href="#">
        <span class="ca-icon"></span>
        <div class="ca-content">
          <h2 class="ca-main">Optimiza costos de Fertilizantes</h2>
          <h3 class="ca-sub">Optimiza el uso de fertilizantes y ahorra hasta un 50% en los costos de fertilizantes</h3>
        </div>
      </a>
    </li>
</div>

  </ul>
</div>
</div>

</div>












 <div class="modal fade" id="consultar" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h1 class="modal-title icon  icon-pen">  RESEÑA HISTORICA</h1>

      </div>
      <div class="modal-body">
        <div class="row">
<div class="col-md-12">
  <div style=" overflow-y: auto; height: 30em;">
  <h1 style="text-align: center;">SIFFA</h1>
  <h3 style="text-align: center;">Sistema de Información para la Formulación de Fertilizantes a Cultivos Agrícolas</h3>
<p class="text-justify">En el año 2011, El Ingeniero Agrónomo Javier Calderón González, instructor del Centro Agropecuario La Granja del área Agrícola, SENA Regional Tolima, propuso a los instructores del área de Informática del centro, desarrollar una aplicación que permite diagnosticar el estado del suelo mediante los análisis previos de laboratorio y genere un plan nutricional para diferentes cultivos agrícolas que sirva como una herramienta tecnológica de apoyo en la asistencia a cultivos e insumo importante  para la toma de decisiones por parte del ingeniero agrónomo. Inicialmente este proyecto lo habían desarrollado en visual y posteriormente el instructor Calderón lo llevo al formato Excel.</p>

<p class="text-justify">Surge entonces la necesidad de mejorar esta aplicación y volverla más dinámica. Se acuerda desarrollarse una plataforma Web en este caso en .Net, para tal efecto y de acuerdo a la metodología del SENA de formación por proyectos, se conforma un equipo de trabajo con Aprendices del programa de formación Tecnólogo en Análisis y Desarrollo de Sistemas de Información – ADSI identificado con la Ficha No. 229231 y se da inició al proceso de desarrollo del Sistema de Información con el acompañamiento del Instructor Javier Calderón González como asistente técnico Agrícola y gestor del proyecto, con la asistencia técnica de los instructores del área de Informática del centro: Daniel Cárdenas Lozano, Ingeniero de Sistemas, Myriam Yaneth González Reyes, Ingeniera de Sistemas y Rafael Rico Rodríguez, Ingeniero de Sistemas.</p>

<p class="text-justify">El grupo de Aprendices de ADSI que asumió el proyecto fueron: Diego Fernando Acosta Bernal, Oscar Eduardo del Rio Torres, Lorena Perdomo Hernández, Lina Daniela Varón Castañeda y Mónica Lizeth Alape Rodríguez, asignados al proyecto nombran la aplicación como SIFFA (Sistema de Información para la Formulación de Fertilizantes de Cultivos Agrícolas). Lamentablemente este grupo de desarrolladores hicieron una entrega parcial y no lograron culminar a satisfacción el Sistema de Información. </p>

<p class="text-justify">Por el grado de importancia que tiene esta solución informática para el área agrícola del centro, se decide retomar nuevamente este proyecto en el año 2016 y es asignado a los Aprendices: Joaquín Stiven Reyes Roa, María Fernanda Benítez Rubio, Diana Marcela Sánchez Sánchez y Angi Carolina Valencia Vásquez del programa de formación Tecnólogo en Análisis y Desarrollo de Sistemas de Información – ADSI con la Ficha No. 1096123.</p>

<p class="text-justify">De acuerdo a las tendencias tecnológicas, el uso de Software Libre ha venido tomando importancia y generando alternativas de soluciones mucho más económicas, seguras, con soporte técnico, portabilidad y muchas otras, por tal motivo se decide desarrollar el Sistema de Información en este tipo de plataformas de uso libre como fue el caso de Xampp V. 3.2.2.</p>

<p class="text-justify">Se decide dejar el mismo nombre de la aplicación como se dio inicialmente, con una variación mínima en su descripción quedando de esta manera: SIFFA 2.0 (Sistema de Información para la Formulación de Fertilizantes a Cultivos Agrícolas).</p>


</div>

</div> 
</div>
      </div>
           <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
           </div>
   </div>
</div>

</div>


<div class="modal fade" id="asesores_colaboradores" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h1 class="modal-title icon  icon-pen">  Instructores Asesores</h1>

      </div>
      <div class="modal-body">
        <div class="row">

<div class="col-md-12">
<div style=" overflow-y: auto; height: 30em;">
  <h3 style="text-align: center;">Ingenieros Agronomos</h3>
<table class="table table-bordered">
     <thead>
        <tr>
            <th>Nombre</th>
            <th>Titulo</th>
            <th>Universidad</th>
            <th>Especializacion/Maestria</th>
            <th>Universidad</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Javier Calderon Gonzalez      </td>
            <td>I.A MSo. Ciencias Agrarias</td>
            <td>Universidad Nacional</td>
            <td>Maestria en Ciencias Agrarias con enfacis en suelos y aguas</td>
            <td>Universidad del Tolima</td>

        </tr>
        <tr>
            <td>German Duque </td>
            <td>ingeniero Agrónomo</td>
            <td>Valencia España</td>
            <td>citricultura</td>
            <td>convenio aso cítricos  universidad de valencia España 
</td>
        </tr>
        


    </tbody>
</table>

<h3 style="text-align: center;">Ingenieros De Sistemas</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Titulo</th>
            <th>Universidad</th>
            <th>Especializacion/Maestria</th>
            <th>Universidad</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Daniel Cardenas Lozano</td>
            <td>Ingeniero De Sistemas</td>
            <td>Antonio Nariño</td>
            <td>Auditoria De Sietamas</td>
            <td>Antonio Nariño</td>

        </tr>
        <tr>
            <td>Myriam Yaneth González Reyes </td>
            <td>Ingeniera De Sistemas</td>
            <td>Piloto De Colombia</td>
            <td>Ingenieria De Software</td>
            <td>Antonio Nariño</td>
        </tr>
        <tr>
            <td>Rafael Rico Rodriguez </td>
            <td>Ingeniero De Sistemas</td>
            <td>Univercidad Incca de Colombia</td>
            <td>Especializaion de Proyectos Agropecuarios</td>
            <td>Sena - Centro Agropecuario La Granja</td>
        </tr>


    </tbody>
</table>


<h3 style="text-align: center;">Aprendizes Desarrolladores</h3>
<h4 style="text-align: center;">SIFFA</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Tecnologo</th>
            <th>Ficha</th>
            <th>Año</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            
            <td>Oscar Eduardo Del Rio Torres</td>
            <td>Tecnologo En Analisis y Desarrollo De Sistemas De Informacion</td>
            <td>229231</td>
            <td>2011</td>

        </tr>
        <tr>
            <td>Lorena Perdomo Hernandez</td>
            <td>Tecnologo En Analisis y Desarrollo De Sistemas De Informacion</td>
            <td>229231</td>
            <td>2011</td>
        </tr>
        <tr>
            <td>Diego Fernando Acosta Bernal</td>
            <td>Tecnologo En Analisis y Desarrollo De Sistemas De Informacion</td>
            <td>229231</td>
            <td>2011</td>
        </tr>
         <tr>
            <td>Lina Daniela Varon Castañeda</td>
            <td>Tecnologo En Analisis y Desarrollo De Sistemas De Informacion</td>
            <td>229231</td>
            <td>2011</td>
        </tr>
        <tr>
            <td>Monica Lizeth Alape Rodriguez</td>
            <td>Tecnologo En Analisis y Desarrollo De Sistemas De Informacion</td>
            <td>229231</td>
            <td>2011</td>
        </tr>


    </tbody>
</table>

<h3 style="text-align: center;">Aprendizes Desarrolladores</h3>
<h4 style="text-align: center;">SIFFA 2.0</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Tecnologo</th>
            <th>Ficha</th>
            <th>Año</th>

        </tr>
    </thead>
    <tbody>
        
<tr>
            
            <td>Joaquin Stiven Reyes Roa</td>
            <td>Tecnologo En Analisis y Desarrollo De Sistemas De Informacion</td>
            <td>1096123</td>
            <td>2016</td>

        </tr>
        <tr>
            <td>Maria Fernanda Benitez Rubio</td>
            <td>Tecnologo En Analisis y Desarrollo De Sistemas De Informacion</td>
            <td>1096123</td>
            <td>2016</td>
        </tr>
        <tr>
            <td>Diana Marcela Sanchez Sanchez</td>
            <td>Tecnologo En Analisis y Desarrollo De Sistemas De Informacion</td>
            <td>1096123</td>
            <td>2016</td>
        </tr>
         <tr>
            <td>Angi Carolina Valencia Vasquez</td>
            <td>Tecnologo En Analisis y Desarrollo De Sistemas De Informacion</td>
            <td>1096123</td>
            <td>2016</td>
        </tr>
        

    </tbody>
</table>

</div>
</div>
</div>  

  
      </div>
           <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
           </div>
   </div>
</div>

</div>



<div class="modal fade" id="quienes_somos" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h1 class="modal-title icon  icon-profile">  QUIENES SOMOS</h1>

      </div>
      <div class="modal-body">
<div class="col-md-12">
<p class="text-justify">Somos un grupo de Aprendices desarrolladores de software; ADSI-1096123 del Centro Agropecuario “La Granja”, Sena Regional Tolima, nos centramos en desarrollar de un sistemas de información  llamado SIFFA2.0 (Sistema De Información para la Formulación y Fertilización a Cultivos Agrícolas) nos ubicamos en cubrir varias necesidades respeto a los requerimientos adquiridos, el objetivo es brindar soluciones debidas para satisfacer al cliente y usuario </p>
</div>  
      </div>
           <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
           </div>
   </div>
</div>
</div>


<div class="modal fade" id="sesion" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
       <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h1 class="modal-title icon  icon-user text-center">  INICIO SESION</h1>

      </div>
      <div class="modal-body">
<div class="row">

<form class="" action="sesion.php" method="post" id="formualrio">



    <article  class="col-xs-6 col-md-6 col-lg-6" id="usuario">
    <input required type="text"  class=" form-control" placeholder="Usuario" step="any" name="usuario1" id="usuario1" class="form-control ">
    <span id=" " class="icono-login icon-user form-control-feedback"></span>
    </article>

    <article  class="col-xs-6 col-md-6 col-lg-6" id=""><input required type="password" class=" form-control" placeholder="Contraseña" step="any" name="contraseña1" id="contraseña1" class="form-control "><span id="" class="icono-contra icon-key2 form-control-feedback"></span>

    </article>
    <br>
    <br>
    <br>
    
<div id="container"></div>

  
</form>
</div>  
      </div>
           <div class="modal-footer">
<input type="button" value="Entrar" data-anim="la-anim-1" onclick="login()" class="btn btn-primary ">
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
           </div>
   </div>
</div>
</div>


<script>
  
  function reseña_historica() {
  $("#consultar").modal("show");
}

  function quienes_somos() {
  $("#quienes_somos").modal("show");
}

function asesores_colaboradores() {
  $("#asesores_colaboradores").modal("show");
}

function mostrar_inicio() {
	 $("#sesion").modal("show");
}

  function login() {
      var usuario=document.getElementById('usuario1').value;
      var contraseña=document.getElementById('contraseña1').value;
      $("#container").load("login.php",{usuario:usuario, contraseña:contraseña})



    }
    $(document).ready(function(){
    $(document).bind("contextmenu", function(e){
        return false;
    });
});

</script>



<style>


  .texto_imagen{


padding: 20px;
    background: #f3f3f3;
    opacity: 0.7;
  }


.imagen{

    position: absolute;
width: 100%;
height: 67%;	
z-index: 0;
    top: 70px;
    left: 0px

  }


.titulo img{

z-index: 12;
	position: relative;display: block;
top: 46px;
left: 45px;
}
.titulo h1{
	z-index: 12;
position: relative;
color: white;
left: 25px;
top: 40px;
}

		.titulo{
			z-index: 12;
			width: 150px;
			  height: 180px;

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
   

  }

  .ca-menu{
left:0;

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

@media screen and (max-width:389px)  {
 .titulo img{

z-index: 12;
	position: relative;display: block;
top: 40px;
left: 9px;

}
.titulo h1{
	z-index: 12;
	font-size: 30px;
position: relative;
color: white;
left: -10px;
top: 40px;

}

		.titulo{
			z-index: 12;
			width: 75px;
			  height: 180px;

			  background: #A5DF00;

		}

.menu{

	z-index: 200;
}

}

</style>

<!-- AQUI ABAJO ES LO DE LAS BOLAS CON LETRAS -->




<!--      EL ICONO A ES EL CLIP DE ADJUNTADO
EL ICONO B ES SEÑAL DE WIFI
EL C ES UNA NUBE
EL D SON DOS VENTANAS
EL E ES UNA LETRA E
EL F ES UNA CARPETA
EL G ES UNA LETRA G
EL H ES <> EN SIMBOLO
EL I ES UNA IMAGEN COMO JPG PERO EL ICONO
EL J UNA FLECHA ARRIBA Y ABAJO
EL K ES UNA CADENA
EL L ES UNA LUPA
EL M ES UNA CINTA DE VIDEO
EL N ES UN CORAZON
LA Ñ ES UNA Ñ
EL O ES UN CORAZON PERO SIN RELLENO
EL P ES UN RELOJ
EL Q ES UN MUÑECO DE AHORACDO

EL R ES UNA ESTRELLA
EL S ES UNA POLEA
EL T ES UNA A
EL U ES UNA IMAGEN DE USURAIO PODRIA SER LO DEL USUARIO
LA V ES UNA V
la a es una hoja como copiar en whatsapp
el b es una hoja pero horizontal
el c es un mensaje
el d es una mensaje pero circular
el e es el mismo mensaje pero otro formato
el f es el simbolo fe facebook
el g es el simblo de google mas
el h es una flecha hacia la izquierda
el i es una flecha con doble punta hacia la izquierda
el j es una flehca derecha
la r es una señal de wifi
el q es una ista enumerada
el p es una lista con puntos
el w es una candado cerrado
el x es una candado abierto
el y es el simbolo de youtube


-->

</body>

</script>
	<script src="js/ytmenu.js"></script>
	<script src="js/menu-siffa.js"></script>

</html>
