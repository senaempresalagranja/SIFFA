
<?php 


$cultivo_select=$_POST["cultivo_select"];
$fertilizante_compuesto=$_POST["fertilizante_compuesto"];
$Id_fertilizante=$_POST["Id_fertilizante"];

// AQUI ABAJO ESTOY PASANDO VARIABLES DE PHP A JAVASCRIPT PARA PODER MANIPURARLAS Y COMPRARALAS AQUI ABAJO ES CON LA TABLA PH LOS PARAMETROS DE  PH 
$connection1=mysqli_connect("localhost","root","","siffa");

// AQUI ABAJO ES PARA OBTENER EL PORCENTAJE EL FERTILIZANTE SELECCIONADO POR EL USUARIO

$query="SELECT * FROM `fertilizantes` WHERE Idfertilizante=$Id_fertilizante";
$resource=mysqli_query($connection1,$query);
$porcentaje_fertilizante=mysqli_fetch_row($resource);


  if ($porcentaje_fertilizante[2]>=0) {
$valor_fertilizante_N=$porcentaje_fertilizante[2];
$kg_N=(1*$valor_fertilizante_N)/100;


// $cantidad_aplicar_N=(1*$diferencia_N)/$kg_N;
// $cantidad_aplicar=(1*$cantidad_aplicar_N)/50;
}else{
$kg_N=0;

};


if ($porcentaje_fertilizante[3]>=0) {
  $valor_fertilizante_P=$porcentaje_fertilizante[3];
$kg_P=(1*$valor_fertilizante_P)/100;
// $cantidad_aplicar_P=(1*$diferencia_P)/$kg_P;

// $cantidad_aplicar=(1*$cantidad_aplicar_P)/50;
}else{

  $kg_P=0;
}


if ($porcentaje_fertilizante[4]>=0) {
  $valor_fertilizante_K=$porcentaje_fertilizante[4];
$kg_K=(1*$valor_fertilizante_K)/100;
// $cantidad_aplicar_K=(1*$diferencia_K)/$kg_K;

// $cantidad_aplicar=(1*$cantidad_aplicar_K)/50;
}else{

  $kg_K=0;
}


if ($porcentaje_fertilizante[5]>=0) {
  $valor_fertilizante_Ca=$porcentaje_fertilizante[5];
$kg_Ca=(1*$valor_fertilizante_Ca)/100;
// $cantidad_aplicar_Ca=(1*$diferencia_Ca)/$kg_Ca;

// $cantidad_aplicar=(1*$cantidad_aplicar_Ca)/50;
}else{

  $kg_Ca=0;
}


if ($porcentaje_fertilizante[6]>=0) {
  $valor_fertilizante_Mg=$porcentaje_fertilizante[6];
$kg_Mg=(1*$valor_fertilizante_Mg)/100;
// $cantidad_aplicar_Mg=(1*$diferencia_Mg)/$kg_Mg;

// $cantidad_aplicar=(1*$cantidad_aplicar_Mg)/50;
}else{
$kg_Mg=0;

}


if ($porcentaje_fertilizante[7]>=0) {
  $valor_fertilizante_S=$porcentaje_fertilizante[7];
$kg_S=(1*$valor_fertilizante_S)/100;
// $cantidad_aplicar_S=(1*$diferencia_S)/$kg_S;

// $cantidad_aplicar=(1*$cantidad_aplicar_S)/50;
}else{
$kg_S=0;

}


if ($porcentaje_fertilizante[8]>=0) {
  $valor_fertilizante_Zn=$porcentaje_fertilizante[8];
$kg_Zn=(1*$valor_fertilizante_Zn)/100;
// $cantidad_aplicar_Zn=(1*$diferencia_Zn)/$kg_Zn;

// $cantidad_aplicar=(1*$cantidad_aplicar_Zn)/50;
}else{
$kg_Zn=0;

}



if ($porcentaje_fertilizante[9]>=0) {
  $valor_fertilizante_B=$porcentaje_fertilizante[9];
$kg_B=(1*$valor_fertilizante_B)/100;
// $cantidad_aplicar_B=(1*$diferencia_B)/$kg_B;

// $cantidad_aplicar=(1*$cantidad_aplicar_B)/50;
}else{

$kg_B=0;

}

// AQUI ABAJO ESTOY HACEIDNO UN ARCHIVO DE TEXTO PARA QUE ME ACUMULES LOS fertilizantes








// AQUI ABAJO PASO LAS VARIABLES DE PHP A JAVASCRIPT PARA GRAFICARLO CLARO YA HICE LAS CONDICIONALES NECESARIOS

echo "<script>

var Id_fertilizante='$Id_fertilizante';
var kg_N=$kg_N;
var kg_P=$kg_P;
var kg_K=$kg_K;
var kg_Ca=$kg_Ca;
var kg_Mg=$kg_Mg;
var kg_S=$kg_S;
var kg_Zn=$kg_Zn;
var kg_B=$kg_B;

</script>";



$sql1 = "SELECT * FROM  ph ";
$result1 = mysqli_query($connection1,$sql1);
$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">
var fertilizante_compuesto=parseFloat("'.$fertilizante_compuesto.'");
var ultra_acido_calificacion="'.$registros1[1].'";
var ultra_acido_numero_alto="'.$registros1[3].'";



</script>';


$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

var Extramadamente_acido_calificacion="'.$registros1[1].'";
var Extramadamente_acido_numero_bajo="'.$registros1[2].'";
var Extramadamente_acido_numero_alto="'.$registros1[3].'";



</script>';


$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

var muy_fuertemente_acido_calificacion="'.$registros1[1].'";
var muy_fuertemente_acido_numero_bajo="'.$registros1[2].'";
var muy_fuertemente_acido_numero_alto="'.$registros1[3].'";



</script>';


$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

var fuertemente_acido_calificacion="'.$registros1[1].'";
var fuertemente_acido_numero_bajo="'.$registros1[2].'";
var fuertemente_acido_numero_alto="'.$registros1[3].'";



</script>';


$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

var Moderadamente_acido_calificacion="'.$registros1[1].'";
var Moderadamente_acido_numero_bajo="'.$registros1[2].'";
var Moderadamente_acido_numero_alto="'.$registros1[3].'";



</script>';


$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

var Ligeramente_acido_calificacion="'.$registros1[1].'";
var Ligeramente_acido_numero_bajo="'.$registros1[2].'";
var Ligeramente_acido_numero_alto="'.$registros1[3].'";



</script>';


$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

var neutro_calificacion="'.$registros1[1].'";
var neutro_numero_bajo="'.$registros1[2].'";
var neutro_numero_alto="'.$registros1[3].'";



</script>';


$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

var Ligeramente_alcalino_calificacion="'.$registros1[1].'";
var Ligeramente_alcalino_numero_bajo="'.$registros1[2].'";
var Ligeramente_alcalino_numero_alto="'.$registros1[3].'";


</script>';



$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

var Moderadamente_alcalino_calificacion="'.$registros1[1].'";
var Moderadamente_alcalino_numero_bajo="'.$registros1[2].'";
var Moderadamente_alcalino_numero_alto="'.$registros1[3].'";


