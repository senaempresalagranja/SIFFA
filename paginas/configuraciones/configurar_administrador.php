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
  <title>CONFIGURACIONES</title>
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
            <li id="copia_seguridad"><a class="dr-icon   dr-icon-cloud" href="../backup_base_datos/index.php">Copia de Seguridad</a></li>
            <li><a class="dr-icon   icon-cog" href="configurar.php">Configuraciones</a></li>
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
  
  <div class="col-md-12 head">
    <h1 class="icon icon-user text-center"> ADMINISTRADOR</h1>
  </div>

<div class="row">
<br>

<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">


        <div class="form-group">
          <label for="">Rol</label>
          <div id="elemento_usuario">
            <input type="button" name="usuario"  class="form-control btn  filestyle"  id="usuario">
            <span class=""></span>
          </div>

        </div>
      </div>



 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">


        <div class="form-group">
          <label for="dirreccion">Contraseña Actual</label>
          <div id="elemento_contraseña_actual">
            <input type="password" placeholder="Contraseña" name="contraseña_actual"  class="form-control filestyle"  id="contraseña_actual">
            <span class=""></span>
          </div>

        </div>
      </div>
 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">


        <div class="form-group">
          <label for="dirreccion">Contraseña Nueva</label>
          <div id="elemento_contraseña_nueva">
            <input type="password" name="contraseña_nueva"  class="form-control filestyle"  id="contraseña_nueva">
            <span class=""></span>
          </div>

        </div>
      </div>

 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">


        <div class="form-group">
          <label for="dirreccion">Repita Contraseña</label>
          <div id="elemento_repita_contraseña">
            <input type="password" name="repita_contraseña"  class="form-control filestyle"  id="repita_contraseña">
            <span class=""></span>
          </div>

        </div>
      </div>
<div class="col-md-1">

<a href="#" class="consultar actualizar" id="Actualizar" onclick="actualizar()" title="Actualizar Administrador" ><h1 class="icon actualizar    icon-redo"></h1></a>

</div>


</div>

<div class="col-md-12" id="contenedor">
  


</div>
</div>


<?php 

$hot='localhost';
$usuario='root';
$contra='';
$base='siffa';

$conexion=mysqli_connect($hot,$usuario,$contra,$base);
$query="SELECT * FROM usuario  WHERE Rol='Administrador'";

$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);

echo "<script>

var Usuario=document.getElementById('usuario').value='$fila[2]';
var contraseña_actual=document.getElementById('contraseña_actual').value='';
var contraseña_nueva=document.getElementById('contraseña_nueva').value='';
var repita_contraseña=document.getElementById('repita_contraseña').value='';


</script>";
 ?>


</body>

<script>
$(document).ready(function(){
    $(document).bind("contextmenu", function(e){
        return false;
    });
});

$(document).ready(inicio);

function contraseña_igual() {


var contraseña_nueva=document.getElementById('contraseña_nueva').value;
var repita_contraseña=document.getElementById('repita_contraseña').value;


if (contraseña_nueva==repita_contraseña) {

return true;


}else{


return false;


}



}


function actualizar() {
if (validar_contraseña_actual()==true && validar_contraseña_nueva()==true && validar_repita_contraseña()==true) {


if (contraseña_igual()==true) { 


var Usuario=document.getElementById('usuario').value;
var contraseña_actual=document.getElementById('contraseña_actual').value;
var contraseña_nueva=document.getElementById('contraseña_nueva').value;
$('#contenedor').load('actualizar_contrasena.php',{Usuario:Usuario,contraseña_actual:contraseña_actual,contraseña_nueva:contraseña_nueva});



}else{

swal("ERROR","Contraseñas Diferentes","error");
var contraseña_nueva=document.getElementById('contraseña_nueva').value='';
var repita_contraseña=document.getElementById('repita_contraseña').value='';


}


}else{
  swal("ERROR","Algunos Campos Estan Vacios o Incorrectos Porfavor Reviselos","error");


}
}
  

function inicio() {



$('#usuario').keyup(validar_usuario);
$("#contraseña_actual").keyup(validar_contraseña_actual);
$("#contraseña_nueva").keyup(validar_contraseña_nueva);
$("#repita_contraseña").keyup(validar_repita_contraseña);
$(document).keyup(contraseña_igual);
}


