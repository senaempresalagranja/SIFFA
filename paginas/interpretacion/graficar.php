<?php

$cultivo_select=$_POST["cultivo_select"];
// AQUI ABAJO LO QUE ESTOY HACIENDO ES PASANDO EL VALOR DE UNA VARIABLE DE PHP A JAVASCRIPT, LO QUE ESTOY HACIENDO ES QUE EL CODIGO FETCH ROW CADA VEZ QUE SE LLAMA ALMACENA UN VALOR ES DECIR EL PRIMER REGISTRO EN UNA VARIABLE EN ESTE CASO REGITROS, ENTONCES ESE REGISTRO LO ALMACENO EN UNA VARIABLE HASTA QUE NO TENGA MAS REGISTRO TOCARIA MANUALMENTE  Y AUTOMATICAMENTE ESE VALOR LO ESTOY PASANDO A UNA VARIABLE JAVA SCRIPT
//AQUI ABAJO LA VARIABLE CULTIVO ES PARA EL PLAN NUTRICIONAL PARA QUE SE MUESTRE EL NOMBRE
//CULTIVO





$connection=mysqli_connect("localhost","root","","siffa");
$sql = "SELECT * FROM `cultivo` INNER JOIN requerimiento ON cultivo.idrequerimiento=requerimiento.idrequerimiento WHERE idcultivo='$cultivo_select' ";
$result = mysqli_query($connection,$sql);
$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">

var cultivo_select="'.$cultivo_select.'";
var cultivo="'.$registros[1].'";
var requerimiento_nutriente_N="'.$registros[5].'";

var requerimiento_nutriente_P="'.$registros[6].'";

var requerimiento_nutriente_K="'.$registros[7].'";

var requerimiento_nutriente_Ca="'.$registros[8].'";

var requerimiento_nutriente_Mg="'.$registros[9].'";

var requerimiento_nutriente_S="'.$registros[10].'";

var requerimiento_nutriente_Zn="'.$registros[11].'";


var requerimiento_nutriente_B="'.$registros[12].'";

var requerimiento_nutriente_Cu="'.$registros[13].'";


</script>';


mysqli_close($connection);



// AQUI ABAJO ESTOY PASANDO VARIABLES DE PHP A JAVASCRIPT PARA PODER MANIPURARLAS Y COMPRARALAS AQUI ABAJO ES CON LA TABLA PH LOS PARAMETROS DE  PH 
$connection1=mysqli_connect("localhost","root","","siffa");
$sql1 = "SELECT * FROM  ph ";
$result1 = mysqli_query($connection1,$sql1);
$registros1=mysqli_fetch_row($result1);

echo '<script languaje="JavaScript">

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

// AQUI ABAJO ESTOY PASANDO VARIABLES DE PHP A JAVASCRIPT PARA PODER MANIPURARLAS Y COMPRARALAS AQUI ABAJO ES CON LA TABLA DISPONIBILIDAD SEGUN PH LOS PARAMETROS DE  DISPONIBILIDAD
$connection4=mysqli_connect("localhost","root","","siffa");
$sql4 = "SELECT * FROM `parametro_materia` ORDER BY Nombre_Materia,Idclima";
$result4 = mysqli_query($connection4,$sql4);


$registros4=mysqli_fetch_row($result4);


echo '<script languaje="JavaScript">

var clima_frio_numero_bajo_Co="'.$registros4[3].'";
var clima_frio_numero_alto_Co="'.$registros4[4].'";

</script>';



$registros4=mysqli_fetch_row($result4);

echo '<script languaje="JavaScript">

var clima_medio_numero_bajo_Co="'.$registros4[3].'";
var clima_medio_numero_alto_Co="'.$registros4[4].'";

</script>';



$registros4=mysqli_fetch_row($result4);
echo '<script languaje="JavaScript">

var clima_calido_numero_bajo_Co="'.$registros4[3].'";
var clima_calido_numero_alto_Co="'.$registros4[4].'";

</script>';





$registros4=mysqli_fetch_row($result4);
echo '<script languaje="JavaScript">

var clima_frio_numero_bajo_Mo="'.$registros4[3].'";
var clima_frio_numero_alto_Mo="'.$registros4[4].'";

</script>';


$registros4=mysqli_fetch_row($result4);
echo '<script languaje="JavaScript">

var clima_medio_numero_bajo_Mo="'.$registros4[3].'";
var clima_medio_numero_alto_Mo="'.$registros4[4].'";

</script>';


$registros4=mysqli_fetch_row($result4);
echo '<script languaje="JavaScript">

var clima_calido_numero_bajo_Mo="'.$registros4[3].'";
var clima_calido_numero_alto_Mo="'.$registros4[4].'";
</script>';



mysqli_close($connection4);







// AQUI ABAJO ESTOY PASANDO VARIABLES DE PHP A JAVASCRIPT PARA PODER MANIPURARLAS Y COMPRARALAS AQUI ABAJO ES CON LA TABLA DISPONIBILIDAD SEGUN PH LOS PARAMETROS DE  DISPONIBILIDAD
$connection5=mysqli_connect("localhost","root","","siffa");
$sql5 = "SELECT * FROM `parametros_nutrientes`";
$result5 = mysqli_query($connection5,$sql5);


$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_P="'.$registros4[2].'";
var numero_alto_P="'.$registros4[3].'";
</script>';



$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_K="'.$registros4[2].'";
var numero_alto_K="'.$registros4[3].'";
</script>';


$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_Ca="'.$registros4[2].'";
var numero_alto_Ca="'.$registros4[3].'";
</script>';



$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_Mg="'.$registros4[2].'";
var numero_alto_Mg="'.$registros4[3].'";
</script>';



$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_Na="'.$registros4[2].'";
var numero_alto_Na="'.$registros4[3].'";
</script>';



$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_Al="'.$registros4[2].'";
var numero_alto_Al="'.$registros4[3].'";
</script>';



$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_S="'.$registros4[2].'";
var numero_alto_S="'.$registros4[3].'";
</script>';



$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_Fe="'.$registros4[2].'";
var numero_alto_Fe="'.$registros4[3].'";
</script>';



$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_Mn="'.$registros4[2].'";
var numero_alto_Mn="'.$registros4[3].'";
</script>';



$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_Cu="'.$registros4[2].'";
var numero_alto_Cu="'.$registros4[3].'";
</script>';



$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_B="'.$registros4[2].'";
var numero_alto_B="'.$registros4[3].'";
</script>';


$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_B="'.$registros4[2].'";
var numero_alto_B="'.$registros4[3].'";
</script>';


$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_Zn="'.$registros4[2].'";
var numero_alto_Zn="'.$registros4[3].'";
</script>';



$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_CICE="'.$registros4[2].'";
var numero_alto_CICE="'.$registros4[3].'";
</script>';


$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_porcentaje_AL="'.$registros4[2].'";
var numero_alto_porcentaje_AL="'.$registros4[3].'";
</script>';


$registros4=mysqli_fetch_row($result5);

echo '<script languaje="JavaScript">

var numero_bajo_porcentaje_Na="'.$registros4[2].'";
var numero_alto_porcentaje_Na="'.$registros4[3].'";



</script>';


mysqli_close($connection5);

$connection6=mysqli_connect("localhost","root","","siffa");
$sql6 = "SELECT * FROM `parametros_encalamiento`";
$result6 = mysqli_query($connection6,$sql6);


$registros5=mysqli_fetch_row($result6);

echo '<script languaje="JavaScript">

var Encalamiento_PH="'.$registros5[1].'";
var Encalamiento_MO="'.$registros5[2].'";


</script>';


?>








