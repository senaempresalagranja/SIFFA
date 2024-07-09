<?php 

$id_analisis=$_POST["id_analisis"];




$connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT 
analisis_solo.Numero_Muestreo,
analisis_solo.Idlaboratorio,
analisis_solo.Id_Lote,
lote.IdHacienda,
analisis_solo.Clima,
analisis_solo.Profundidad_Muestra,
analisis_solo.Densidad_Aparente,
analisis_solo.PH,
analisis_solo.Materia_Organica,
analisis_solo.Potasio,
analisis_solo.Aluminio,
analisis_solo.Calcio,
analisis_solo.Magnesio,
analisis_solo.Potasio,
analisis_solo.Sodio,
analisis_solo.CICE,
analisis_solo.Azufre,
analisis_solo.Hierro,
analisis_solo.Manganesio,
analisis_solo.Cobre,
analisis_solo.Zinc,
analisis_solo.Boro,
analisis_solo.Saturacion_Aluminio,
analisis_solo.Saturacion_Sodio,
analisis_solo.CE
 FROM `analisis_solo`  INNER JOIN lote ON analisis_solo.Id_Lote=lote.Idlote
INNER JOIN hacienda ON lote.IdHacienda=hacienda.Idhacienda

WHERE Idanalisis='$id_analisis'";
$resource=mysqli_query($connection,$query);
$fila=mysqli_fetch_row($resource);



echo "<script>

var numero_muestra=document.getElementById('numero_muestra').value='$fila[0]';
var laboratorio=document.getElementById('laboratorio').value='$fila[1]';
var lote=document.getElementById('lote').style.opacity='1';
var cultivo=document.getElementById('cultivo').style.opacity='1';
var finca=document.getElementById('finca').value='$fila[3]';
var lote=document.getElementById('lote').value='$fila[2]';									
var clima=document.getElementById('clima').value='$fila[4]';
var profundidad=parseFloat(document.getElementById('profundidad').value='$fila[5]');
var densidad_aparente=parseFloat(document.getElementById('densidad_aparente').value='$fila[6]');
mostrar_tamaño_cultivo();
var PH=parseFloat(document.getElementById('PH').value='$fila[7]');
var MO=parseFloat(document.getElementById('MO').value='$fila[8]');
var P=parseFloat(document.getElementById('P').value='$fila[9]');
var Al=parseFloat(document.getElementById('Al').value='$fila[10]');
var Ca=parseFloat(document.getElementById('Ca').value='$fila[11]');
var Mg=parseFloat(document.getElementById('Mg').value='$fila[12]');
var K=parseFloat(document.getElementById('K').value='$fila[13]');
var Na=parseFloat(document.getElementById('Na').value='$fila[14]');
var CICE=parseFloat(document.getElementById('CICE').value='$fila[15]');
var S=parseFloat(document.getElementById('S').value='$fila[16]');
var Fe=parseFloat(document.getElementById('Fe').value='$fila[17]');
var Mn=parseFloat(document.getElementById('Mn').value='$fila[18]');
var Cu=parseFloat(document.getElementById('Cu').value='$fila[19]');
var Zn=parseFloat(document.getElementById('Zn').value='$fila[20]');
var B=parseFloat(document.getElementById('B').value='$fila[21]');
var porcentaje_Al=parseFloat(document.getElementById('porcentaje_Al').value='$fila[22]');
var porcentaje_Na=parseFloat(document.getElementById('porcentaje_Na').value='$fila[23]');
var CE=parseFloat(document.getElementById('CE').value='$fila[24]');



</script>";


?>