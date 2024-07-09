<?php 

$finca=$_POST["finca"];
$tamaño=$_POST["tamaño"];
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$Vereda=$_POST["Vereda"];
$fax=$_POST["fax"];



$loca="localhost";
$usuario="root";
$contra="";
$base="siffa";




$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="UPDATE hacienda SET Nombre='$nombre', Fax='$fax', Telefono='$telefono', Idvereda='$Vereda' , Tamano='$tamaño' WHERE Idhacienda='$finca'";
$resource=mysqli_query($conexion,$query);
if ($resource==true) {
	echo "<script>
swal('Actualizacion Exitosa','','success')
	</script>";
}else{

	echo "Actualizacion Fallida";
}

 ?>