<script>

  $(function () {

 var caja_fertilizante=document.getElementById("caja_fertilizante").style.display="block";
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
    var CICE=parseFloat(document.getElementById('CICE').value=Al+Ca+Mg+K+Na).toFixed(2);
    var S=parseFloat(document.getElementById('S').value);
    var Fe=parseFloat(document.getElementById('Fe').value);
    var Mn=parseFloat(document.getElementById('Mn').value);
    var Cu=parseFloat(document.getElementById('Cu').value);
    var Zn=parseFloat(document.getElementById('Zn').value);
    var B=parseFloat(document.getElementById('B').value);





    var porcentaje_Al=parseFloat(document.getElementById('porcentaje_Al').value=(Al/CICE*100).toFixed(2));
    var porcentaje_Na=parseFloat(document.getElementById('porcentaje_Na').value=(Na/CICE*100).toFixed(2));

    var CE=parseFloat(document.getElementById('CE').value);


    // AQUI ABAJO ALMACENO LO QUE DIGITEN EN LA TABLA PEQUEÑA

    var clima=document.getElementById('clima').value;
    var profundidad=parseFloat(document.getElementById('profundidad').value);
    var densidad_aparente=parseFloat(document.getElementById('densidad_aparente').value);
    var hectarea=parseFloat(document.getElementById('hectarea').value);


    // AQUI ABAJO GUARDO EL CONTENIDO DE LOS BOTONES DE NIVELES PARA DESPUES MANIPULARLOS SI ES MUCHO ALTO BAJO ETC

    var nivel_PH=document.getElementById('nivel_PH').value;
    var nivel_MO=document.getElementById('nivel_MO').value;
    var nivel_CO=document.getElementById('nivel_CO').value
    var nivel_P=document.getElementById('nivel_P').value;
    var nivel_Al=document.getElementById('nivel_Al').value;
    var nivel_Ca=document.getElementById('nivel_Ca').value;
    var nivel_Mg=document.getElementById('nivel_Mg').value;
    var nivel_K=document.getElementById('nivel_K').value;
    var nivel_Na=document.getElementById('nivel_Na').value;
    var nivel_CICE=document.getElementById('nivel_CICE').value;
    var nivel_S=document.getElementById('nivel_S').value;
    var nivel_Fe=document.getElementById('nivel_Fe').value;
    var nivel_Mn=document.getElementById('nivel_Mn').value;
    var nivel_Cu=document.getElementById('nivel_Cu').value;
    var nivel_Zn=document.getElementById('nivel_Zn').value;
    var nivel_B=document.getElementById('nivel_B').value;
    var porcentaje_nivel_Al=document.getElementById('porcentaje_nivel_Al').value;
    var porcentaje_nivel_Na=document.getElementById('porcentaje_nivel_Na').value;
    var nivel_CE=document.getElementById('nivel_CE').value;




    // AQUI ABAJO SE ALMACENAN LOS COLORES DE FONDO DE CADA COLUMNA PARA QUE PUEDAN CAMBIAR DINAMICAMENTE

    var columna_1="#4572A7"; //COLUMNA 1
    var columna_2="#AA4643"; //COLUMNA 2
    var columna_3="#89A54E"; //COLUMNA 3
    var columna_4="#80699B"; //COLUMNA 4
    var columna_5="#3D96AE"; //COLUMNA 5
    var columna_6="#DB843D"; //COLUMNA 6
    var columna_7="#92A8CD"; //COLUMNA 7
    var columna_8="#A47D7C"; //COLUMNA 8
    var columna_9="#B5CA92"; //COLUMNA 9
    var columna_10="#3bbd91";//COLUMNA 10
    var columna_11="#ebf31c";//COLUMNA 11
    var columna_12="#1162e7";//COLUMNA 12
    var columna_13="#3000ff";//COLUMNA 13
    var columna_PH="white"






    // AQUI ABAJO HAGO LAS CONDICIONALES PARA EL PH SEGUN LOS NIVELES SACADOS DE FUENTES CONFIABLES
    if (PH<ultra_acido_numero_alto) {
      var nivel_PH=document.getElementById('nivel_PH').style.background="#ff0000";
      var nivel_PH=document.getElementById('nivel_PH').style.color="white";
      var nivel_PH=document.getElementById('nivel_PH').value=ultra_acido_calificacion;
      var columna_PH="#ff0000";
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
      var nivel_PH=document.getElementById('nivel_PH').style.background="#ff7e00";
      var nivel_PH=document.getElementById('nivel_PH').value=Extramadamente_acido_calificacion;
      var columna_PH="#ff7e00";
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
      var nivel_PH=document.getElementById('nivel_PH').style.background="#ff9c00";
      var nivel_PH=document.getElementById('nivel_PH').value=muy_fuertemente_acido_calificacion;
      var columna_PH="#ff9c00";
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
      var nivel_PH=document.getElementById('nivel_PH').style.background="#dcda1c";
      var nivel_PH=document.getElementById('nivel_PH').value=fuertemente_acido_calificacion;
      var columna_PH="#dcda1c";
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
      var nivel_PH=document.getElementById('nivel_PH').style.background="#aead30";
      var nivel_PH=document.getElementById('nivel_PH').value=Moderadamente_acido_calificacion;
      var columna_PH="#aead30";
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
      var nivel_PH=document.getElementById('nivel_PH').style.background="#86b021";
      var nivel_PH=document.getElementById('nivel_PH').value=Ligeramente_acido_calificacion;
      var columna_PH="#86b021";
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

      var nivel_PH=document.getElementById('nivel_PH').style.background="#0c6800";
      var nivel_PH=document.getElementById('nivel_PH').style.color="white";
      var nivel_PH=document.getElementById('nivel_PH').value=neutro_calificacion;
      var columna_PH="#0c6800";
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
      var nivel_PH=document.getElementById('nivel_PH').style.background="#00683d";
      var nivel_PH=document.getElementById('nivel_PH').style.color="white";
      var nivel_PH=document.getElementById('nivel_PH').value=Ligeramente_alcalino_calificacion;
      var columna_PH="#00683d";
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

      var nivel_PH=document.getElementById('nivel_PH').style.background="#00c69a";
      var nivel_PH=document.getElementById('nivel_PH').value=Moderadamente_alcalino_calificacion;
      var columna_PH="#00c69a";
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
      var nivel_PH=document.getElementById('nivel_PH').style.background="#009cb8";
      var nivel_PH=document.getElementById('nivel_PH').style.color="white";
      var nivel_PH=document.getElementById('nivel_PH').value=Fuertemente_alcalino_calificacion;
      var columna_PH="#009cb8";
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
      var nivel_PH=document.getElementById('nivel_PH').style.background="#009cb8";
      var nivel_PH=document.getElementById('nivel_PH').style.color="white";
      var nivel_PH=document.getElementById('nivel_PH').value=Extremadanamente_alcalino_calificacion;
      var columna_PH="#009cb8";
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

    // AQUI ABAJO ES EL ALERT PARA EL ACONDICIONAMIENTO CUANDO EL PH Y EL %CO SON DEFICIENTES
    if (PH < Encalamiento_PH && MO < Encalamiento_MO) {
      swal({
        title: "Desea aplicar Encalamiento",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, Encalar",
        cancelButtonText: "No, Cancelar",
        closeOnConfirm: true,
        closeOnCancel: false
      },
      function(isConfirm){
        if (isConfirm) {
          $("#mostrarmodal").modal("show");
        } else {
          swal("Cancelado", "Encalamiento No Realizado", "error");
        }
      });

    };

    // AQUI ABAJO ES PARA SELECCIONAR EL CLIMA Y SEGUN EL CLIMA LA VARIBLE RM CAMBIA
    if (clima == "medio") {
      var RM=clima_medio_rm;

    } else if (clima == "calido"){
      var RM=clima_calido_rm;

    } else if (clima == "frio"){
      var RM=clima_frio_rm;

    };

    //AQUI ABAJO COMIENZA LOS NIVELES DE CADA NUTRIENTE BAJO MEDIO ALTO

    //AQUI ABAJO COMIENZA LA MATERIA ORGANICA QUE SUS NIVELES CAMBIAN SEGUN EL CLIMA

    if (clima == "medio") {

      if (MO < clima_medio_numero_bajo_Mo) {

        var nivel_MO=document.getElementById('nivel_MO').style.background="yellow";
        var nivel_MO=document.getElementById('nivel_MO').style.color="black";
        var nivel_MO=document.getElementById('nivel_MO').value="Bajo";

      }else if (MO >=clima_medio_numero_bajo_Mo && MO <=clima_medio_numero_alto_Mo) {

        var nivel_MO=document.getElementById('nivel_MO').style.background="green";
        var nivel_MO=document.getElementById('nivel_MO').style.color="white";
        var nivel_MO=document.getElementById('nivel_MO').value="Medio";

      }else if (MO >clima_medio_numero_alto_Mo) {
        var nivel_MO=document.getElementById('nivel_MO').style.background="red";
        var nivel_MO=document.getElementById('nivel_MO').style.color="white";
        var nivel_MO=document.getElementById('nivel_MO').value="Alto";
      };



    } 


     if (clima == "calido"){



      if (MO <clima_calido_numero_bajo_Mo) {

        var nivel_MO=document.getElementById('nivel_MO').style.background="yellow";
        var nivel_MO=document.getElementById('nivel_MO').style.color="black";
        var nivel_MO=document.getElementById('nivel_MO').value="Bajo";


      }else if (MO =>clima_calido_numero_bajo_Mo && MO<=clima_calido_numero_alto_Mo) {

        var nivel_MO=document.getElementById('nivel_MO').style.background="green";
        var nivel_MO=document.getElementById('nivel_MO').style.color="white";
        var nivel_MO=document.getElementById('nivel_MO').value="Medio";

      }else if (MO > clima_calido_numero_alto_Mo) {

        var nivel_MO=document.getElementById('nivel_MO').style.background="green";
        var nivel_MO=document.getElementById('nivel_MO').style.color="white";
        var nivel_MO=document.getElementById('nivel_MO').value="Medio";
      };



    }  if (clima == "frio"){


      if(MO<clima_frio_numero_bajo_Mo){

        var nivel_MO=document.getElementById('nivel_MO').style.background="yellow";
        var nivel_MO=document.getElementById('nivel_MO').style.color="black";
        var nivel_MO=document.getElementById('nivel_MO').value="Bajo";

      }if (MO>=clima_frio_numero_bajo_Mo && MO<=clima_frio_numero_alto_Mo) {

        var nivel_MO=document.getElementById('nivel_MO').style.background="green";
        var nivel_MO=document.getElementById('nivel_MO').style.color="white";
        var nivel_MO=document.getElementById('nivel_MO').value="Medio";
      }else if (MO>clima_frio_numero_alto_Mo) {

        var nivel_MO=document.getElementById('nivel_MO').style.background="red";
        var nivel_MO=document.getElementById('nivel_MO').style.color="white";
        var nivel_MO=document.getElementById('nivel_MO').value="Alto";
      };
    };



    //AQUI COMIENZA EL CARBONO ORGANICO QUE AL IGUAL QUE LA MATERIA ORGANICA CAMBIA SUS NIVELES SEGUN EL CLIMA

    if (clima == "medio") {


      if (CO<clima_medio_numero_bajo_Co) {

        var nivel_CO=document.getElementById('nivel_CO').style.background="yellow";
        var nivel_CO=document.getElementById('nivel_CO').style.color="black";
        var nivel_CO=document.getElementById('nivel_CO').value="Bajo";

      }else if (CO>=clima_medio_numero_bajo_Co && CO<=clima_medio_numero_alto_Co){

        var nivel_CO=document.getElementById('nivel_CO').style.background="green";
        var nivel_CO=document.getElementById('nivel_CO').style.color="white";
        var nivel_CO=document.getElementById('nivel_CO').value="Medio";


      }else if (CO>clima_medio_numero_alto_Co) {

        var nivel_CO=document.getElementById('nivel_CO').style.background="red";
        var nivel_CO=document.getElementById('nivel_CO').style.color="white";
        var nivel_CO=document.getElementById('nivel_CO').value="Alto";

      };


    } else if (clima == "calido"){

      if (CO<clima_calido_numero_bajo_Co) {

        var nivel_CO=document.getElementById('nivel_CO').style.background="yellow";
        var nivel_CO=document.getElementById('nivel_CO').style.color="black";
        var nivel_CO=document.getElementById('nivel_CO').value="Bajo";


      }else if(CO>=clima_calido_numero_bajo_Co && CO<=clima_calido_numero_alto_Co){

        var nivel_CO=document.getElementById('nivel_CO').style.background="green";
        var nivel_CO=document.getElementById('nivel_CO').style.color="white";
        var nivel_CO=document.getElementById('nivel_CO').value="Medio";


      }else if(CO>clima_calido_numero_alto_Co){

        var nivel_CO=document.getElementById('nivel_CO').style.background="red";
        var nivel_CO=document.getElementById('nivel_CO').style.color="white";
        var nivel_CO=document.getElementById('nivel_CO').value="Alto";

      }


    } else if (clima == "frio"){


      if(CO<clima_frio_numero_bajo_Co){
        var nivel_CO=document.getElementById('nivel_CO').style.background="yellow";
        var nivel_CO=document.getElementById('nivel_CO').style.color="black";
        var nivel_CO=document.getElementById('nivel_CO').value="Bajo";


      }else if (CO>=clima_frio_numero_bajo_Co && CO<=clima_frio_numero_alto_Co) {

        var nivel_CO=document.getElementById('nivel_CO').style.background="green";
        var nivel_CO=document.getElementById('nivel_CO').style.color="white";
        var nivel_CO=document.getElementById('nivel_CO').value="Medio";
      }else if (CO > clima_frio_numero_alto_Co) {

        var nivel_CO=document.getElementById('nivel_CO').style.background="red";
        var nivel_CO=document.getElementById('nivel_CO').style.color="white";
        var nivel_CO=document.getElementById('nivel_CO').value="Alto";
      };
    };




    //NUTRIENTE FOSFORO
    if (P < numero_bajo_P) {

      var nivel_P=document.getElementById('nivel_P').style.background="yellow";
      var nivel_P=document.getElementById('nivel_P').style.color="black";
      var nivel_P=document.getElementById('nivel_P').value="Bajo";

    }else if (P>=numero_bajo_P && P<=numero_alto_P) {
      var nivel_P=document.getElementById('nivel_P').style.background="green";
      var nivel_P=document.getElementById('nivel_P').style.color="white";
      var nivel_P=document.getElementById('nivel_P').value="Medio";

    } else if (P>numero_alto_P) {

      var nivel_P=document.getElementById('nivel_P').style.background="red";
      var nivel_P=document.getElementById('nivel_P').style.color="white";
      var nivel_P=document.getElementById('nivel_P').value="Alto";
    };



    //NUTRIENTE POTASIO

    if (K <numero_bajo_K) {
      var nivel_K=document.getElementById('nivel_K').style.background="yellow";
      var nivel_K=document.getElementById('nivel_K').style.color="black";
      var nivel_K=document.getElementById('nivel_K').value="Bajo";

    }else if (K>=numero_bajo_K && K<=numero_alto_K) {
      var nivel_K=document.getElementById('nivel_K').style.background="green";
      var nivel_K=document.getElementById('nivel_K').style.color="white";
      var nivel_K=document.getElementById('nivel_K').value="Medio";


    }else if (K>numero_alto_K) {
      var nivel_K=document.getElementById('nivel_K').style.background="red";
      var nivel_K=document.getElementById('nivel_K').style.color="white";
      var nivel_K=document.getElementById('nivel_K').value="Alto";

    };



    //AQUI ABAJO COMIENZA EL NUTRIENTE CALCIO
    if (Ca<numero_bajo_Ca) {
      var nivel_Ca=document.getElementById('nivel_Ca').style.background="yellow";
      var nivel_Ca=document.getElementById('nivel_Ca').style.color="black";
      var nivel_Ca=document.getElementById('nivel_Ca').value="Bajo";

    } else if (Ca >=numero_bajo_Ca && Ca<=numero_alto_Ca) {
      var nivel_Ca=document.getElementById('nivel_Ca').style.background="green";
      var nivel_Ca=document.getElementById('nivel_Ca').style.color="white";
      var nivel_Ca=document.getElementById('nivel_Ca').value="Medio";

    }else if (Ca >numero_alto_Ca) {
      var nivel_Ca=document.getElementById('nivel_Ca').style.background="red";
      var nivel_Ca=document.getElementById('nivel_Ca').style.color="white";
      var nivel_Ca=document.getElementById('nivel_Ca').value="Alto";

    };



    //AQUI ABAJO COMIENZA EL NUTRIENTE MAGNESIO
    if (Mg<numero_bajo_Mg) {
      var nivel_Mg=document.getElementById('nivel_Mg').style.background="yellow";
      var nivel_Mg=document.getElementById('nivel_Mg').style.color="black";
      var nivel_Mg=document.getElementById('nivel_Mg').value="Bajo";

    }else if (Mg>=numero_bajo_Mg && Mg<=numero_alto_Mg) {
      var nivel_Mg=document.getElementById('nivel_Mg').style.background="green";
      var nivel_Mg=document.getElementById('nivel_Mg').style.color="white";
      var nivel_Mg=document.getElementById('nivel_Mg').value="Medio";

    }else if (Mg>numero_alto_Mg) {
      var nivel_Mg=document.getElementById('nivel_Mg').style.background="red";
      var nivel_Mg=document.getElementById('nivel_Mg').style.color="white";
      var nivel_Mg=document.getElementById('nivel_Mg').value="Alto";

    };



    //NUTRIENTE SODIO

    if (Na <numero_bajo_Na) {
      var nivel_Na=document.getElementById('nivel_Na').style.background="yellow";
      var nivel_Na=document.getElementById('nivel_Na').style.color="black";
      var nivel_Na=document.getElementById('nivel_Na').value="Bajo";

    }else if (Na>=numero_bajo_Na && Na<=numero_alto_Na) {
      var nivel_Na=document.getElementById('nivel_Na').style.background="green";
      var nivel_Na=document.getElementById('nivel_Na').style.color="white";
      var nivel_Na=document.getElementById('nivel_Na').value="Medio";

    }else if(Na>numero_alto_Na){
      var nivel_Na=document.getElementById('nivel_Na').style.background="#ff00ff";
      var nivel_Na=document.getElementById('nivel_Na').style.color="white";
      var nivel_Na=document.getElementById('nivel_Na').value="Alto";

    };


    //AQUI ABAJO VA EL ALUMINIIO

    if (Al<numero_bajo_Al) {
      var nivel_Al=document.getElementById('nivel_Al').style.background="yellow";
      var nivel_Al=document.getElementById('nivel_Al').style.color="black";
      var nivel_Al=document.getElementById('nivel_Al').value="Bajo";
    }else if (Al>=numero_bajo_Al && Al<=numero_alto_Al) {
      var nivel_Al=document.getElementById('nivel_Al').style.background="green";
      var nivel_Al=document.getElementById('nivel_Al').style.color="white";
      var nivel_Al=document.getElementById('nivel_Al').value="Medio";

    }else if (Al >numero_alto_Al){
      var nivel_Al=document.getElementById('nivel_Al').style.background="#ff00ff";
      var nivel_Al=document.getElementById('nivel_Al').style.color="white";
      var nivel_Al=document.getElementById('nivel_Al').value="Alto";

    };




    //AQUI ABAJO COMIENZA EL NUTRIENTE AZUFRE

    if (S <numero_bajo_S) {
      var nivel_S=document.getElementById('nivel_S').style.background="yellow";
      var nivel_S=document.getElementById('nivel_S').style.color="black";
      var nivel_S=document.getElementById('nivel_S').value="Bajo";

    }else if (S>=numero_bajo_S && S<=numero_alto_S) {
      var nivel_S=document.getElementById('nivel_S').style.background="green";
      var nivel_S=document.getElementById('nivel_S').style.color="white";
      var nivel_S=document.getElementById('nivel_S').value="Medio";

    }else if(S >numero_alto_S){
      var nivel_S=document.getElementById('nivel_S').style.background="red";
      var nivel_S=document.getElementById('nivel_S').style.color="white";
      var nivel_S=document.getElementById('nivel_S').value="Alto";
    };



    //AQUI ES EL NUTRIENTE HIERRO

    if (Fe<numero_bajo_Fe) {
      var nivel_Fe=document.getElementById('nivel_Fe').style.background="yellow";
      var nivel_Fe=document.getElementById('nivel_Fe').style.color="black";
      var nivel_Fe=document.getElementById('nivel_Fe').value="Bajo";

    }else if (Fe >=numero_bajo_Fe && Fe <=numero_alto_Fe) {
      var nivel_Fe=document.getElementById('nivel_Fe').style.background="green";
      var nivel_Fe=document.getElementById('nivel_Fe').style.color="white";
      var nivel_Fe=document.getElementById('nivel_Fe').value="Medio";

    }else if (Fe >numero_alto_Fe) {
      var nivel_Fe=document.getElementById('nivel_Fe').style.background="red";
      var nivel_Fe=document.getElementById('nivel_Fe').style.color="white";
      var nivel_Fe=document.getElementById('nivel_Fe').value="Alto";

    };



    //AQUI ABAJO ES EL NUTRIENTE MANGANESO
    if (Mn<numero_bajo_Mn) {
      var nivel_Mn=document.getElementById('nivel_Mn').style.background="yellow";
      var nivel_Mn=document.getElementById('nivel_Mn').style.color="black";
      var nivel_Mn=document.getElementById('nivel_Mn').value="Bajo";

    }else if (Mn >=numero_bajo_Mn && Mn <=numero_alto_Mn) {
      var nivel_Mn=document.getElementById('nivel_Mn').style.background="green";
      var nivel_Mn=document.getElementById('nivel_Mn').style.color="white";
      var nivel_Mn=document.getElementById('nivel_Mn').value="Medio";

    }else if(Mn>numero_alto_Mn){

      var nivel_Mn=document.getElementById('nivel_Mn').style.background="red";
      var nivel_Mn=document.getElementById('nivel_Mn').style.color="white";
      var nivel_Mn=document.getElementById('nivel_Mn').value="Alto";
    };



    //AQUI ABAJO COMIENZA EL NUTRIENTE COBRE

    if (Cu <numero_bajo_Cu) {
      var nivel_Cu=document.getElementById('nivel_Cu').style.background="yellow";
      var nivel_Cu=document.getElementById('nivel_Cu').style.color="black";
      var nivel_Cu=document.getElementById('nivel_Cu').value="Bajo";

    }else if (Cu>=numero_bajo_Cu && Cu <=numero_alto_Cu){
      var nivel_Cu=document.getElementById('nivel_Cu').style.background="green";
      var nivel_Cu=document.getElementById('nivel_Cu').style.color="white";
      var nivel_Cu=document.getElementById('nivel_Cu').value="Medio";

    }else if(Cu>numero_alto_Cu){

      var nivel_Cu=document.getElementById('nivel_Cu').style.background="red";
      var nivel_Cu=document.getElementById('nivel_Cu').style.color="white";
      var nivel_Cu=document.getElementById('nivel_Cu').value="Alto";
    };



    //AQUI ABAJO COMIENZA BORO

    if(B<numero_bajo_B){
      var nivel_B=document.getElementById('nivel_B').style.background="yellow";
      var nivel_B=document.getElementById('nivel_B').style.color="black";
      var nivel_B=document.getElementById('nivel_B').value="Bajo";

    }else if (B<=numero_bajo_B && B <=numero_alto_B) {

      var nivel_B=document.getElementById('nivel_B').style.background="green";
      var nivel_B=document.getElementById('nivel_B').style.color="white";
      var nivel_B=document.getElementById('nivel_B').value="Medio";
    }else if (B>numero_alto_B) {

      var nivel_B=document.getElementById('nivel_B').style.background="red";
      var nivel_B=document.getElementById('nivel_B').style.color="white";
      var nivel_B=document.getElementById('nivel_B').value="Alto";
    };




    //AQUI ABAJO VA EL NUTRIENTE ZINC

    if (Zn<numero_bajo_Zn) {

      var nivel_Zn=document.getElementById('nivel_Zn').style.background="yellow";
      var nivel_Zn=document.getElementById('nivel_Zn').style.color="black";
      var nivel_Zn=document.getElementById('nivel_Zn').value="Bajo";
    }else if (Zn>=numero_bajo_Zn && Zn<=numero_alto_Zn) {

      var nivel_Zn=document.getElementById('nivel_Zn').style.background="green";
      var nivel_Zn=document.getElementById('nivel_Zn').style.color="white";
      var nivel_Zn=document.getElementById('nivel_Zn').value="Medio";
    }else if (Zn >numero_alto_Zn) {

      var nivel_Zn=document.getElementById('nivel_Zn').style.background="red";
      var nivel_Zn=document.getElementById('nivel_Zn').style.color="white";
      var nivel_Zn=document.getElementById('nivel_Zn').value="Alto";
    };





    //AQUI ABAJO ES LA CAPACIDAD DE INTERCAMBIO CATIONICO

    if (CICE<numero_bajo_CICE) {
      var nivel_CICE=document.getElementById('nivel_CICE').style.background="yellow";
      var nivel_CICE=document.getElementById('nivel_CICE').style.color="black";
      var nivel_CICE=document.getElementById('nivel_CICE').value="Bajo";

    }else if (CICE>=numero_bajo_CICE && CICE<=numero_alto_CICE) {

      var nivel_CICE=document.getElementById('nivel_CICE').style.background="green";
      var nivel_CICE=document.getElementById('nivel_CICE').style.color="white";
      var nivel_CICE=document.getElementById('nivel_CICE').value="Medio";
    }else if (CICE >numero_alto_CICE) {

      var nivel_CICE=document.getElementById('nivel_CICE').style.background="red";
      var nivel_CICE=document.getElementById('nivel_CICE').style.color="white";
      var nivel_CICE=document.getElementById('nivel_CICE').value="Alto";
    };





    //AQUI ABAJO VA EL PORCENTAJE DE SATURACION DEL ALUMINIO

    if (porcentaje_Al<numero_bajo_porcentaje_AL) {

      var porcentaje_nivel_Al=document.getElementById('porcentaje_nivel_Al').style.background="yellow";
      var porcentaje_nivel_Al=document.getElementById('porcentaje_nivel_Al').style.color="black";
      var porcentaje_nivel_Al=document.getElementById('porcentaje_nivel_Al').value="Bajo";
    }else if (porcentaje_Al>=numero_bajo_porcentaje_AL && porcentaje_Al<=numero_bajo_porcentaje_AL) {

      var porcentaje_nivel_Al=document.getElementById('porcentaje_nivel_Al').style.background="green";
      var porcentaje_nivel_Al=document.getElementById('porcentaje_nivel_Al').style.color="white";
      var porcentaje_nivel_Al=document.getElementById('porcentaje_nivel_Al').value="Medio";
    }else if (porcentaje_Al>numero_bajo_porcentaje_AL) {

      var porcentaje_nivel_Al=document.getElementById('porcentaje_nivel_Al').style.background="red";
      var porcentaje_nivel_Al=document.getElementById('porcentaje_nivel_Al').style.color="white";
      var porcentaje_nivel_Al=document.getElementById('porcentaje_nivel_Al').value="Alto";
    };


    //AQUI ABAJO VA EL PORCENTAJE DE SATURACION DEL SODIO

    if (porcentaje_Na<numero_bajo_porcentaje_Na) {

      var porcentaje_nivel_Na=document.getElementById('porcentaje_nivel_Na').style.background="yellow";
      var porcentaje_nivel_Na=document.getElementById('porcentaje_nivel_Na').style.color="black";
      var porcentaje_nivel_Na=document.getElementById('porcentaje_nivel_Na').value="Bajo";
    }else if (porcentaje_Na>=numero_bajo_porcentaje_Na && porcentaje_Na<=numero_alto_porcentaje_Na) {

      var porcentaje_nivel_Na=document.getElementById('porcentaje_nivel_Na').style.background="green";
      var porcentaje_nivel_Na=document.getElementById('porcentaje_nivel_Na').style.color="white";
      var porcentaje_nivel_Na=document.getElementById('porcentaje_nivel_Na').value="Medio";
    }else if (porcentaje_Na>numero_alto_porcentaje_Na) {

      var porcentaje_nivel_Na=document.getElementById('porcentaje_nivel_Na').style.background="red";
      var porcentaje_nivel_Na=document.getElementById('porcentaje_nivel_Na').style.color="white";
      var porcentaje_nivel_Na=document.getElementById('porcentaje_nivel_Na').value="Alto";


    };

if (CE<normal_numero_bajo_CE) {

var nivel_CE=document.getElementById("nivel_CE").style.background="green";
var nivel_CE=document.getElementById("nivel_CE").style.color="white";
var nivel_CE=document.getElementById("nivel_CE").value=normal_calificacion_CE;



}else if (CE>=Salino_numero_bajo_CE) {
var nivel_CE=document.getElementById("nivel_CE").style.background="#747373";
var nivel_CE=document.getElementById("nivel_CE").style.color="white";
var nivel_CE=document.getElementById("nivel_CE").value=Salino_calificacion_CE;

}else if (CE<Sodico_numero_bajo_CE) {

var nivel_CE=document.getElementById("nivel_CE").style.background="#5E2727";
var nivel_CE=document.getElementById("nivel_CE").style.color="white";
var nivel_CE=document.getElementById("nivel_CE").value=Sodico_calificacion_CE;


}

    //AQUI ABAJO ES PARA MOSTRAR LA BARRA DE NIVELES POR QUE SE ENCUENTRA EN UNA OPACITY

    var fila_nivel=document.getElementById('fila_nivel').style.display="table-row"
    var fila_nivel1=document.getElementById('fila_nivel1').style.display="table-row"


    // AQUI ABAJO COMIENZA LAS FORMULAS TODAS LAS FORMULAS PARA HAYAR CADA ELEMENTO

    // PHA ES PESO DE HECTAREA ARABLE KG
    var pha=(10000*profundidad)*(densidad_aparente)*1000;
    // fa ES FACTOR DE AREA

    var fa=pha/1000000;

    // AQUI ABAJO ES PARA GUARDAR EL NITROGENO ORGANICO
    var nitrogeno_organico_total=MO/20;

    //AQUI ABAJO ES LA MATERIA ORGANICA
    var materia_organica=CO*1724;




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

    //AQUI COLOCAMOS LOS PORCENTAJES DE  SATURACION DE CADA ELEMENTO
    var porcentaje_saturacion_Al=Al/CICE*100;
    var porcentaje_saturacion_Na=Na/CICE*100;
    var porcentaje_saturacion_K=K/CICE*100;
    var porcentaje_saturacion_Ca=Ca/CICE*100;
    var porcentaje_saturacion_Mg=Mg/CICE*100;





    //AQUI ABAJO MUESTRO LA TABLA QUE ESTABA CON UN DISPLAY NONE OSEA NO SE VISUALIZA PARA EL CLIENTE HASTA QUE LLENE TODOS LOS CAMPOS

    document.getElementById('requisito_tabla').style.display="table"

    //AQUI EN EL toFixed(numero) ES EL NUMERO DE DESCIMALES QUE VA A TENER ES NUMERO EN ESTE CASO ES UN SOLO EJEMPLO SI TENGO UN NUMERO DECIMAL 1.2345 SOLO ME DEVOLVERA 1.2

    //ABAJO DEFINO LAS VARABLES DE LOS VALORES DE CADA INPUT DE TIPO BOTON PARA QUE CAMBIEN DINAMICAMENTR CON EL RESULTADO QUE EL USUARIO HAYA ESCRITO SOY EL MEJOR XD
    parseInt($("#tabla_N").text(nitrogeno.toFixed(1)).show());
    parseInt($("#tabla_N1").text(nitrogeno.toFixed(1)).show());

    parseInt($("#tabla_P").text(fosforo.toFixed(1)).show());
    parseInt($("#tabla_P1").text(fosforo.toFixed(1)).show());

    parseInt($("#tabla_K").text(potasio.toFixed(1)).show());
    parseInt($("#tabla_K1").text(potasio.toFixed(1)).show());

    parseInt($("#tabla_Ca").text(calcio.toFixed(1)).show());
    parseInt($("#tabla_Ca1").text(calcio.toFixed(1)).show());

    parseInt($("#tabla_Mg").text(magnesio.toFixed(1)).show());
    parseInt($("#tabla_Mg1").text(magnesio.toFixed(1)).show());


    parseInt($("#tabla_S").text(azufre.toFixed(1)).show());
    parseInt($("#tabla_S1").text(azufre.toFixed(1)).show());


    parseInt($("#tabla_Zn").text(zinc.toFixed(1)).show());
    parseInt($("#tabla_Zn1").text(zinc.toFixed(1)).show());

    parseInt($("#tabla_B").text(azufre.toFixed(1)).show());
    parseInt($("#tabla_B1").text(azufre.toFixed(1)).show());


    parseInt($("#tabla_Cu").text(cobre.toFixed(1)).show());
    parseInt($("#tabla_Cu1").text(cobre.toFixed(1)).show());
    // LAS VARIABLES DE ABAJO nutriente_N  Y LOS DEMAS SON UTILIZADAS PARA PONERLOS EN LA TABLA
    // COMPARATIVA PERO TAMBIEN LO UTLIZO PARA LA TORTA DE PORCENTAJE NECESARIO


    var nutriente_N=parseInt(document.getElementById("nutriente_necesario_N").value=requerimiento_nutriente_N);
    parseInt($("#nutriente_necesario_N").text(nutriente_N));
    parseInt($("#nutriente_necesario_N1").text(nutriente_N));
    var nutriente_P=parseInt(document.getElementById("nutriente_necesario_P").value=requerimiento_nutriente_P);
    parseInt($("#nutriente_necesario_P").text(nutriente_P));
    parseInt($("#nutriente_necesario_P1").text(nutriente_P));
    var nutriente_K=parseInt(document.getElementById("nutriente_necesario_K").value=requerimiento_nutriente_K);
    parseInt($("#nutriente_necesario_K").text(nutriente_K));
    parseInt($("#nutriente_necesario_K1").text(nutriente_K));
    var nutriente_Ca=parseInt(document.getElementById("nutriente_necesario_Ca").value=requerimiento_nutriente_Ca);
    parseInt($("#nutriente_necesario_Ca").text(nutriente_Ca));
    parseInt($("#nutriente_necesario_Ca1").text(nutriente_Ca));
    var nutriente_Mg=parseInt(document.getElementById("nutriente_necesario_Mg").value=requerimiento_nutriente_Mg);
    parseInt($("#nutriente_necesario_Mg").text(nutriente_Mg));
    parseInt($("#nutriente_necesario_Mg1").text(nutriente_Mg));
    var nutriente_S=parseInt(document.getElementById("nutriente_necesario_S").value=requerimiento_nutriente_S);
    parseInt($("#nutriente_necesario_S").text(nutriente_S));
    parseInt($("#nutriente_necesario_S1").text(nutriente_S));
    var nutriente_Zn=parseInt(document.getElementById("nutriente_necesario_Zn").value=requerimiento_nutriente_Zn);
    parseInt($("#nutriente_necesario_Zn").text(nutriente_Zn));
    parseInt($("#nutriente_necesario_Zn1").text(nutriente_Zn));
    var nutriente_B=parseInt(document.getElementById("nutriente_necesario_B").value=requerimiento_nutriente_B);
     parseInt($("#nutriente_necesario_B").text(nutriente_B));
     parseInt($("#nutriente_necesario_B1").text(nutriente_B));
    var nutriente_Cu=parseInt(document.getElementById("nutriente_necesario_Cu").value=requerimiento_nutriente_Cu);
     parseInt($("#nutriente_necesario_Cu").text(nutriente_Cu));
     parseInt($("#nutriente_necesario_Cu1").text(nutriente_Cu));


    var diferencia_N=document.getElementById("diferencia_N").value=requerimiento_nutriente_N-nitrogeno.toFixed(1);
	parseInt($("#diferencia_N").text(diferencia_N));
	parseInt($("#diferencia_N1").text(diferencia_N));
    var diferencia_P=document.getElementById("diferencia_P").value=requerimiento_nutriente_P-fosforo.toFixed(1);
    parseInt($("#diferencia_P").text(diferencia_P));
    parseInt($("#diferencia_P1").text(diferencia_P));
    var diferencia_K=document.getElementById("diferencia_K").value=requerimiento_nutriente_K-potasio.toFixed(1);
    parseInt($("#diferencia_K").text(diferencia_K));
     parseInt($("#diferencia_K1").text(diferencia_K));
    var diferencia_Ca=document.getElementById("diferencia_Ca").value=requerimiento_nutriente_Ca-calcio.toFixed(1);
    parseInt($("#diferencia_Ca").text(diferencia_Ca));
    parseInt($("#diferencia_Ca1").text(diferencia_Ca));
    var diferencia_Mg=document.getElementById("diferencia_Mg").value=requerimiento_nutriente_Mg-magnesio.toFixed(1);
    parseInt($("#diferencia_Mg").text(diferencia_Mg));
    parseInt($("#diferencia_Mg1").text(diferencia_Mg));
    var diferencia_S=document.getElementById("diferencia_S").value=requerimiento_nutriente_S-azufre.toFixed(1);
    parseInt($("#diferencia_S").text(diferencia_S));
    parseInt($("#diferencia_S1").text(diferencia_S));
    var diferencia_Zn=document.getElementById("diferencia_Zn").value=requerimiento_nutriente_Zn-zinc.toFixed(1);
    parseInt($("#diferencia_Zn").text(diferencia_Zn));
    parseInt($("#diferencia_Zn1").text(diferencia_Zn));
    var diferencia_B=document.getElementById("diferencia_B").value=requerimiento_nutriente_B-boro.toFixed(1);
    parseInt($("#diferencia_B").text(diferencia_B));
    parseInt($("#diferencia_B1").text(diferencia_B));

    var diferencia_Cu=document.getElementById("diferencia_Cu").value=requerimiento_nutriente_Cu-cobre.toFixed(1);
    parseInt($("#diferencia_Cu").text(diferencia_Cu));
    parseInt($("#diferencia_Cu1").text(diferencia_Cu));

    // AQUI ABAJO ES LO DE LA DIFERENCIA DE LA TABLA SI ES MENOR A CERO ES UN OK POR PETICION DEL CLIENTE
if (diferencia_N<0) {

parseInt($("#diferencia_N1").text("OK"));
var diferencia_N=document.getElementById("diferencia_N").style.background="green";
var diferencia_N=document.getElementById("diferencia_N").style.color="white";
parseInt($("#diferencia_N").text("OK"));
    var diferencia_N=document.getElementById("diferencia_N").value=requerimiento_nutriente_N-nitrogeno.toFixed(1);
}else{

var diferencia_N=document.getElementById("diferencia_N").style.background="red";
var diferencia_N=document.getElementById("diferencia_N").style.color="white";
    var diferencia_N=document.getElementById("diferencia_N").value=requerimiento_nutriente_N-nitrogeno.toFixed(1);

}

if (diferencia_P<0) {

parseInt($("#diferencia_P").text("OK"));
parseInt($("#diferencia_P1").text("OK"));
var diferencia_P=document.getElementById("diferencia_P").style.background="green";
var diferencia_P=document.getElementById("diferencia_P").style.color="white";
 var diferencia_P=document.getElementById("diferencia_P").value=requerimiento_nutriente_P-fosforo.toFixed(1);
}else{

var diferencia_P=document.getElementById("diferencia_P").style.background="red";
var diferencia_P=document.getElementById("diferencia_P").style.color="white";
 var diferencia_P=document.getElementById("diferencia_P").value=requerimiento_nutriente_P-fosforo.toFixed(1);
}

if (diferencia_K<0) {

 parseInt($("#diferencia_K").text("OK"));
 parseInt($("#diferencia_K1").text("OK"));
var diferencia_K=document.getElementById("diferencia_K").style.background="green";
var diferencia_K=document.getElementById("diferencia_K").style.color="white";
var diferencia_K=document.getElementById("diferencia_K").value=requerimiento_nutriente_K-potasio.toFixed(1);
}else{

var diferencia_K=document.getElementById("diferencia_K").style.background="red";
var diferencia_K=document.getElementById("diferencia_K").style.color="white";
var diferencia_K=document.getElementById("diferencia_K").value=requerimiento_nutriente_K-potasio.toFixed(1);

}


if (diferencia_Ca<0) {

parseInt($("#diferencia_Ca").text("OK"));
parseInt($("#diferencia_Ca1").text("OK"));
var diferencia_Ca=document.getElementById("diferencia_Ca").style.background="green";
var diferencia_Ca=document.getElementById("diferencia_Ca").style.color="white";
 var diferencia_Ca=document.getElementById("diferencia_Ca").value=requerimiento_nutriente_Ca-calcio.toFixed(1);
}else{

var diferencia_Ca=document.getElementById("diferencia_Ca").style.background="red";
var diferencia_Ca=document.getElementById("diferencia_Ca").style.color="white";
 var diferencia_Ca=document.getElementById("diferencia_Ca").value=requerimiento_nutriente_Ca-calcio.toFixed(1);

}

if (diferencia_Mg<0) {

parseInt($("#diferencia_Mg").text("OK"));
parseInt($("#diferencia_Mg1").text("OK"));
var diferencia_Mg=document.getElementById("diferencia_Mg").style.background="green";
var diferencia_Mg=document.getElementById("diferencia_Mg").style.color="white";
 var diferencia_Mg=document.getElementById("diferencia_Mg").value=requerimiento_nutriente_Mg-magnesio.toFixed(1);
}else{

var diferencia_Mg=document.getElementById("diferencia_Mg").style.background="red";
var diferencia_Mg=document.getElementById("diferencia_Mg").style.color="white";
 var diferencia_Mg=document.getElementById("diferencia_Mg").value=requerimiento_nutriente_Mg-magnesio.toFixed(1);

}

if (diferencia_S<0) {

parseInt($("#diferencia_S").text("OK"));
parseInt($("#diferencia_S1").text("OK"));
var diferencia_S=document.getElementById("diferencia_S").style.background="green";
var diferencia_S=document.getElementById("diferencia_S").style.color="white";
var diferencia_S=document.getElementById("diferencia_S").value=requerimiento_nutriente_S-azufre.toFixed(1);
}else{

var diferencia_S=document.getElementById("diferencia_S").style.background="red";
var diferencia_S=document.getElementById("diferencia_S").style.color="white";
var diferencia_S=document.getElementById("diferencia_S").value=requerimiento_nutriente_S-azufre.toFixed(1);

}

if (diferencia_Zn<0) {

parseInt($("#diferencia_Zn").text("OK"));
parseInt($("#diferencia_Zn1").text("OK"));
var diferencia_Zn=document.getElementById("diferencia_Zn").style.background="green";
var diferencia_Zn=document.getElementById("diferencia_Zn").style.color="white";
var diferencia_Zn=document.getElementById("diferencia_Zn").value=requerimiento_nutriente_Zn-zinc.toFixed(1);
}else{

var diferencia_Zn=document.getElementById("diferencia_Zn").style.background="red";
var diferencia_Zn=document.getElementById("diferencia_Zn").style.color="white";
var diferencia_Zn=document.getElementById("diferencia_Zn").value=requerimiento_nutriente_Zn-zinc.toFixed(1);

}


if (diferencia_B<0) {


parseInt($("#diferencia_B").text("OK"));
parseInt($("#diferencia_B1").text("OK"));
var diferencia_B=document.getElementById("diferencia_B").style.background="green";
var diferencia_B=document.getElementById("diferencia_B").style.color="white";
var diferencia_B=document.getElementById("diferencia_B").value=requerimiento_nutriente_B-boro.toFixed(1);
}else{

var diferencia_B=document.getElementById("diferencia_B").style.background="red";
var diferencia_B=document.getElementById("diferencia_B").style.color="white";
var diferencia_B=document.getElementById("diferencia_B").value=requerimiento_nutriente_B-boro.toFixed(1);

}


if (diferencia_Cu<0) {

parseInt($("#diferencia_Cu").text("OK"));
parseInt($("#diferencia_Cu1").text("OK"));
var diferencia_Cu=document.getElementById("diferencia_Cu").style.background="green";
var diferencia_Cu=document.getElementById("diferencia_Cu").style.color="white";
var diferencia_Cu=document.getElementById("diferencia_Cu").value=requerimiento_nutriente_Cu-cobre.toFixed(1);
}else{

var diferencia_Cu=document.getElementById("diferencia_Cu").style.background="red";
var diferencia_Cu=document.getElementById("diferencia_Cu").style.color="white";
var diferencia_Cu=document.getElementById("diferencia_Cu").value=requerimiento_nutriente_Cu-cobre.toFixed(1);

}



// AQUI ABAJO ES PARA LO DE LOS FERTILIZANTES EL ALGORITMO ES EL SIGIOENTE SE REALIZA LA INTERPRETACION 
// EN EL MODULO DE INTERPRETACION LUEGO SI EL NUTRIENTE X OSEA CULAQUIERA ESTA MUY BAJO SE NECESITA UN FERTILIZANTES
// QUE CUBRA ESA NECESIDAD ENTONCES, SI ESTA BAJO NECESITA QUE TENGA AUNQUE SEHA 1 DE ESE MISMO NUTRIENTEE
// ENTONCES PONGO > PARA QUE ME BUSQUE FETILIZANTES QUE TENGA ESE NUTRIENTE PERO SI EL SUELO NO NECESITA ENTONCES
// ME BUSCA QUE TENGAN IGUAL A CERO OSEA NO TENGAN NADA

    if (nitrogeno>=requerimiento_nutriente_N) {
      var fertilizante_N="=";
    }else{
      var fertilizante_N=">";
    }

    if (fosforo>=requerimiento_nutriente_P) {
      var fetilizante_P="=";
    }else{
      var fetilizante_P=">";
    }

    if (potasio>=requerimiento_nutriente_K) {
      var fetilizante_K="=";
    }else{
      var fetilizante_K=">";
    }

    if (calcio>=requerimiento_nutriente_Ca) {
      var fetilizante_Ca="=";
    }else{
      var fetilizante_Ca=">";
    }

    if (magnesio>=requerimiento_nutriente_Mg) {
      var fetilizante_Mg="=";
    }else{
      var fetilizante_Mg=">";
    }

    if (azufre>=requerimiento_nutriente_S) {
      var fetilizante_S="=";
    }else{
      var fetilizante_S=">";
    }

    if (zinc>=requerimiento_nutriente_Zn) {
      var fetilizante_Zn="=";
    }else{
      var fetilizante_Zn=">";
    }

    if (boro>=requerimiento_nutriente_B) {
      var fetilizante_B="=";
    }else{
      var fetilizante_B=">";
    }

    // if (cobre>=requerimiento_nutriente_Cu) {
    // var fetilizante_Cu="=";
    // }else{
    // var fetilizante_Cu=">";
    // }



    // AQUI ABAJO ESTOY HACIENDO ES SIMPLEMENTE CARGANDO OTRA PAGINA PARA LOS FERTILIZANTES, ES DECIR, COMO ESTO ES UNA FUNCION Y LAS VARIABLES QUE ESTAN FUERA DE ESTA FUNCION NO EXISTEN POR DECIRLO ASI SI TENGO UNA VARIBLE  VAR PESO=1; SI YO QUIERO REALIZAR UNA ALERTA CON ESA VARIABLE FUERA DE ESTA FUNCION ME VA A DECIR QUE NO EXISTE POR ESTA RAZON ESTOY ENVIADO LOS DATOS HACIA OTRA PAGINA PARA MANIPULARLOS COMO ES DEBIDO PARA SACAR LOS FERTILIZANTES ENPOCAS PALABRAS YO LO LLAMO PROGRAMACION ORIENTADO EN DIMENSIONES PARALELAS U ORIENTADO EN PAGINAS PARALELAS

    $("#contenedor").load("fetilizantes_adecuados.php",{diferencia_N:diferencia_N, diferencia_P:diferencia_P,diferencia_K:diferencia_K, diferencia_Ca:diferencia_Ca, diferencia_Mg:diferencia_Mg,diferencia_S:diferencia_S, diferencia_Zn:diferencia_Zn, diferencia_B:diferencia_B, diferencia_Cu:diferencia_Cu, fertilizante_N:fertilizante_N,fetilizante_P:fetilizante_P,fetilizante_K:fetilizante_K,fetilizante_Ca:fetilizante_Ca,fetilizante_Mg:fetilizante_Mg,fetilizante_S:fetilizante_S,fetilizante_Zn:fetilizante_Zn,fetilizante_B:fetilizante_B});




    //AQUI ABAJO ES PARA REALIZAR EL PLAN NUTRICIONAL, ES UNA FUNCION GENERICA

    var plan_nutricional=document.getElementById('plan').style.display="block";

    var plan_nutricional=document.getElementById('icono_plan').style.display="block";

    var fetilizante=document.getElementById('fetilizante').style.display="block";
    var icono_fetilizante=document.getElementById('icono_fetilizante').style.display="block";

    //AQUI ES PARA PODER REALIZAR LA TORTAS DE PLAN NUTRICIONAL POR QUE NO SE ACEPTA VARIABLES FUERA
    //DE LA FUNCION
    var porcentaje_ideal_N=requerimiento_nutriente_N;


    // AQUI ES PARA LA ALERTA DE SU SUELO NO ES APTO PARA EL CULTIVO

    // var nivel_PH=document.getElementById('nivel_PH').value;
    // var nivel_MO=document.getElementById('nivel_MO').value;
    // var nivel_CO=document.getElementById('nivel_CO').value
    // var nivel_P=document.getElementById('nivel_P').value;
    // var nivel_Al=document.getElementById('nivel_Al').value;
    // var nivel_Ca=document.getElementById('nivel_Ca').value;
    // var nivel_Mg=document.getElementById('nivel_Mg').value;
    // var nivel_K=document.getElementById('nivel_K').value;
    // var nivel_Na=document.getElementById('nivel_Na').value;
    // var nivel_CICE=document.getElementById('nivel_CICE').value;
    // var nivel_S=document.getElementById('nivel_S').value;
    // var nivel_Fe=document.getElementById('nivel_Fe').value;
    // var nivel_Mn=document.getElementById('nivel_Mn').value;
    // var nivel_Cu=document.getElementById('nivel_Cu').value;
    // var nivel_Zn=document.getElementById('nivel_Zn').value;
    // var nivel_B=document.getElementById('nivel_B').value;
    // var porcentaje_nivel_Al=document.getElementById('porcentaje_nivel_Al').value;
    // var porcentaje_nivel_Na=document.getElementById('porcentaje_nivel_Na').value;
    // var nivel_CE=document.getElementById('nivel_CE').value;

    //  if (nivel_MO=="BAJO") {
    // $("#mostrarmodal").modal("show");
    //  };



    //SATURACION DE BASES

    $('#porcentaje_bases').highcharts({
      chart: {
        //ESTE OPTIO 3D ES PARA HACER LA TORTA 3D
        // options3d: {
        //         enabled: true,
        //         alpha: 40,
        //         beta: 0
        //     },
        plotShadow: true,
        type: 'pie'
      },
      title: {
        text: '% Saturacion de Bases'
      },subtitle: {
        text: 'SIFFA'
      },
      tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
      },
      colors: [//AQUI ES PONIENDO COLORES A CADA COLUMNA Y SI HAY MUCHAS COLUMNAS LOS COLORES SE REPITEN ADEMAS SON VARIABLES Y LOS COLORES PUEDEN CAMBIAR
      Highcharts.getOptions().colors[7],
      Highcharts.getOptions().colors[8],
      Highcharts.getOptions().colors[9],
      Highcharts.getOptions().colors[6],
      Highcharts.getOptions().colors[5]


      ],
      plotOptions: {
        pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          depth: 35,
          colorByPoint: true,  // AQUI ES PARA ACTIVAR QUE SE PUEDA CAMBIAR EL COLOR DE CADA COLUMNA DE LA GRAFICA
          dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
              color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            },
            connectorColor: 'silver'
          }
        }
      },





      series: [{
        name: "Porcentaje",
        data: [
        {name: "k", y: porcentaje_saturacion_K},
        {name: "Ca",
        y: porcentaje_saturacion_Ca,},
        {name: "Mg", y: porcentaje_saturacion_Mg},
        {name: "Na", y: porcentaje_saturacion_Na}, {name: "Al", y: porcentaje_saturacion_Al}
        ]
      }]
    });



    // // AQUI ABAJO COMIENZA EL CODIGO DEL CIRCULO DEL ANALISIS GLOBAL
    $('#analisis_global').highcharts({
      chart: {
        //ESTE OPTIO 3D ES PARA HACER LA TORTA 3D
        // options3d: {
        //         enabled: true,
        //         alpha: 40,
        //         beta: 0
        //     },
        plotShadow: true,
        type: 'pie'
      },
      title: {
        text: '% Nutriente/Ha'
      },subtitle: {
        text: 'SIFFA'
      },
      tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
      },
      //             colors: [//AQUI ES PONIENDO COLORES A CADA COLUMNA Y SI HAY MUCHAS COLUMNAS LOS COLORES SE REPITEN ADEMAS SON VARIABLES Y LOS COLORES PUEDEN CAMBIAR
      //            columna_1, //COLUMNA 1
      // columna_2, //COLUMNA 2
      // columna_3, //COLUMNA 3
      // columna_4, //COLUMNA 4
      // columna_5, //COLUMNA 5
      // columna_6, //COLUMNA 6
      // columna_7, //COLUMNA 7
      // columna_8, //COLUMNA 8
      // columna_9, //COLUMNA 9
      // columna_10,//COLUMNA 10
      // columna_11,//COLUMNA 11
      // columna_12,//COLUMNA 12
      // columna_13,//COLUMNA 13


      //             ],
      plotOptions: {
        pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          depth: 35,
          colorByPoint: true,  // AQUI ES PARA ACTIVAR QUE SE PUEDA CAMBIAR EL COLOR DE CADA COLUMNA DE LA GRAFICA
          dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
              color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            },
            connectorColor: 'silver'
          }
        }
      },





      series: [{
        name: "Porcentaje",
        data: [
        {name: "N", y: nitrogeno},
        {name: "P",
        y: fosforo,},
        {name: "K", y: potasio},
        {name: "Ca", y: calcio}, {name: "Mg", y: magnesio},{name:"S",y:azufre},
        {name: "Zn", y: zinc}, {name: "B", y: boro},{name:"Cu", y:cobre}

        ]
      }]
    });


    // AQUI ABAJO COMIENZA EL CODIGO DE HIGHCHARTS
    $('#container').highcharts({
      chart: {
        //ESTE OPTION 3D ES PARA
        type: 'column',
        options3d: {
          enabled: true,
          alpha: 2,
          beta: 0
        }

      },
      title: {
        text: 'Nivel pH'
      },
      subtitle: {
        text: 'SIFFA'



      },
      xAxis: {
        categories: [
        //AQUI SE CONECTA CON LA BASE DE DATOS Y ESTRAE EL NOMBRE DE LOS CAMPOS PARA PONERLOS EN EL GRAFICO EJEMPLO N P SI

        "PH",],
        crosshair: true
      }, credits: {
        enabled: false
      },
      yAxis: {
        min: 0,

        title: {
          text: 'NIVEL DE NUTRIENTES'
        }
      },
      tooltip: {headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y:.1f}</b></td></tr> '  ,
          footerFormat: '</table>',
          shared: true,
          useHTML: true,
        },


        colors: [//AQUI ES PONIENDO COLORES A CADA COLUMNA Y SI HAY MUCHAS COLUMNAS LOS COLORES SE REPITEN ADEMAS SON VARIABLES Y LOS COLORES PUEDEN CAMBIAR
        columna_PH



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
          name: 'Cantidad',

          data: [PH]}




          ]


        });














