<?php 


$cultivo1=$_POST["cultivo1"];
$lote1=$_POST["lote1"];


$local="localhost";
$usuario="root";
$contra="";
$bd="siffa";

$conexion=mysqli_connect($local,$usuario,$contra,$bd)or die ("problemas en la conexion");
$query="SELECT *  FROM `lotecultivo` INNER JOIN cultivo ON lotecultivo.idcultivo=cultivo.idcultivo INNER JOIN lote ON lotecultivo.Idlote=lote.Idlote INNER JOIN hacienda ON lote.IdHacienda=hacienda.Idhacienda WHERE lotecultivo.Idlote='$lote1' AND lotecultivo.idcultivo='$cultivo1'";
$resource=mysqli_query($conexion, $query);
$fila=mysqli_fetch_row($resource);



echo "<script>
var finca=document.getElementById('finca').value='$fila[10]';
var lote=document.getElementById('lote').style.opacity='1';
var lote=document.getElementById('lote').value='$fila[8]';


var cultivo=document.getElementById('cultivo').value='$fila[2]';

var tamaño_cultivo=document.getElementById('tamaño_cultivo').value='$fila[3]';
this.id_lotecultivo='$fila[0]';

</script>";





 ?>