<?php 

$laboratorio=$_POST["laboratorio"];



$loca="localhost";
$usuario="root";
$contra="";
$base="siffa";



$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `laboratorio` INNER JOIN municipio ON laboratorio.Idmunicipio=municipio.Idmunicipio INNER JOIN departamento ON municipio.Iddepartamento=departamento.Iddepartamento
 WHERE Idlaboratorio='$laboratorio'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);



echo "<script>
var municipio=document.getElementById('municipio').style.opacity='1';	
var nombre_laboratorio=document.getElementById('nombre_laboratorio').value='$fila[1]';
var dirreccion=document.getElementById('dirreccion').value='$fila[2]';
var telefono=document.getElementById('telefono').value='$fila[3]';
var municipio=document.getElementById('municipio').value='$fila[4]';
var departamento=document.getElementById('departamento').value='$fila[7]'
</script>";



 ?>