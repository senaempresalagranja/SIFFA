<!DOCTYPE HTML>
<html>
    <head>
<script>
    
    // AQUI DECLARO UNA VARIABLE PARA QUE OBTENGA EL VALOR DEL SELECT DE LOS CULTIVOS Y EN LA CONSULTA AL SELECCIONAR LA TABLA OSEA FROM PONEMOS LA VARIABLE PARA QUE SEHA DINAMICA

var cultivo_select = document.getElementById('cultivo').value;

document.cookie ='variable='+cultivo_select;

<?php
$cultivo_select =  $_COOKIE["variable"];

?>
</script>
<?php 
// AQUI ABAJO LO QUE ESTOY HACIENDO ES PASANDO EL VALOR DE UNA VARIABLE DE PHP A JAVASCRIPT, LO QUE ESTOY HACIENDO ES QUE EL CODIGO FETCH ROW CADA VEZ QUE SE LLAMA ALMACENA UN VALOR ES DECIR EL PRIMER REGISTRO EN UNA VARIABLE EN ESTE CASO REGITROS, ENTONCES ESE REGISTRO LO ALMACENO EN UNA VARIABLE HASTA QUE NO TENGA MAS REGISTRO TOCARIA MANUALMENTE  Y AUTOMATICAMENTE ESE VALOR LO ESTOY PASANDO A UNA VARIABLE PHP

 $connection=mysqli_connect("localhost","root","","siffa");
            $sql = "SELECT * FROM $cultivo_select";
            $result = mysqli_query($connection,$sql);
$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_bajo_N="'.$registros[3].'";
            

</script>';

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_medio_P="'.$registros[3].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_medio_K="'.$registros[3].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_medio_S="'.$registros[3].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_medio_Ca="'.$registros[3].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_medio_Mg="'.$registros[3].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_medio_Fe="'.$registros[3].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_medio_Mn="'.$registros[3].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_medio_Cu="'.$registros[3].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_medio_B="'.$registros[3].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_medio_Zn="'.$registros[3].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_medio_Na="'.$registros[3].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_medio_Si="'.$registros[3].'";



</script>';
mysqli_close($connection);
 $connection=mysqli_connect("localhost","root","","siffa");
            $sql = "SELECT * FROM $cultivo_select";
            $result = mysqli_query($connection,$sql);
$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">






var nutriente_bajo_N="'.$registros[2].'";
            

</script>';

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_bajo_P="'.$registros[2].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_bajo_K="'.$registros[2].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_bajo_S="'.$registros[2].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_bajo_Ca="'.$registros[2].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_bajo_Mg="'.$registros[2].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_bajo_Fe="'.$registros[2].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_bajo_Mn="'.$registros[2].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_bajo_Cu="'.$registros[2].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_bajo_B="'.$registros[2].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_bajo_Zn="'.$registros[2].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_bajo_Na="'.$registros[2].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_bajo_Si="'.$registros[2].'";


            

</script>'; 


mysqli_close($connection);
$connection=mysqli_connect("localhost","root","","siffa");
            $sql = "SELECT * FROM $cultivo_select";
            $result = mysqli_query($connection,$sql);
$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">






var nutriente_alto_N="'.$registros[4].'";
            

</script>';

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_alto_P="'.$registros[4].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_alto_K="'.$registros[4].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_alto_S="'.$registros[4].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_alto_Ca="'.$registros[4].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_alto_Mg="'.$registros[4].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_alto_Fe="'.$registros[4].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_alto_Mn="'.$registros[4].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_alto_Cu="'.$registros[4].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_alto_B="'.$registros[4].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_alto_Zn="'.$registros[4].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_alto_Na="'.$registros[4].'";
            

</script>'; 

$registros=mysqli_fetch_row($result);
echo '<script languaje="JavaScript">
            

var nutriente_alto_Si="'.$registros[4].'";


            

</script>'; 

mysqli_close($connection);
          
 
// $cultivo="j";
// echo'<script languaje="JavaScript">
            

//        var varjs="'.$cultivo.'";
            

// </script>';


 ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>PROTOTIPO SIFFA</title>
    <link rel="stylesheet" href="css/estilos.css">

        <script type="text/javascript" src="js/jquery.js"></script>
        <style type="text/css">