$("#analisis").load("barras_movibles.php",{cultivo_select:cultivo_select});




            //AQUI ES PARA MOSTRAR EL LA TORTA Y SUS PORCENTAJES IDEALES
            $('#porcentajes_necesarios').highcharts({
              chart: {
                // ESTE OPTIO 3D ES PARA HACER LA TORTA 3D
                options3d: {
                  enabled: true,
                  alpha: 40,
                  beta: 0
                },
                plotShadow: true,
                type: 'pie'
              },
              title: {
                text: '% Nutriente/Ha Ideal'
              },subtitle: {
                text: 'SIFFA'
              },
              tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
              },
              //             colors: [//AQUI ES PONIENDO COLORES A CADA COLUMNA Y SI HAY MUCHAS COLUMNAS LOS COLORES SE REPITEN ADEMAS SON VARIABLES Y LOS COLORES PUEDEN CAMBIAR
              //            columna_1, //COLUMNA 1
              // columna_2, //COLUMNA 2
              // columna_3, //COLUMNA 3
              // columna_4, //COLUMNA 4
              // columna_5, //COLUMNA 5
              // columna_6, //COLUMNA 6
              // columna_7, //COLUMNA 7
              // columna_8, //COLUMNA 8
              // columna_9, //COLUMNA 9
              // columna_10,//COLUMNA 10
              // columna_11,//COLUMNA 11
              // columna_12,//COLUMNA 12
              // columna_13,//COLUMNA 13


              //             ],
              plotOptions: {
                pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  depth: 35,
                  colorByPoint: true,  // AQUI ES PARA ACTIVAR QUE SE PUEDA CAMBIAR EL COLOR DE CADA COLUMNA DE LA GRAFICA
                  dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                      color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorColor: 'silver'
                  }
                }
              },





              series: [{
                name: "Porcentaje Ideal",
                data: [
                {name: "N", y: nutriente_N},
                {name: "P",
                y: nutriente_P,},
                {name: "K", y: nutriente_K},
                {name: "Ca", y: nutriente_Ca},
                {name: "Mg", y: nutriente_Mg},
                {name:"S",y:nutriente_S},
                {name: "Zn", y: nutriente_Zn}, {name: "B", y: nutriente_B},
                {name:"Cu", y:nutriente_Cu}

                ]
              }]
            });









            //AQUI ABAJO ES PARA LAS GRAFICAS DEL PLAN NUTRICIONAL
            $('#niveles_necesarios').highcharts({
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
                text: "Niveles de Nutrientes Necesarios Cultivo " + cultivo
              },
              subtitle: {
                text: 'SIFFA'



              },
              xAxis: {
                categories: [
                //AQUI SE CONECTA CON LA BASE DE DATOS Y ESTRAE EL NOMBRE DE LOS CAMPOS PARA PONERLOS EN EL GRAFICO EJEMPLO N P SI

                <?php

                $connection=mysqli_connect("localhost","root","","siffa");


                $sql = "SELECT * FROM `cultivo` INNER JOIN requerimiento ON cultivo.idrequerimiento=requerimiento.idrequerimiento WHERE idcultivo='$cultivo_select' ";
                $result = mysqli_query($connection,$sql);
                while ($registros3=mysqli_fetch_array($result))
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
                  name: 'NUTRIENTE NECESARIO',
                  data: [       <?php

                  $connection=mysqli_connect("localhost","root","","siffa");
                  $sql = "SELECT * FROM `cultivo` INNER JOIN requerimiento ON cultivo.idrequerimiento=requerimiento.idrequerimiento WHERE idcultivo='$cultivo_select'";
                  $result = mysqli_query($connection,$sql);
                  while ($registros4=mysqli_fetch_array($result))
                  { ?>


                    <?php echo $registros4[5] ?>,
                    <?php echo $registros4[6] ?>,
                    <?php echo $registros4[7] ?>,
                    <?php echo $registros4[8] ?>,
                    <?php echo $registros4[9] ?>,
                    <?php echo $registros4[10] ?>,
                    <?php echo $registros4[11] ?>,
                    <?php echo $registros4[12] ?>,
                    <?php echo $registros4[13] ?>,
                    <?php
                  }
                  mysqli_close($connection);

                  ?> ],
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
                  Highcharts.getOptions().colors[9],
                  Highcharts.getOptions().colors[10],
                  Highcharts.getOptions().colors[11],
                  Highcharts.getOptions().colors[12],
                  Highcharts.getOptions().colors[13],
                  Highcharts.getOptions().colors[14],
                  Highcharts.getOptions().colors[15],


                  ],

                }, ]


              });


		

		$("#resultado_PH").text(PH);
		$("#resultado_MO").text(MO);
		$("#resultado_P").text(P);
		$("#resultado_Al").text(Al);
		$("#resultado_Ca").text(Ca);
		$("#resultado_Mg").text(Mg);
		$("#resultado_K").text(K);
		$("#resultado_Na").text(Na);
		$("#resultado_CICE").text(CICE);
		$("#resultado_S").text(S);



