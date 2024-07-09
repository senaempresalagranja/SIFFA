<?php 

$numero_lote=$_POST["numero_lote"];
$hacienda=$_POST["hacienda"];
$coordenadas=$_POST["coordenadas"];
$longitud=$_POST["longitud"];
$tamaño=$_POST["tamaño"];





$loca="localhost";
$usuario="root";
$contra="";
$base="siffa";



$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT NumeroLote, IdHacienda  FROM  lote WHERE NumeroLote='$numero_lote' AND IdHacienda='$hacienda' ";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource) ;
if ($fila==true) {
	echo "<script>

swal('Advertencia','Lote Ya Existe','warning')
	</script>";

} else {


$conexion3=mysqli_connect($loca,$usuario,$contra,$base);
$query3="SELECT Idlote, SUM(Ha) AS sumalotes , Tamano FROM lote INNER JOIN hacienda ON lote.IdHacienda=hacienda.Idhacienda WHERE lote.IdHacienda='$hacienda'";
$resource3=mysqli_query($conexion, $query3);
$fila3=mysqli_fetch_row($resource3);

$sumalotes=$fila3[1]+$tamaño;

if ($sumalotes>$fila3[2]) {
	echo "<script>
swal('Advertencia','Excede Tamaño finca=($fila3[2] Ha)','warning')
	</script>";
}else{
	




$local="localhost";
$usuario="root";
$contra="";
$base="siffa";

$conexion=mysqli_connect($local,$usuario,$contra,$base);
$query="INSERT INTO lote (NumeroLote, IdHacienda,latitud,longitud,Ha) VALUES ('$numero_lote','$hacienda','$coordenadas','$longitud',$tamaño) ";

$resource=mysqli_query($conexion, $query);

if ($resource==true) {
	echo "<script>
swal('Resgistro Exitoso',' ','success')
	</script>";
}else{
	echo "Registro Fallido";
}


}

}
 ?>