${demo.css}
        </style>
    <script type="text/javascript">

    



function graficos() {


    // AQUI DECLARO UNA VARIABLE PARA QUE OBTENGA EL VALOR DEL SELECT DE LOS CULTIVOS Y EN LA CONSULTA AL SELECCIONAR LA TABLA OSEA FROM PONEMOS LA VARIABLE PARA QUE SEHA DINAMICA

var cultivo_select = document.getElementById('cultivo').value;

document.cookie ='variable='+cultivo_select;


$(function () {


 // AQUI DECLARO UNA VARIABLE PARA QUE OBTENGA EL VALOR DEL SELECT DE LOS CULTIVOS Y EN LA CONSULTA AL SELECCIONAR LA TABLA OSEA FROM PONEMOS LA VARIABLE PARA QUE SEHA DINAMICA





// AQUI ABAJO SE CREA UNA VARIABLE PARA ALMACENAR LO QUE EL USUARIO DIGITE DENTRO DE CADA CAMPO Y ES CONVERTIDO EN DECIMAL

var N= parseFloat(document.getElementById("N").value);
var P= parseFloat(document.getElementById("P").value);
var K= parseFloat(document.getElementById("K").value);
var S= parseFloat(document.getElementById("S").value);
var Ca= parseFloat(document.getElementById("Ca").value);
var Mg= parseFloat(document.getElementById("Mg").value);
var Fe= parseFloat(document.getElementById("Fe").value);
var Mn= parseFloat(document.getElementById("Mn").value);
var Cu= parseFloat(document.getElementById("Cu").value);
var B= parseFloat(document.getElementById("B").value);
var Zn= parseFloat(document.getElementById("Zn").value);
var Na= parseFloat(document.getElementById("Na").value);
var  Si= parseFloat(document.getElementById("Si").value);


// AQUI ABAJO LO QUE HAGO ES PASAR  EL CONTENIDO DE UNA VARIABLE DE PHP A JAVASCRIPT




// AQUI ABAJO ESTOY TOMANDO EL VALOR DE LOS BOTONES DE NIVEL 


var nivel_N=document.getElementById('nivel_N');
var nivel_p=document.getElementById('nivel_p');
var nivel_K=document.getElementById('nivel_K');
var nivel_S=document.getElementById('nivel_S');
var nivel_Ca=document.getElementById('nivel_Ca');
var nivel_Mg=document.getElementById('nivel_Mg');
var nivel_Fe=document.getElementById('nivel_Fe');
var nivel_Mn=document.getElementById('nivel_Mn');
var nivel_Cu=document.getElementById('nivel_Cu');
var nivel_B=document.getElementById('nivel_B');
var nivel_Zn=document.getElementById('nivel_Zn');
var nivel_Na=document.getElementById('nivel_Na');
var nivel_Si=document.getElementById('nivel_Si');




















// AQUI ABAJO ES PARA QUE CUANDO EL VALOR QUE DIJITE EL USUARIO ES MENOR A 0 APAREZCA UN ALERTA
if (N<0) {
swal("¡ERROR!","Escribe un valor mayor a 0", "error")
}
if (P<0) {
swal("¡ERROR!","Escribe un valor mayor a 0", "error")
}
if (K<0) {
swal("¡ERROR!","Escribe un valor mayor a 0", "error")
}
if (Ca<0) {
swal("¡ERROR!","Escribe un valor mayor a 0", "error")
}
if (Mg<0) {
swal("¡ERROR!","Escribe un valor mayor a 0", "error")
}
if (Fe<0) {
swal("¡ERROR!","Escribe un valor mayor a 0", "error")
}
if (Mn<0) {
swal("¡ERROR!","Escribe un valor mayor a 0", "error")
}
if (Cu<0) {
swal("¡ERROR!","Escribe un valor mayor a 0", "error")
}
if (B<0) {
swal("¡ERROR!","Escribe un valor mayor a 0", "error")
}
if (Zn<0) {
swal("¡ERROR!","Escribe un valor mayor a 0", "error")
}
if (Si<0) {
swal("¡ERROR!","Escribe un valor mayor a 0", "error")
}



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



// AQUI ABAJO ESTOY CAMBIAND EL COLOR DEL FONDO RESPECTO  LOS NIVELES QUE O PUSE EN LAS COLUMNAS DE CADA NURTRIENTE
if (N<= nutriente_bajo_N ){
    var columna_1="yellow";
      nivel_N.style.background="yellow";

} else if (N>=nutriente_bajo_N && N< nutriente_alto_N){
var columna_1="#38c660";
nivel_N.style.background="#38c660";
}else if (N>=nutriente_alto_N){
var columna_1="red";
nivel_N.style.background="red";
};

if (P<= nutriente_bajo_P ){
    var columna_2="yellow";
    nivel_P.style.background="yellow";

} else if (P>=nutriente_bajo_P && P< nutriente_alto_P){
var columna_2="#38c660";
nivel_P.style.background="#38c660";
}else if (P>=nutriente_alto_P){
var columna_2="red";
nivel_P.style.background="red";
}

if (K<= nutriente_bajo_K ){
    var columna_3="yellow";
    nivel_K.style.background="yellow";
    

} else if (K>=nutriente_bajo_K && K< nutriente_alto_K){
var columna_3="#38c660";
nivel_K.style.background="#38c660";
}else if (K>=nutriente_alto_K){
var columna_3="red";
nivel_K.style.background="red";
}

if (S<= nutriente_bajo_S ){
    var columna_4="yellow";
    nivel_S.style.background="yellow";
    

} else if (S>=nutriente_bajo_S && S< nutriente_alto_S){
var columna_4="#38c660";
nivel_S.style.background="#38c660";
}else if (S>=nutriente_alto_S){
var columna_4="red";
nivel_S.style.background="red";
}

if (Ca<= nutriente_bajo_Ca ){
    var columna_5="yellow";
    nivel_Ca.style.background="yellow";
    

} else if (Ca>=nutriente_bajo_Ca && Ca< nutriente_alto_Ca){
var columna_5="#38c660";
nivel_Ca.style.background="#38c660";
}else if (Ca>=nutriente_alto_Ca){
var columna_5="red";
nivel_Ca.style.background="#38c660";
}

if (Mg<= nutriente_bajo_Mg ){
    var columna_6="yellow";
    nivel_Mg.style.background="yellow";

} else if (Mg>=nutriente_bajo_Mg && Mg< nutriente_alto_Mg){
var columna_6="#38c660";
nivel_Mg.style.background="#38c660";
}else if (Mg>=nutriente_alto_Mg){
var columna_6="red";
nivel_Mg.style.background="#38c660";
}

if (Fe<= nutriente_bajo_Fe ){
    var columna_7="yellow";
    nivel_Fe.style.background="yellow";
    

} else if (Fe>=nutriente_bajo_Fe && Fe< nutriente_alto_Fe){
var columna_7="#38c660";
nivel_Fe.style.background="#38c660";
}else if (Fe>=nutriente_alto_Fe){
var columna_7="red";
nivel_Fe.style.background="red";
}

if (Mn<= nutriente_bajo_Mn ){
    var columna_8="yellow";
    nivel_Mn.style.background="yellow";

} else if (Mn>=nutriente_bajo_Mn && Mn< nutriente_alto_Mn){
var columna_8="#38c660";
nivel_Mn.style.background="#38c660";
}else if (Mn>=nutriente_alto_Mn){
var columna_8="red";
nivel_Mn.style.background="red";
}

if (Cu<= nutriente_bajo_Cu ){
    var columna_9="yellow";
    nivel_Cu.style.background="#38c660";
    

} else if (Cu>=nutriente_bajo_Cu && Cu< nutriente_alto_Cu){
var columna_9="#38c660";
nivel_Cu.style.background="#38c660";
}else if (Cu>=nutriente_alto_Cu){
var columna_9="red";
nivel_Cu.style.background="#38c660";
}

if (B<= nutriente_bajo_B ){
    var columna_10="yellow";
    nivel_B.style.background="yellow";
    

} else if (B>=nutriente_bajo_B && B< nutriente_alto_B){
var columna_10="#38c660";
nivel_B.style.background="#38c660";
}else if (B>=nutriente_alto_B){
var columna_10="red";
nivel_B.style.background="red";
}

if (Zn<= nutriente_bajo_Zn ){
    var columna_11="yellow";
    nivel_Zn.style.background="yellow";
    

} else if (Zn>=nutriente_bajo_Zn && Zn< nutriente_alto_Zn){
var columna_11="#38c660";
nivel_Zn.style.background="#38c660";
}else if (Zn>=nutriente_alto_Zn){
var columna_11="red";
nivel_Zn.style.background="red";
}

if (Na<= nutriente_bajo_Na ){
    var columna_12="yellow";
    nivel_Na.style.background="yellow";
    

} else if (Na>=nutriente_bajo_Na && Na< nutriente_alto_Na){
var columna_12="#38c660";
nivel_Na.style.background="#38c660";
}else if (Na>=nutriente_alto_Na){
var columna_12="red";
nivel_Na.style.background="red";
}

if (Si<= nutriente_bajo_Si ){
    var columna_13="yellow";
    nivel_Si.style.background="yellow";
    

} else if (Si>=nutriente_bajo_Si && Si< nutriente_alto_Si){
var columna_13="#38c660";
nivel_Si.style.background="#38c660";
}else if (Si>=nutriente_alto_Si){
var columna_13="red";
nivel_Si.style.background="red";
}


// AQUI ABAJO COMIENZA EL CODIGO DE HIGHCHARTS


    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'ANALISIS DE SUELO'
        },
        subtitle: {
            text: 'SIFFA'
        },
        xAxis: {
            categories: [
              //AQUI SE CONECTA CON LA BASE DE DATOS Y ESTRAE EL NOMBRE DE LOS CAMPOS PARA PONERLOS EN EL GRAFICO EJEMPLO N P SI
                   <?php
                
                   $connection=mysqli_connect("localhost","root","","siffa");
              

            $sql = "SELECT * FROM $cultivo_select";
            $result = mysqli_query($connection,$sql);
            while ($registros=mysqli_fetch_array($result))
            { ?>


                '<?php echo $registros["NOMBRE_NUTRIENTE"] ?>',
          <?php
            }
            mysqli_close($connection);
            ?>
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'NIVEL DE NUTRIENTES'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },

        colors: [//AQUI ES PONIENDO COLORES A CADA COLUMNA Y SI HAY MUCHAS COLUMNAS LOS COLORES SE REPITEN ADEMAS SON VARIABLES Y LOS COLORES PUEDEN CAMBIAR
 columna_1,
 columna_2,
 columna_3,
 columna_4,
 columna_5,
 columna_6,
 columna_7,
 columna_8 ,
 columna_9,
 columna_10,
 columna_11,
 columna_12,
 columna_13,

],
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                colorByPoint: true  // AQUI ES PARA ACTIVAR QUE SE PUEDA CAMBIAR EL COLOR DE CADA COLUMNA DE LA GRAFICA
            }
        },
        series: [
        {
            name: 'ANALISIS DE SUELO',
            data: [N,P,K,S,Ca,Mg,Fe,Mn,Cu,B,Zn,Na,Si]},


         {
            name: 'NUTRIENTE NECESARIO',
            data: [      <?php
                      
                   $connection=mysqli_connect("localhost","root","","siffa");
            $sql = "SELECT * FROM $cultivo_select";
            $result = mysqli_query($connection,$sql);
            while ($registros=mysqli_fetch_array($result))
            { ?>


                <?php echo $registros["NUTRIENTE_MEDIO"] ?>,
          <?php
            }
mysqli_close($connection);

            ?>],
            colors: [ //AQUI PONGO UN COLOR DISTINTO A LA SEGUNDA COLUMNA PARA DIFERENCIAR
'#38c660'//verde

],

        }]
    });
});

};




        </script>
    </head>
    <body>