$("#niveles_PH").text(nivel_PH);
$("#niveles_MO").text(nivel_MO);
$("#niveles_P").text(nivel_P);
$("#niveles_Al").text(nivel_Al);
$("#niveles_Ca").text(nivel_Ca);
$("#niveles_Mg").text(nivel_Mg);
$("#niveles_K").text(nivel_K);
$("#niveles_Na").text(nivel_Na);
$("#niveles_CICE").text(nivel_CICE);
$("#niveles_S").text(nivel_S);





$("#resultado_Fe").text(Fe);
$("#resultado_Mn").text(Mn);
$("#resultado_Cu").text(Cu);
$("#resultado_Zn").text(Zn);
$("#resultado_B").text(B);
$("#resultado_porcentaje_Al").text(porcentaje_Al);
$("#resultado_porcentaje_Na").text(porcentaje_Na);
$("#resultado_Ce").text(CE);



$("#niveles_Fe").text(nivel_Fe);
$("#niveles_Mn").text(nivel_Mn);
$("#niveles_Cu").text(nivel_Cu);
$("#niveles_Zn").text(nivel_Zn);
$("#niveles_B").text(nivel_B);
$("#niveles_porcentaje_Al").text(porcentaje_nivel_Al);
$("#niveles_porcentaje_Na").text(porcentaje_nivel_Na);
$("#niveles_Ce").text(nivel_CE);



            });







          </script>
