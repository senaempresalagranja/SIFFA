<?php 

$Vereda=$_POST["Vereda"];
$nombre=$_POST["nombre"];

$connection=mysqli_connect("localhost","root","","siffa");
									$query="SELECT * FROM hacienda INNER JOIN vereda ON hacienda.Idvereda=vereda.Idvereda WHERE Nombre='$nombre'AND hacienda.Idvereda='$Vereda' ";
									$resource=mysqli_query($connection,$query);
$fila=mysqli_fetch_row($resource);
if ($fila==true) {
	echo "<script>
swal('Advertencia','Finca $nombre Ya Existe En la Vereda $fila[7]','warning');

	</script>";
}else{

	
}

 ?>