function validar_usuario () {
      var usuario=document.getElementById('usuario').value;
      if(usuario==null  || usuario.length==0 || /[\\^"'<>;ç`,-_ª%&¿¨Ç¡º#~¬€$.*+?=!:|\\/()\[\]{}]/.test(usuario)){
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_usuario").attr("class", "form-group has-error  has-feedback");
        $("#usuario").parent().children("span").text("").show();
        $("#usuario").parent().append('<span id="icono_texto" class="icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else if (isNaN(usuario)==false) {
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_usuario").attr("class", "form-group has-error has-feedback");
        $("#usuario").parent().children("span").text("").show();
        $("#usuario").parent().append('<span id="icono_texto" class="icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else if (usuario.length>30) {
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_usuario").attr("class", "form-group has-error has-feedback");
        $("#usuario").parent().children("span").text("").show();
        $("#usuario").parent().append('<span id="icono_texto" class=" icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else{


        $("#usuario").parent().children("span").text("").show();
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_usuario").attr("class", "form-group has-success has-feedback");
        $("#usuario").parent().append('<span id="icono_texto" class=" icon  icon-checkmark form-control-feedback"></span>');

        return true;
      }

}



    

 function validar_contraseña_actual () {
      var contraseña_actual=document.getElementById('contraseña_actual').value;
      if(contraseña_actual==null  || contraseña_actual.length==0 || /^\s+$/.test(contraseña_actual)){
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_contraseña_actual").attr("class", "form-group has-error  has-feedback");
        $("#contraseña_actual").parent().children("span").text("").show();
        $("#contraseña_actual").parent().append('<span id="icono_texto" class="icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else if (contraseña_actual.length>70) {
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_contraseña_actual").attr("class", "form-group has-error has-feedback");
        $("#contraseña_actual").parent().children("span").text("").show();
        $("#contraseña_actual").parent().append('<span id="icono_texto" class=" icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else{


        $("#email").parent().children("span").text("").show();
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_contraseña_actual").attr("class", "form-group has-success has-feedback");
        $("#contraseña_actual").parent().append('<span id="icono_texto" class=" icon  icon-checkmark form-control-feedback"></span>');

        return true;
      }

}


 function validar_contraseña_nueva () {
      var contraseña_nueva=document.getElementById('contraseña_nueva').value;
      if(contraseña_nueva==null  || contraseña_nueva.length==0 || /^\s+$/.test(contraseña_nueva)){
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_contraseña_nueva").attr("class", "form-group has-error  has-feedback");
        $("#contraseña_nueva").parent().children("span").text("").show();
        $("#contraseña_nueva").parent().append('<span id="icono_texto" class="icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else if (contraseña_nueva.length>70) {
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_contraseña_nueva").attr("class", "form-group has-error has-feedback");
        $("#contraseña_nueva").parent().children("span").text("").show();
        $("#contraseña_nueva").parent().append('<span id="icono_texto" class=" icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else{


        $("#contraseña_nueva").parent().children("span").text("").show();
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_contraseña_nueva").attr("class", "form-group has-success has-feedback");
        $("#contraseña_nueva").parent().append('<span id="icono_texto" class=" icon  icon-checkmark form-control-feedback"></span>');

        return true;
      }

}



function validar_repita_contraseña () {
      var repita_contraseña=document.getElementById('repita_contraseña').value;
      if(repita_contraseña==null  || repita_contraseña.length==0 || /^\s+$/.test(repita_contraseña)){
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_repita_contraseña").attr("class", "form-group has-error  has-feedback");
        $("#repita_contraseña").parent().children("span").text("").show();
        $("#repita_contraseña").parent().append('<span id="icono_texto" class="icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else if (repita_contraseña.length>70) {
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_repita_contraseña").attr("class", "form-group has-error has-feedback");
        $("#repita_contraseña").parent().children("span").text("").show();
        $("#repita_contraseña").parent().append('<span id="icono_texto" class=" icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else{


        $("#repita_contraseña").parent().children("span").text("").show();
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_repita_contraseña").attr("class", "form-group has-success has-feedback");
        $("#repita_contraseña").parent().append('<span id="icono_texto" class=" icon  icon-checkmark form-control-feedback"></span>');

        return true;
      }

}




</script>
<style>




.head{
  border-bottom: solid black 1px;
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


    position: absolute;
    top: 440px;
    left: 200px;
  }


.actualizar{
  color: green;
}

.actualizar:hover{

  color: green;
  text-decoration: none;
}
  

</style>




       
  <script src="../../js/ytmenu.js"></script>
  <script src="../../js/menu-siffa.js"></script>
  </html>
