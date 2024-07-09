<?php 

$nombre_tipo_cultivo=$_POST["nombre_tipo_cultivo"];



$loca="localhost";
$usuario="root";
$contra="";
$base="siffa";



$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM  tipo_cultivo WHERE Nombre='$nombre_tipo_cultivo'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource) ;

if ($fila==true) {
	echo "<script>
swal('Advertencia','Tipo de Cultivo $nombre_tipo_cultivo Ya Existe','warning');

	</script>";

} else {

$local="localhost";
$usuario="root";
$contra="";
$base="siffa";

$conexion=mysqli_connect($local,$usuario,$contra,$base);
$query="INSERT INTO tipo_cultivo (Nombre) VALUES ('$nombre_tipo_cultivo') ";

$resource=mysqli_query($conexion, $query);

if ($resource==true) {
	echo "<script>
swal('Resgistro Exitoso','','success');

	</script>";
}else{
	echo "Registro Fallido";
}




}

 ?>