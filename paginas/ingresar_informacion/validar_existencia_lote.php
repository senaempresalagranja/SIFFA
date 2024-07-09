<?php 
$numero_lote=$_POST["numero_lote"];
$hacienda=$_POST["hacienda"];


$connection=mysqli_connect("localhost","root","","siffa");
							$query="SELECT * FROM lote INNER JOIN hacienda ON lote.IdHacienda=hacienda.IdHacienda   WHERE NumeroLote='$numero_lote' AND lote.IdHacienda='$hacienda'";
$resource=mysqli_query($connection,$query);
$fila=mysqli_fetch_row($resource);

if ($fila==true) {
	echo "<script>
swal('Advertencia','Lote $numero_lote  Ya Existente En Finca $fila[7]','warning');

	</script>";
}else{

	
}


 ?>