</script>';


$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

var Fuertemente_alcalino_calificacion="'.$registros1[1].'";
var Fuertemente_alcalino_numero_bajo="'.$registros1[2].'";
var Fuertemente_alcalino_numero_alto="'.$registros1[3].'";



</script>';



$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

var Extremadanamente_alcalino_calificacion="'.$registros1[1].'";
var Extremadanamente_alcalino_numero_alto="'.$registros1[3].'";



</script>';


// AQUI ABAJO DEJO DOCUMENTADO QUE ESTA PARTE ES PARA LOR PRAMETROS DE cE ds/M PORQUE YA TENGO LAS RELACIONES DE TABLAS Y TODO ES POR ESTA RAZON LO DEJO HAY PERO ES UN ERROR NO MORTAL NI IRREPARABLE SOLO SERIA HACER OTRA TABLA Y YA PERO LO COMPLICADO SERIA REALIZAR LA DESCRIPCION DE LAS TABLAS ADEMAS HACER UN TABLA PARA UN REGISTRO NO VALE LA PENA

$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

var normal_calificacion_CE="'.$registros1[1].'";
var normal_numero_bajo_CE="'.$registros1[2].'";



</script>';


$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

var Salino_calificacion_CE="'.$registros1[1].'";
var Salino_numero_bajo_CE="'.$registros1[2].'";



</script>';


$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

var Sodico_calificacion_CE="'.$registros1[1].'";
var Sodico_numero_bajo_CE="'.$registros1[2].'";



</script>';


$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

var Salino_Sodico_calificacion_CE="'.$registros1[1].'";
var Salino_Sodico_numero_bajo_CE="'.$registros1[2].'";



</script>';

mysqli_close($connection1);

// AQUI ABAJO ESTOY PASANDO VARIABLES DE PHP A JAVASCRIPT PARA PODER MANIPURARLAS Y COMPRARALAS AQUI ABAJO ES CON LA TABLA DISPONIBILIDAD SEGUN PH LOS PARAMETROS DE  DISPONIBILIDAD
$connection2=mysqli_connect("localhost","root","","siffa");
$sql2 = "SELECT * FROM  disponibilidad_segun_ph ";
$result2 = mysqli_query($connection2,$sql2);
$registros2=mysqli_fetch_row($result2);


echo '<script languaje="JavaScript">

var ph1_nivel_disponibilidad_N="'.$registros2[2].'";
var ph1_nivel_disponibilidad_P="'.$registros2[3].'";
var ph1_nivel_disponibilidad_K="'.$registros2[4].'";
var ph1_nivel_disponibilidad_S="'.$registros2[5].'";
var ph1_nivel_disponibilidad_Ca="'.$registros2[6].'";
var ph1_nivel_disponibilidad_Mg="'.$registros2[7].'";
var ph1_nivel_disponibilidad_Fe="'.$registros2[8].'";
var ph1_nivel_disponibilidad_Mn="'.$registros2[9].'";
var ph1_nivel_disponibilidad_B="'.$registros2[10].'";
var ph1_nivel_disponibilidad_Zn="'.$registros2[11].'";
var ph1_nivel_disponibilidad_Cu="'.$registros2[12].'";
var ph1_nivel_disponibilidad_Mo="'.$registros2[13].'";



</script>';

$registros2=mysqli_fetch_row($result2);

echo '<script languaje="JavaScript">

var ph2_nivel_disponibilidad_N="'.$registros2[2].'";
var ph2_nivel_disponibilidad_P="'.$registros2[3].'";
var ph2_nivel_disponibilidad_K="'.$registros2[4].'";
var ph2_nivel_disponibilidad_S="'.$registros2[5].'";
var ph2_nivel_disponibilidad_Ca="'.$registros2[6].'";
var ph2_nivel_disponibilidad_Mg="'.$registros2[7].'";
var ph2_nivel_disponibilidad_Fe="'.$registros2[8].'";
var ph2_nivel_disponibilidad_Mn="'.$registros2[9].'";
var ph2_nivel_disponibilidad_B="'.$registros2[10].'";
var ph2_nivel_disponibilidad_Zn="'.$registros2[11].'";
var ph2_nivel_disponibilidad_Cu="'.$registros2[12].'";
var ph2_nivel_disponibilidad_Mo="'.$registros2[13].'";



</script>';

$registros2=mysqli_fetch_row($result2);

echo '<script languaje="JavaScript">

var ph3_nivel_disponibilidad_N="'.$registros2[2].'";
var ph3_nivel_disponibilidad_P="'.$registros2[3].'";
var ph3_nivel_disponibilidad_K="'.$registros2[4].'";
var ph3_nivel_disponibilidad_S="'.$registros2[5].'";
var ph3_nivel_disponibilidad_Ca="'.$registros2[6].'";
var ph3_nivel_disponibilidad_Mg="'.$registros2[7].'";
var ph3_nivel_disponibilidad_Fe="'.$registros2[8].'";
var ph3_nivel_disponibilidad_Mn="'.$registros2[9].'";
var ph3_nivel_disponibilidad_B="'.$registros2[10].'";
var ph3_nivel_disponibilidad_Zn="'.$registros2[11].'";
var ph3_nivel_disponibilidad_Cu="'.$registros2[12].'";
var ph3_nivel_disponibilidad_Mo="'.$registros2[13].'";



</script>';

$registros2=mysqli_fetch_row($result2);

echo '<script languaje="JavaScript">

var ph4_nivel_disponibilidad_N="'.$registros2[2].'";
var ph4_nivel_disponibilidad_P="'.$registros2[3].'";
var ph4_nivel_disponibilidad_K="'.$registros2[4].'";
var ph4_nivel_disponibilidad_S="'.$registros2[5].'";
var ph4_nivel_disponibilidad_Ca="'.$registros2[6].'";
var ph4_nivel_disponibilidad_Mg="'.$registros2[7].'";
var ph4_nivel_disponibilidad_Fe="'.$registros2[8].'";
var ph4_nivel_disponibilidad_Mn="'.$registros2[9].'";
var ph4_nivel_disponibilidad_B="'.$registros2[10].'";
var ph4_nivel_disponibilidad_Zn="'.$registros2[11].'";
var ph4_nivel_disponibilidad_Cu="'.$registros2[12].'";
var ph4_nivel_disponibilidad_Mo="'.$registros2[13].'";



</script>';

$registros2=mysqli_fetch_row($result2);

echo '<script languaje="JavaScript">

var ph5_nivel_disponibilidad_N="'.$registros2[2].'";
var ph5_nivel_disponibilidad_P="'.$registros2[3].'";
var ph5_nivel_disponibilidad_K="'.$registros2[4].'";
var ph5_nivel_disponibilidad_S="'.$registros2[5].'";
var ph5_nivel_disponibilidad_Ca="'.$registros2[6].'";
var ph5_nivel_disponibilidad_Mg="'.$registros2[7].'";
var ph5_nivel_disponibilidad_Fe="'.$registros2[8].'";
var ph5_nivel_disponibilidad_Mn="'.$registros2[9].'";
var ph5_nivel_disponibilidad_B="'.$registros2[10].'";
var ph5_nivel_disponibilidad_Zn="'.$registros2[11].'";
var ph5_nivel_disponibilidad_Cu="'.$registros2[12].'";
var ph5_nivel_disponibilidad_Mo="'.$registros2[13].'";