<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>
<form action='$_SERVER["PHP_SELF"]' method="post">
<table class="tabla_analisis">
<tr>CULTIVO<select name="cultivo" id="cultivo">
        <option value="cafe">cafe</option>
        <option value="mango">mango</option>
    </select></tr>
<!-- AQUI ABAJO ESTOY CREANDO LOS BOTONES CON LOS DIFERENTES ELEMENTOS -->
    <tr class="elemento"> <td>Elementos</td>
            <td><input type="button" id="nivel_N" name="N" class="elementos  boton_nutriente_N" value="N">
            </td>
            <td><input type="button" id="nivel_P" class="elementos  boton_nutriente_P" value="P"></td>
            <td><input type="button" id="nivel_K"  class="elementos  boton_nutriente_K" value="K"></td>
            <td><input type="button" id="nivel_S" class="elementos  boton_nutriente_S" value="S"></td>
            <td><input type="button" id="nivel_Ca" class="elementos  boton_nutriente_Ca" value="Ca"></td>
            <td><input type="button" id="nivel_Mg"  class="elementos  boton_nutriente_Mg" value="Mg"></td>
            <td><input type="button" id="nivel_Fe" class="elementos  boton_nutriente_Fe" value="Fe"></td>
            <td><input type="button" id="nivel_Mn" class="elementos  boton_nutriente_Mn" value="Mn"></td>
            <td><input type="button" id="nivel_Cu"  class="elementos  boton_nutriente_Cu" value="Cu"></td>
            <td><input type="button" id="nivel_B"  class="elementos  boton_nutriente_B" value="B"></td>
            <td><input type="button" id="nivel_Zn" class="elementos  boton_nutriente_Zn" value="Zn"></td>
            <td><input type="button" id="nivel_Na" class="elementos  boton_nutriente_Na" value="Na"></td>
            <td><input type="button" id="nivel_Si" class="elementos  boton_nutriente_Si" value="Si"></td>

    </tr>
        <tr>
    <td>Resultados</td>
    <!-- AQUI ABAJO SON LOS INPUTS EM EÑ CUAL EL USUARIO DIJITARA LOS NUMEROS DEL ANAILISIS -->
        <td><input type="text"    placeholder:"Elemento"" id="N" class="nutriente"></td>
        <td><input type="text"    placeholder:"Elemento"" id="P" class="nutriente"></td>
        <td><input type="text"    placeholder:"Elemento"" id="K" class="nutriente"></td>
        <td><input type="text"    placeholder:"Elemento"" id="S" class="nutriente"></td>
        <td><input type="text"    placeholder:"Elemento"" id="Ca" class="nutriente"></td>
        <td><input type="text"    placeholder:"Elemento"" id="Mg" class="nutriente"></td>
        <td><input type="text"    placeholder:"Elemento"" id="Fe" class="nutriente"></td>
        <td><input type="text"    placeholder:"Elemento"" id="Mn" class="nutriente"></td>
        <td><input type="text"    placeholder:"Elemento"" id="Cu" class="nutriente"></td>
        <td><input type="text"    placeholder:"Elemento"" id="B" class="nutriente"></td>
        <td><input type="text"    placeholder:"Elemento"" id="Zn" class="nutriente"></td>
        <td><input type="text"    placeholder:"Elemento"" id="Na" class="nutriente"></td>
        <td><input type="text"    placeholder:"Elemento"" id="Si" class="nutriente"></td>

    </tr>
    <!-- AQUI ABAJO SE CREA EL BOTON DE NIVEL QUE CAMBIARA SEGUN LO QUE EL USUARIO DIGITE -->
        <td>Nivel</td>
        <td><input type="button" value="  " class="elementos  "></td>
        <td><input type="button" value="  " class="elementos  "></td>
        <td><input type="button" value="  " class="elementos  "></td>
        <td><input type="button" value="  " class="elementos  "></td>
        <td><input type="button" value="  " class="elementos  "></td>
        <td><input type="button" value="  " class="elementos  "></td>
        <td><input type="button" value="  " class="elementos  "></td>
        <td><input type="button" value="  " class="elementos "></td>
        <td><input type="button" value="  " class="elementos "></td>
        <td><input type="button" value="  " class="elementos "></td>
        <td><input type="button" value="  " class="elementos "></td>
        <td><input type="button" value="  " class="elementos "></td>
        <td><input type="button" value="  " class="elementos "></td>
    </tr>

        <td colspan="14"><input class="calcular" href="" type="button" onclick="graficos()" value="CALCULAR" ></td>
    </tr>

</table>
</form>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

    

    </body>
</html>
