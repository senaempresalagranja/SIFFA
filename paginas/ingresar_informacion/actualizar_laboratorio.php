<?php 
$nombre_laboratorio=$_POST["nombre_laboratorio"];
$dirreccion=$_POST["dirreccion"];
$telefono=$_POST["telefono"];
$municipio=$_POST["municipio"];
$laboratorio=$_POST["laboratorio"];


$local="localhost";
$usuario="root";
$contra="";
$bd="siffa";

$conexion=mysqli_connect($local,$usuario,$contra,$bd)or die ("problemas en la conexion");
$query="UPDATE laboratorio SET Nombre_Laboratorio='$nombre_laboratorio', Direccion='$dirreccion', Telefono='$telefono',
 Idmunicipio='$municipio' ";

 $resource=mysqli_query($conexion,$query);	

 if ($resource==true) {
 	echo "<script>

swal('Actualizacion Exitosa','','success');
 	</script>";
 }else{
 	echo "Actualizacion Fallida";
 }


 ?>