</script>';

$registros2=mysqli_fetch_row($result2);

echo '<script languaje="JavaScript">

var ph6_nivel_disponibilidad_N="'.$registros2[2].'";
var ph6_nivel_disponibilidad_P="'.$registros2[3].'";
var ph6_nivel_disponibilidad_K="'.$registros2[4].'";
var ph6_nivel_disponibilidad_S="'.$registros2[5].'";
var ph6_nivel_disponibilidad_Ca="'.$registros2[6].'";
var ph6_nivel_disponibilidad_Mg="'.$registros2[7].'";
var ph6_nivel_disponibilidad_Fe="'.$registros2[8].'";
var ph6_nivel_disponibilidad_Mn="'.$registros2[9].'";
var ph6_nivel_disponibilidad_B="'.$registros2[10].'";
var ph6_nivel_disponibilidad_Zn="'.$registros2[11].'";
var ph6_nivel_disponibilidad_Cu="'.$registros2[12].'";
var ph6_nivel_disponibilidad_Mo="'.$registros2[13].'";



</script>';

$registros2=mysqli_fetch_row($result2);

echo '<script languaje="JavaScript">

var ph7_nivel_disponibilidad_N="'.$registros2[2].'";
var ph7_nivel_disponibilidad_P="'.$registros2[3].'";
var ph7_nivel_disponibilidad_K="'.$registros2[4].'";
var ph7_nivel_disponibilidad_S="'.$registros2[5].'";
var ph7_nivel_disponibilidad_Ca="'.$registros2[6].'";
var ph7_nivel_disponibilidad_Mg="'.$registros2[7].'";
var ph7_nivel_disponibilidad_Fe="'.$registros2[8].'";
var ph7_nivel_disponibilidad_Mn="'.$registros2[9].'";
var ph7_nivel_disponibilidad_B="'.$registros2[10].'";
var ph7_nivel_disponibilidad_Zn="'.$registros2[11].'";
var ph7_nivel_disponibilidad_Cu="'.$registros2[12].'";
var ph7_nivel_disponibilidad_Mo="'.$registros2[13].'";



</script>';

$registros2=mysqli_fetch_row($result2);

echo '<script languaje="JavaScript">

var ph8_nivel_disponibilidad_N="'.$registros2[2].'";
var ph8_nivel_disponibilidad_P="'.$registros2[3].'";
var ph8_nivel_disponibilidad_K="'.$registros2[4].'";
var ph8_nivel_disponibilidad_S="'.$registros2[5].'";
var ph8_nivel_disponibilidad_Ca="'.$registros2[6].'";
var ph8_nivel_disponibilidad_Mg="'.$registros2[7].'";
var ph8_nivel_disponibilidad_Fe="'.$registros2[8].'";
var ph8_nivel_disponibilidad_Mn="'.$registros2[9].'";
var ph8_nivel_disponibilidad_B="'.$registros2[10].'";
var ph8_nivel_disponibilidad_Zn="'.$registros2[11].'";
var ph8_nivel_disponibilidad_Cu="'.$registros2[12].'";
var ph8_nivel_disponibilidad_Mo="'.$registros2[13].'";



</script>';

$registros2=mysqli_fetch_row($result2);

echo '<script languaje="JavaScript">

var ph9_nivel_disponibilidad_N="'.$registros2[2].'";
var ph9_nivel_disponibilidad_P="'.$registros2[3].'";
var ph9_nivel_disponibilidad_K="'.$registros2[4].'";
var ph9_nivel_disponibilidad_S="'.$registros2[5].'";
var ph9_nivel_disponibilidad_Ca="'.$registros2[6].'";
var ph9_nivel_disponibilidad_Mg="'.$registros2[7].'";
var ph9_nivel_disponibilidad_Fe="'.$registros2[8].'";
var ph9_nivel_disponibilidad_Mn="'.$registros2[9].'";
var ph9_nivel_disponibilidad_B="'.$registros2[10].'";
var ph9_nivel_disponibilidad_Zn="'.$registros2[11].'";
var ph9_nivel_disponibilidad_Cu="'.$registros2[12].'";
var ph9_nivel_disponibilidad_Mo="'.$registros2[13].'";



</script>';

$registros2=mysqli_fetch_row($result2);

echo '<script languaje="JavaScript">

var ph10_nivel_disponibilidad_N="'.$registros2[2].'";
var ph10_nivel_disponibilidad_P="'.$registros2[3].'";
var ph10_nivel_disponibilidad_K="'.$registros2[4].'";
var ph10_nivel_disponibilidad_S="'.$registros2[5].'";
var ph10_nivel_disponibilidad_Ca="'.$registros2[6].'";
var ph10_nivel_disponibilidad_Mg="'.$registros2[7].'";
var ph10_nivel_disponibilidad_Fe="'.$registros2[8].'";
var ph10_nivel_disponibilidad_Mn="'.$registros2[9].'";
var ph10_nivel_disponibilidad_B="'.$registros2[10].'";
var ph10_nivel_disponibilidad_Zn="'.$registros2[11].'";
var ph10_nivel_disponibilidad_Cu="'.$registros2[12].'";
var ph10_nivel_disponibilidad_Mo="'.$registros2[13].'";



</script>';

$registros2=mysqli_fetch_row($result2);

echo '<script languaje="JavaScript">

var ph11_nivel_disponibilidad_N="'.$registros2[2].'";
var ph11_nivel_disponibilidad_P="'.$registros2[3].'";
var ph11_nivel_disponibilidad_K="'.$registros2[4].'";
var ph11_nivel_disponibilidad_S="'.$registros2[5].'";
var ph11_nivel_disponibilidad_Ca="'.$registros2[6].'";
var ph11_nivel_disponibilidad_Mg="'.$registros2[7].'";
var ph11_nivel_disponibilidad_Fe="'.$registros2[8].'";
var ph11_nivel_disponibilidad_Mn="'.$registros2[9].'";
var ph11_nivel_disponibilidad_B="'.$registros2[10].'";
var ph11_nivel_disponibilidad_Zn="'.$registros2[11].'";
var ph11_nivel_disponibilidad_Cu="'.$registros2[12].'";
var ph11_nivel_disponibilidad_Mo="'.$registros2[13].'";



</script>';


mysqli_close($connection2);


// AQUI ABAJO ESTOY PASANDO VARIABLES DE PHP A JAVASCRIPT PARA PODER MANIPURARLAS Y COMPRARALAS AQUI ABAJO ES CON LA TABLA DISPONIBILIDAD SEGUN PH LOS PARAMETROS DE  DISPONIBILIDAD
$connection3=mysqli_connect("localhost","root","","siffa");
$sql3 = "SELECT * FROM  mineralizacion ";
$result3 = mysqli_query($connection3,$sql3);
$registros3=mysqli_fetch_row($result3);


