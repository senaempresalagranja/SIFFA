<?php 

$clase=$_POST["clase"];

$nombre_tipo_cultivo=$_POST["nombre_tipo_cultivo"];
$connection=mysqli_connect("localhost","root","","siffa");
$query="UPDATE tipo_cultivo SET Nombre='$nombre_tipo_cultivo' WHERE Idtipo_cultivo='$clase'";
$resource=mysqli_query($connection,$query);

if ($resource==true) {
	echo "<script>
swal('Actualizacion Correcta','','success')

	</script>";
}else{

	echo "Actualizacion Fallida";
}






 ?>