<?php 
$lote=$_POST["lote"];
$numero_lote=$_POST["numero_lote"];
$hacienda=$_POST["hacienda"];
$coordenadas=$_POST["coordenadas"];
$longitud=$_POST["longitud"];
$tamaño=$_POST["tamaño"];

$local="localhost";
$usuario="root";
$contra="";
$base="siffa";


$conexion3=mysqli_connect($local,$usuario,$contra,$base);
$query3="SELECT Idlote, SUM(Ha) AS sumalotes ,Ha, Tamano FROM lote INNER JOIN hacienda ON lote.IdHacienda=hacienda.Idhacienda WHERE lote.IdHacienda='$hacienda'";
$resource3=mysqli_query($conexion3, $query3);
$fila3=mysqli_fetch_row($resource3);

$sumalotes=$fila3[1]-$fila3[2];

$sumalotes=$sumalotes+$tamaño;
if ($sumalotes>$fila3[3]) {
	echo "<script>

swal('Advertecia','Excede Tamaño Finca=($fila3[3] Ha)','warning')
	</script>";
}else{




$conexion=mysqli_connect($local,$usuario,$contra,$base);
$query="UPDATE lote SET NumeroLote=$numero_lote, IdHacienda=$hacienda, latitud='$coordenadas', longitud='$longitud', Ha='$tamaño' WHERE Idlote='$lote'";


$resource=mysqli_query($conexion,$query);

if ($resource==true) {
	echo "<script>
swal('Actualizacion Exitosa','','success')

	</script>";
}else{
	echo "Actualizacion Fallida";
}



}
?>