echo '<script languaje="JavaScript">


var clima_frio_rm="'.$registros3[2].'";

</script>';

$registros3=mysqli_fetch_row($result3);


echo '<script languaje="JavaScript">


var clima_medio_rm="'.$registros3[2].'";

</script>';

$registros3=mysqli_fetch_row($result3);


echo '<script languaje="JavaScript">


var clima_calido_rm="'.$registros3[2].'";

</script>';



mysqli_close($connection3);



 ?>

<script>




  // AQUI ABAJO ALMACENOS LO QUE USUARIO DIGIYE EN LA TABLA PARA HACER LA FORMULAS ADEMAS DE MANIPULARLOS


    var PH=parseFloat(document.getElementById('PH').value);
    var MO=parseFloat(document.getElementById('MO').value);


    var CO=parseFloat(document.getElementById('CO').value);
    var P=parseFloat(document.getElementById('P').value);
    var Al=parseFloat(document.getElementById('Al').value);
    var Ca=parseFloat(document.getElementById('Ca').value);
    var Mg=parseFloat(document.getElementById('Mg').value);
    var K=parseFloat(document.getElementById('K').value);
    var Na=parseFloat(document.getElementById('Na').value);
    var S=parseFloat(document.getElementById('S').value);
    var Fe=parseFloat(document.getElementById('Fe').value);
    var Mn=parseFloat(document.getElementById('Mn').value);
    var Cu=parseFloat(document.getElementById('Cu').value);
    var Zn=parseFloat(document.getElementById('Zn').value);
    var B=parseFloat(document.getElementById('B').value);




    var CE=parseFloat(document.getElementById('CE').value);


    // AQUI ABAJO ALMACENO LO QUE DIGITEN EN LA TABLA PEQUEÑA

    var clima=document.getElementById('clima').value;
    var profundidad=parseFloat(document.getElementById('profundidad').value);
    var densidad_aparente=parseFloat(document.getElementById('densidad_aparente').value);
    var hectarea=parseFloat(document.getElementById('hectarea').value);


    // AQUI ABAJO GUARDO EL CONTENIDO DE LOS BOTONES DE NIVELES PARA DESPUES MANIPULARLOS SI ES MUCHO ALTO BAJO ETC

    // AQUI ABAJO HAGO LAS CONDICIONALES PARA EL PH SEGUN LOS NIVELES SACADOS DE FUENTES CONFIABLES
    if (PH<ultra_acido_numero_alto) {
   
      var nivel_disponibilidad_N=ph1_nivel_disponibilidad_N;
      var nivel_disponibilidad_P=ph1_nivel_disponibilidad_P;
      var nivel_disponibilidad_K=ph1_nivel_disponibilidad_K;
      var nivel_disponibilidad_S=ph1_nivel_disponibilidad_S;
      var nivel_disponibilidad_Ca=ph1_nivel_disponibilidad_Ca;
      var nivel_disponibilidad_Mg=ph1_nivel_disponibilidad_Mg;
      var nivel_disponibilidad_Fe=ph1_nivel_disponibilidad_Fe;
      var nivel_disponibilidad_Mn=ph1_nivel_disponibilidad_Mn;
      var nivel_disponibilidad_B=ph1_nivel_disponibilidad_B;
      var nivel_disponibilidad_Zn=ph1_nivel_disponibilidad_Zn;
      var nivel_disponibilidad_Cu=ph1_nivel_disponibilidad_Cu;
      var nivel_disponibilidad_Mo=ph1_nivel_disponibilidad_Mo;


 
 
 
 
 
 
 


    }
    else if(PH>=Extramadamente_acido_numero_bajo && PH<=Extramadamente_acido_numero_alto){

      var nivel_disponibilidad_N=ph2_nivel_disponibilidad_N;
      var nivel_disponibilidad_P=ph2_nivel_disponibilidad_P;
      var nivel_disponibilidad_K=ph2_nivel_disponibilidad_K;
      var nivel_disponibilidad_S=ph2_nivel_disponibilidad_S;
      var nivel_disponibilidad_Ca=ph2_nivel_disponibilidad_Ca;
      var nivel_disponibilidad_Mg=ph2_nivel_disponibilidad_Mg;
      var nivel_disponibilidad_Fe=ph2_nivel_disponibilidad_Fe;
      var nivel_disponibilidad_Mn=ph2_nivel_disponibilidad_Mn;
      var nivel_disponibilidad_B=ph2_nivel_disponibilidad_B;
      var nivel_disponibilidad_Zn=ph2_nivel_disponibilidad_Zn;
      var nivel_disponibilidad_Cu=ph2_nivel_disponibilidad_Cu;
      var nivel_disponibilidad_Mo=ph2_nivel_disponibilidad_Mo;


    }
    else if(PH>=muy_fuertemente_acido_numero_bajo && PH<=muy_fuertemente_acido_numero_alto){

      var nivel_disponibilidad_N=ph3_nivel_disponibilidad_N;
      var nivel_disponibilidad_P=ph3_nivel_disponibilidad_P;
      var nivel_disponibilidad_K=ph3_nivel_disponibilidad_K;
      var nivel_disponibilidad_S=ph3_nivel_disponibilidad_S;
      var nivel_disponibilidad_Ca=ph3_nivel_disponibilidad_Ca;
      var nivel_disponibilidad_Mg=ph3_nivel_disponibilidad_Mg;
      var nivel_disponibilidad_Fe=ph3_nivel_disponibilidad_Fe;
      var nivel_disponibilidad_Mn=ph3_nivel_disponibilidad_Mn;
      var nivel_disponibilidad_B=ph3_nivel_disponibilidad_B;
      var nivel_disponibilidad_Zn=ph3_nivel_disponibilidad_Zn;
      var nivel_disponibilidad_Cu=ph3_nivel_disponibilidad_Cu;
      var nivel_disponibilidad_Mo=ph3_nivel_disponibilidad_Mo;

    }
    else if(PH >=fuertemente_acido_numero_bajo && PH <=fuertemente_acido_numero_alto){
   
      var nivel_disponibilidad_N=ph4_nivel_disponibilidad_N;
      var nivel_disponibilidad_P=ph4_nivel_disponibilidad_P;
      var nivel_disponibilidad_K=ph4_nivel_disponibilidad_K;
      var nivel_disponibilidad_S=ph4_nivel_disponibilidad_S;
      var nivel_disponibilidad_Ca=ph4_nivel_disponibilidad_Ca;
      var nivel_disponibilidad_Mg=ph4_nivel_disponibilidad_Mg;
      var nivel_disponibilidad_Fe=ph4_nivel_disponibilidad_Fe;
      var nivel_disponibilidad_Mn=ph4_nivel_disponibilidad_Mn;
      var nivel_disponibilidad_B=ph4_nivel_disponibilidad_B;
      var nivel_disponibilidad_Zn=ph4_nivel_disponibilidad_Zn;
      var nivel_disponibilidad_Cu=ph4_nivel_disponibilidad_Cu;
      var nivel_disponibilidad_Mo=ph4_nivel_disponibilidad_Mo;


    } else if(PH >=Moderadamente_acido_numero_bajo && PH <=Moderadamente_acido_numero_alto){

      var nivel_disponibilidad_N=ph5_nivel_disponibilidad_N;
      var nivel_disponibilidad_P=ph5_nivel_disponibilidad_P;
      var nivel_disponibilidad_K=ph5_nivel_disponibilidad_K;
      var nivel_disponibilidad_S=ph5_nivel_disponibilidad_S;
      var nivel_disponibilidad_Ca=ph5_nivel_disponibilidad_Ca;
      var nivel_disponibilidad_Mg=ph5_nivel_disponibilidad_Mg;
      var nivel_disponibilidad_Fe=ph5_nivel_disponibilidad_Fe;
      var nivel_disponibilidad_Mn=ph5_nivel_disponibilidad_Mn;
      var nivel_disponibilidad_B=ph5_nivel_disponibilidad_B;
      var nivel_disponibilidad_Zn=ph5_nivel_disponibilidad_Zn;
      var nivel_disponibilidad_Cu=ph5_nivel_disponibilidad_Cu;
      var nivel_disponibilidad_Mo=ph5_nivel_disponibilidad_Mo;

    }
    else if(PH >=Ligeramente_acido_numero_bajo && PH <=Ligeramente_acido_numero_alto){

      var nivel_disponibilidad_N=ph6_nivel_disponibilidad_N;
      var nivel_disponibilidad_P=ph6_nivel_disponibilidad_P;
      var nivel_disponibilidad_K=ph6_nivel_disponibilidad_K;
      var nivel_disponibilidad_S=ph6_nivel_disponibilidad_S;
      var nivel_disponibilidad_Ca=ph6_nivel_disponibilidad_Ca;
      var nivel_disponibilidad_Mg=ph6_nivel_disponibilidad_Mg;
      var nivel_disponibilidad_Fe=ph6_nivel_disponibilidad_Fe;
      var nivel_disponibilidad_Mn=ph6_nivel_disponibilidad_Mn;
      var nivel_disponibilidad_B=ph6_nivel_disponibilidad_B;
      var nivel_disponibilidad_Zn=ph6_nivel_disponibilidad_Zn;
      var nivel_disponibilidad_Cu=ph6_nivel_disponibilidad_Cu;
      var nivel_disponibilidad_Mo=ph6_nivel_disponibilidad_Mo;

    } else if(PH >=neutro_numero_bajo  && PH<=neutro_numero_alto){


      var nivel_disponibilidad_N=ph7_nivel_disponibilidad_N;
      var nivel_disponibilidad_P=ph7_nivel_disponibilidad_P;
      var nivel_disponibilidad_K=ph7_nivel_disponibilidad_K;
      var nivel_disponibilidad_S=ph7_nivel_disponibilidad_S;
      var nivel_disponibilidad_Ca=ph7_nivel_disponibilidad_Ca;
      var nivel_disponibilidad_Mg=ph7_nivel_disponibilidad_Mg;
      var nivel_disponibilidad_Fe=ph7_nivel_disponibilidad_Fe;
      var nivel_disponibilidad_Mn=ph7_nivel_disponibilidad_Mn;
      var nivel_disponibilidad_B=ph7_nivel_disponibilidad_B;
      var nivel_disponibilidad_Zn=ph7_nivel_disponibilidad_Zn;
      var nivel_disponibilidad_Cu=ph7_nivel_disponibilidad_Cu;
      var nivel_disponibilidad_Mo=ph7_nivel_disponibilidad_Mo;


    }
    else if(PH>=Ligeramente_alcalino_numero_bajo && PH<=Ligeramente_alcalino_numero_alto){

      var nivel_disponibilidad_N=ph8_nivel_disponibilidad_N;
      var nivel_disponibilidad_P=ph8_nivel_disponibilidad_P;
      var nivel_disponibilidad_K=ph8_nivel_disponibilidad_K;
      var nivel_disponibilidad_S=ph8_nivel_disponibilidad_S;
      var nivel_disponibilidad_Ca=ph8_nivel_disponibilidad_Ca;
      var nivel_disponibilidad_Mg=ph8_nivel_disponibilidad_Mg;
      var nivel_disponibilidad_Fe=ph8_nivel_disponibilidad_Fe;
      var nivel_disponibilidad_Mn=ph8_nivel_disponibilidad_Mn;
      var nivel_disponibilidad_B=ph8_nivel_disponibilidad_B;
      var nivel_disponibilidad_Zn=ph8_nivel_disponibilidad_Zn;
      var nivel_disponibilidad_Cu=ph8_nivel_disponibilidad_Cu;
      var nivel_disponibilidad_Mo=ph8_nivel_disponibilidad_Mo;


    }else if (PH >=Moderadamente_alcalino_numero_bajo && PH <=Moderadamente_alcalino_numero_alto) {

     var nivel_disponibilidad_N=ph9_nivel_disponibilidad_N;
      var nivel_disponibilidad_P=ph9_nivel_disponibilidad_P;
      var nivel_disponibilidad_K=ph9_nivel_disponibilidad_K;
      var nivel_disponibilidad_S=ph9_nivel_disponibilidad_S;
      var nivel_disponibilidad_Ca=ph9_nivel_disponibilidad_Ca;
      var nivel_disponibilidad_Mg=ph9_nivel_disponibilidad_Mg;
      var nivel_disponibilidad_Fe=ph9_nivel_disponibilidad_Fe;
      var nivel_disponibilidad_Mn=ph9_nivel_disponibilidad_Mn;
      var nivel_disponibilidad_B=ph9_nivel_disponibilidad_B;
      var nivel_disponibilidad_Zn=ph9_nivel_disponibilidad_Zn;
      var nivel_disponibilidad_Cu=ph9_nivel_disponibilidad_Cu;
      var nivel_disponibilidad_Mo=ph9_nivel_disponibilidad_Mo;

    }
    else if(PH >Fuertemente_alcalino_numero_bajo && PH <=Fuertemente_alcalino_numero_alto){

     var nivel_disponibilidad_N=ph10_nivel_disponibilidad_N;
      var nivel_disponibilidad_P=ph10_nivel_disponibilidad_P;
      var nivel_disponibilidad_K=ph10_nivel_disponibilidad_K;
      var nivel_disponibilidad_S=ph10_nivel_disponibilidad_S;
      var nivel_disponibilidad_Ca=ph10_nivel_disponibilidad_Ca;
      var nivel_disponibilidad_Mg=ph10_nivel_disponibilidad_Mg;
      var nivel_disponibilidad_Fe=ph10_nivel_disponibilidad_Fe;
      var nivel_disponibilidad_Mn=ph10_nivel_disponibilidad_Mn;
      var nivel_disponibilidad_B=ph10_nivel_disponibilidad_B;
      var nivel_disponibilidad_Zn=ph10_nivel_disponibilidad_Zn;
      var nivel_disponibilidad_Cu=ph10_nivel_disponibilidad_Cu;
      var nivel_disponibilidad_Mo=ph10_nivel_disponibilidad_Mo;

    }
    else if(PH >Extremadanamente_alcalino_numero_alto){

     var nivel_disponibilidad_N=ph10_nivel_disponibilidad_N;
      var nivel_disponibilidad_P=ph10_nivel_disponibilidad_P;
      var nivel_disponibilidad_K=ph10_nivel_disponibilidad_K;
      var nivel_disponibilidad_S=ph10_nivel_disponibilidad_S;
      var nivel_disponibilidad_Ca=ph10_nivel_disponibilidad_Ca;
      var nivel_disponibilidad_Mg=ph10_nivel_disponibilidad_Mg;
      var nivel_disponibilidad_Fe=ph10_nivel_disponibilidad_Fe;
      var nivel_disponibilidad_Mn=ph10_nivel_disponibilidad_Mn;
      var nivel_disponibilidad_B=ph10_nivel_disponibilidad_B;
      var nivel_disponibilidad_Zn=ph10_nivel_disponibilidad_Zn;
      var nivel_disponibilidad_Cu=ph10_nivel_disponibilidad_Cu;
      var nivel_disponibilidad_Mo=ph10_nivel_disponibilidad_Mo;

    };






  // AQUI ABAJO COMIENZA LAS FORMULAS TODAS LAS FORMULAS PARA HAYAR CADA ELEMENTO

    // PHA ES PESO DE HECTAREA ARABLE KG
    var pha=(10000*profundidad)*(densidad_aparente)*1000;
    // fa ES FACTOR DE AREA

    var fa=pha/1000000;

    // AQUI ABAJO ES PARA GUARDAR EL NITROGENO ORGANICO
    var nitrogeno_organico_total=MO/20;

    //AQUI ABAJO ES LA MATERIA ORGANICA
    var materia_organica=CO*1724;
  if (clima == "medio") {
      var RM=clima_medio_rm;

    } else if (clima == "calido"){
      var RM=clima_calido_rm;

    } else if (clima == "frio"){
      var RM=clima_frio_rm;

    };



    // AQUI ABAJO ES PARA SACAR EL NITROGENO EN KG Y RM SIGNIFICA RATA MINERAL LOS ULTIMOS TRES DIGITOS ES EL FD PH EL FACTOR DE DISPONIBILIDAD
    var nitrogeno=((nitrogeno_organico_total*RM)/100)*pha*nivel_disponibilidad_N;

    // AQUI ABAJO ES PARA SACAR EL FOSFORO EN KG Y RM SIGNIFICA RATA MINERAL LOS ULTIMOS TRES DIGITOS ES EL FD PH EL FACTOR DE DISPONIBILIDAD
    var fosforo=(P*fa*2.2951)*nivel_disponibilidad_P;

    // AQUI ABAJO ES PARA SACAR EL POTASIO EN KG Y RM SIGNIFICA RATA MINERAL LOS ULTIMOS TRES DIGITOS ES EL FD PH EL FACTOR DE DISPONIBILIDAD
    var potasio=K*(0.039*(pha/100)*1.2046)*nivel_disponibilidad_K;

    // AQUI ABAJO ES PARA SACAR EL CALCIO EN KG Y RM SIGNIFICA RATA MINERAL LOS ULTIMOS TRES DIGITOS ES EL FD PH EL FACTOR DE DISPONIBILIDAD
    var calcio=Ca*(0.02*(pha/100)*1.3992)*nivel_disponibilidad_Ca;

    // AQUI ABAJO ES PARA SACAR EL MAGNESIO EN KG Y RM SIGNIFICA RATA MINERAL LOS ULTIMOS TRES DIGITOS ES EL FD PH EL FACTOR DE DISPONIBILIDAD
    var magnesio=Mg*(0.012*(pha/100)*1.6579)*nivel_disponibilidad_Mg;

    // AQUI ABAJO ES PARA SACAR EL AZUFRE EN KG Y RM SIGNIFICA RATA MINERAL LOS ULTIMOS TRES DIGITOS ES EL FD PH EL FACTOR DE DISPONIBILIDAD
    var azufre=(S*fa*3.0)*nivel_disponibilidad_S;


    // AQUI ABAJO ES PARA SACAR EL HIERRO EN KG Y RM SIGNIFICA RATA MINERAL LOS ULTIMOS TRES DIGITOS ES EL FD PH EL FACTOR DE DISPONIBILIDAD
    var hierro=(Fe*fa*1.4298)*nivel_disponibilidad_Fe;

    // AQUI ABAJO ES PARA SACAR EL manganeso EN KG Y RM SIGNIFICA RATA MINERAL LOS ULTIMOS TRES DIGITOS ES EL FD PH EL FACTOR DE DISPONIBILIDAD
    var manganeso=(Mn*fa*1.2913)*nivel_disponibilidad_Mg;

    // AQUI ABAJO ES PARA SACAR EL cobre EN KG Y RM SIGNIFICA RATA MINERAL LOS ULTIMOS TRES DIGITOS ES EL FD PH EL FACTOR DE DISPONIBILIDAD
    var cobre=(Cu*fa*1.2517)*nivel_disponibilidad_Cu;


    // AQUI ABAJO ES PARA SACAR EL boro EN KG Y RM SIGNIFICA RATA MINERAL LOS ULTIMOS TRES DIGITOS ES EL FD PH EL FACTOR DE DISPONIBILIDAD
    var boro=(B*fa*3.2181)*nivel_disponibilidad_B;

    // AQUI ABAJO ES PARA SACAR EL zinc EN KG Y RM SIGNIFICA RATA MINERAL LOS ULTIMOS TRES DIGITOS ES EL FD PH EL FACTOR DE DISPONIBILIDAD
    var zinc=(Zn*fa*1.2447)*nivel_disponibilidad_Zn;

if (fertilizante_compuesto >=0) {

// kg_N;
// kg_P;
// kg_K;
// kg_Ca;
// kg_Mg;
// kg_S;
// kg_Zn;
// kg_B;
// alert(kg_N)
if (kg_N>=0) {
var nitrogeno=parseFloat(((fertilizante_compuesto * 40) * kg_N) + nitrogeno);
    parseInt($("#tabla_N").text(nitrogeno.toFixed(1)).show());
    parseInt($("#tabla_N1").text(nitrogeno.toFixed(1)).show());
    var nutriente_necesario_N=parseFloat(document.getElementById('nutriente_necesario_N').value);
// AQUI ABAJO MANDO LOS ARCHIVOS PARA PHP PARA QUE ME LOS ACUMUELE EN EL MOMENTO DE QUE SEHAN MAS FERTILIZANTES Y SIGA SUBIENDO



$("#contenedor").load("crear_archivo_nutriente_Nutrientes.php",{nitrogeno:nitrogeno,Id_fertilizante:Id_fertilizante});


// ----------------------------------------------------------------------------------------------------------------------------
    if (nutriente_necesario_N<=nitrogeno) {

parseInt($("#diferencia_N1").text("OK"));
var diferencia_N=document.getElementById("diferencia_N").style.background="green";
var diferencia_N=document.getElementById("diferencia_N").style.color="white";
parseInt($("#diferencia_N").text("OK"));
var diferencia_N=document.getElementById("diferencia_N").value=nutriente_necesario_N-nitrogeno.toFixed(1);
}else{

var diferencia_N=document.getElementById("diferencia_N").style.background="red";
var diferencia_N=document.getElementById("diferencia_N").style.color="white";
parseInt($("#diferencia_N").text(nutriente_necesario_N-nitrogeno.toFixed(0)));
var diferencia_N=document.getElementById("diferencia_N").value=nutriente_necesario_N-nitrogeno.toFixed(1);

}
  
}



if (kg_P>=0) { 
var fosforo=parseFloat(((fertilizante_compuesto * 50) * kg_P) + fosforo);
    parseInt($("#tabla_P").text(fosforo.toFixed(1)).show());
    parseInt($("#tabla_P1").text(fosforo.toFixed(1)).show());

    var nutriente_necesario_P=document.getElementById('nutriente_necesario_P').text;

        var nutriente_necesario_P=parseFloat(document.getElementById('nutriente_necesario_P').value);


    if (nutriente_necesario_P<=fosforo) {

parseInt($("#diferencia_P1").text("OK"));
var diferencia_P=document.getElementById("diferencia_P").style.background="green";
var diferencia_P=document.getElementById("diferencia_P").style.color="white";
parseInt($("#diferencia_P").text("OK"));
var diferencia_P=document.getElementById("diferencia_P").value=nutriente_necesario_P-fosforo.toFixed(1);
}else{

var diferencia_P=document.getElementById("diferencia_P").style.background="red";
var diferencia_P=document.getElementById("diferencia_P").style.color="white";
parseInt($("#diferencia_P").text(nutriente_necesario_P-fosforo.toFixed(0)));
var diferencia_P=document.getElementById("diferencia_P").value=nutriente_necesario_P-fosforo.toFixed(1);

}
    
}

if (kg_K>=0) {
var potasio=parseFloat(((fertilizante_compuesto * 50) * kg_K) + potasio) ;
    parseInt($("#tabla_K").text(potasio.toFixed(1)).show());
    parseInt($("#tabla_K1").text(potasio.toFixed(1)).show());
    var nutriente_necesario_K=document.getElementById('nutriente_necesario_K').value;

        var nutriente_necesario_K=parseFloat(document.getElementById('nutriente_necesario_K').value);


    if (nutriente_necesario_K<=potasio) {

parseInt($("#diferencia_K1").text("OK"));
var diferencia_K=document.getElementById("diferencia_K").style.background="green";
var diferencia_K=document.getElementById("diferencia_K").style.color="white";
parseInt($("#diferencia_K").text("OK"));
var diferencia_K=document.getElementById("diferencia_K").value=nutriente_necesario_K-potasio.toFixed(1);
}else{

var diferencia_K=document.getElementById("diferencia_K").style.background="red";
var diferencia_K=document.getElementById("diferencia_K").style.color="white";
parseInt($("#diferencia_K").text(nutriente_necesario_K-potasio.toFixed(0)));
var diferencia_K=document.getElementById("diferencia_K").value=nutriente_necesario_K-potasio.toFixed(1);

}


}

if (kg_Ca>=0) {
var calcio=parseFloat(((fertilizante_compuesto * 50) * kg_Ca) + calcio) ;
    parseInt($("#tabla_Ca").text(calcio.toFixed(1)).show());
    parseInt($("#tabla_Ca1").text(calcio.toFixed(1)).show());
    var nutriente_necesario_Ca=document.getElementById('nutriente_necesario_Ca').value;


          var nutriente_necesario_Ca=parseFloat(document.getElementById('nutriente_necesario_Ca').value);


    if (nutriente_necesario_Ca<=calcio) {

parseInt($("#diferencia_Ca1").text("OK"));
var diferencia_Ca=document.getElementById("diferencia_Ca").style.background="green";
var diferencia_Ca=document.getElementById("diferencia_Ca").style.color="white";
parseInt($("#diferencia_Ca").text("OK"));
var diferencia_Ca=document.getElementById("diferencia_Ca").value=nutriente_necesario_Ca-calcio.toFixed(1);
}else{

var diferencia_Ca=document.getElementById("diferencia_Ca").style.background="red";
var diferencia_Ca=document.getElementById("diferencia_Ca").style.color="white";
parseInt($("#diferencia_Ca").text(nutriente_necesario_Ca-calcio.toFixed(0)));
var diferencia_Ca=document.getElementById("diferencia_Ca").value=nutriente_necesario_Ca-calcio.toFixed(1);

}

}

if (kg_Mg>=0) {
var magnesio=parseFloat(((fertilizante_compuesto * 50) * kg_Mg) + magnesio) ;
    parseInt($("#tabla_Mg").text(magnesio.toFixed(1)).show());
    parseInt($("#tabla_Mg1").text(magnesio.toFixed(1)).show());
    var nutriente_necesario_Mg=document.getElementById('nutriente_necesario_Mg').value;

 var nutriente_necesario_Mg=parseFloat(document.getElementById('nutriente_necesario_Mg').value);


    if (nutriente_necesario_Mg<=magnesio) {

parseInt($("#diferencia_Mg1").text("OK"));
var diferencia_Mg=document.getElementById("diferencia_Mg").style.background="green";
var diferencia_Mg=document.getElementById("diferencia_Mg").style.color="white";
parseInt($("#diferencia_Mg").text("OK"));
var diferencia_Mg=document.getElementById("diferencia_Mg").value=nutriente_necesario_Mg-magnesio.toFixed(1);
}else{

var diferencia_Mg=document.getElementById("diferencia_Mg").style.background="red";
var diferencia_Mg=document.getElementById("diferencia_Mg").style.color="white";
parseInt($("#diferencia_Mg").text(nutriente_necesario_Mg-magnesio.toFixed(0)));
var diferencia_Mg=document.getElementById("diferencia_Mg").value=nutriente_necesario_Mg-magnesio.toFixed(1);

}


}

if (kg_S>=0) {
var azufre=parseFloat(((fertilizante_compuesto * 50) * kg_S) + azufre) ;
    parseInt($("#tabla_S").text(azufre.toFixed(1)).show());
    parseInt($("#tabla_S1").text(azufre.toFixed(1)).show());
    var nutriente_necesario_S=document.getElementById('nutriente_necesario_S').value;

    var nutriente_necesario_S=parseFloat(document.getElementById('nutriente_necesario_S').value);


    if (nutriente_necesario_S<=azufre) {

parseInt($("#diferencia_S1").text("OK"));
var diferencia_S=document.getElementById("diferencia_S").style.background="green";
var diferencia_S=document.getElementById("diferencia_S").style.color="white";
parseInt($("#diferencia_S").text("OK"));
var diferencia_S=document.getElementById("diferencia_S").value=nutriente_necesario_S-azufre.toFixed(1);
}else{

var diferencia_S=document.getElementById("diferencia_S").style.background="red";
var diferencia_S=document.getElementById("diferencia_S").style.color="white";
parseInt($("#diferencia_S").text(nutriente_necesario_S-azufre.toFixed(0)));
var diferencia_S=document.getElementById("diferencia_S").value=nutriente_necesario_S-azufre.toFixed(1);

}


}

if (kg_Zn>=0) {
var zinc=parseFloat(((fertilizante_compuesto * 50) * kg_Zn) + zinc) ;
    parseInt($("#tabla_Zn").text(zinc.toFixed(1)).show());
    parseInt($("#tabla_Zn1").text(zinc.toFixed(1)).show());
    var nutriente_necesario_Zn=document.getElementById('nutriente_necesario_Zn').value;

      var nutriente_necesario_Zn=parseFloat(document.getElementById('nutriente_necesario_Zn').value);


    if (nutriente_necesario_Zn<=zinc) {

parseInt($("#diferencia_Zn1").text("OK"));
var diferencia_Zn=document.getElementById("diferencia_Zn").style.background="green";
var diferencia_Zn=document.getElementById("diferencia_Zn").style.color="white";
parseInt($("#diferencia_Zn").text("OK"));
var diferencia_Zn=document.getElementById("diferencia_Zn").value=nutriente_necesario_Zn-zinc.toFixed(1);
}else{

var diferencia_Zn=document.getElementById("diferencia_Zn").style.background="red";
var diferencia_Zn=document.getElementById("diferencia_Zn").style.color="white";
parseInt($("#diferencia_Zn").text(nutriente_necesario_Zn-zinc.toFixed(0)));
var diferencia_Zn=document.getElementById("diferencia_Zn").value=nutriente_necesario_Zn-zinc.toFixed(1);

}

}
 
if (kg_B>=0) {
var boro=parseFloat(((fertilizante_compuesto * 50) * kg_B) + boro) ;
    parseInt($("#tabla_B").text(azufre.toFixed(1)).show());
    parseInt($("#tabla_B1").text(azufre.toFixed(1)).show());
    var nutriente_necesario_B=document.getElementById('nutriente_necesario_B').value;

      var nutriente_necesario_B=parseFloat(document.getElementById('nutriente_necesario_B').value);


    if (nutriente_necesario_B<=boro) {

parseInt($("#diferencia_B1").text("OK"));
var diferencia_B=document.getElementById("diferencia_B").style.background="green";
var diferencia_B=document.getElementById("diferencia_B").style.color="white";
parseInt($("#diferencia_B").text("OK"));
var diferencia_B=document.getElementById("diferencia_B").value=nutriente_necesario_B-boro.toFixed(1);
}else{

var diferencia_B=document.getElementById("diferencia_B").style.background="red";
var diferencia_B=document.getElementById("diferencia_B").style.color="white";
parseInt($("#diferencia_B").text(nutriente_necesario_B-boro.toFixed(0)));
var diferencia_B=document.getElementById("diferencia_B").value=nutriente_necesario_B-boro.toFixed(1);

}

}





}



     $('#analisis').highcharts({
          chart: {
            //ESTE OPTION 3D ES PARA
            type: 'column',
            options3d: {
              enabled: true,
              alpha: 2,
              beta: 0
            },

          },
          title: {
            text: 'Analisis de Suelo Cultivo ' + cultivo
          },
          subtitle: {
            text: 'SIFFA'



          },
          xAxis: {
            categories: [
            //AQUI SE CONECTA CON LA BASE DE DATOS Y ESTRAE EL NOMBRE DE LOS CAMPOS PARA PONERLOS EN EL GRAFICO EJEMPLO N P SI

            <?php

            $connection=mysqli_connect("localhost","root","","siffa");


            $sql = "SELECT * FROM `cultivo` INNER JOIN requerimiento ON cultivo.idrequerimiento=requerimiento.idrequerimiento ";
            $result = mysqli_query($connection,$sql);
            while ($registros1=mysqli_fetch_array($result))
            { ?>


              '<?php echo "Nitrogeno" ?>',
              '<?php echo "Fosforo" ?>',
              '<?php echo "Potasio" ?>',
              '<?php echo "Calcio" ?>',
              '<?php echo "Magnesio" ?>',
              '<?php echo "Azufre" ?>',
              '<?php echo "Zinc" ?>',
              '<?php echo "Boro" ?>',
              '<?php echo "Cobre" ?>',
              <?php
            }
            mysqli_close($connection);
            ?>],
            crosshair: true
          }, credits: {
            enabled: false
          },
          yAxis: {
            min: 0,

            title: {
              text: 'CANTIDAD DE NUTRIENTES (Kg)'
            }
          },
          tooltip: {headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
              '<td style="padding:0"><b>{point.y:.1f} Kg</b></td></tr>',
              footerFormat: '</table>',
              shared: true,
              useHTML: true,
            },


            colors: [//AQUI ES PONIENDO COLORES A CADA COLUMNA Y SI HAY MUCHAS COLUMNAS LOS COLORES SE REPITEN ADEMAS SON VARIABLES Y LOS COLORES PUEDEN CAMBIAR
            Highcharts.getOptions().colors[0],
            Highcharts.getOptions().colors[1],
            Highcharts.getOptions().colors[2],
            Highcharts.getOptions().colors[3],
            Highcharts.getOptions().colors[4],
            Highcharts.getOptions().colors[5],
            Highcharts.getOptions().colors[6],
            Highcharts.getOptions().colors[7],
            Highcharts.getOptions().colors[8],

            ],
            plotOptions: {

              column: {

                cursor: 'pointer',
                pointPadding: 0.2,
                borderWidth: 0,
                colorByPoint: true,  // AQUI ES PARA ACTIVAR QUE SE PUEDA CAMBIAR EL COLOR DE CADA COLUMNA DE LA GRAFICA

              }
            },
            series: [
            {
              name: 'ANALISIS DE SUELO',
              data: [nitrogeno,fosforo,potasio,calcio,magnesio,azufre,zinc,boro,cobre]},



              {
                name: 'NUTRIENTE NECESARIO',
                data: [      <?php

                $connection=mysqli_connect("localhost","root","","siffa");
                $sql = "SELECT * FROM `cultivo` INNER JOIN requerimiento ON cultivo.idrequerimiento=requerimiento.idrequerimiento WHERE idcultivo='$cultivo_select'";
                $result = mysqli_query($connection,$sql);
                while ($registros2=mysqli_fetch_array($result))
                { ?>


                  <?php echo $registros2[5] ?>,
                  <?php echo $registros2[6] ?>,
                  <?php echo $registros2[7] ?>,
                  <?php echo $registros2[8] ?>,
                  <?php echo $registros2[9] ?>,
                  <?php echo $registros2[10] ?>,
                  <?php echo $registros2[11] ?>,
                  <?php echo $registros2[12] ?>,
                  <?php echo $registros2[13] ?>,
                  <?php
                }
                mysqli_close($connection);

                ?> ],
                colors: [ //AQUI PONGO UN COLOR DISTINTO A LA SEGUNDA COLUMNA PARA DIFERENCIAR
                'red'//verde

                ],

              }, ]
            });




</script>