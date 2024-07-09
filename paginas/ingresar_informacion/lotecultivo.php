<?php 

$finca=$_POST["finca"];
$lote=$_POST["lote"];
$cultivo=$_POST["cultivo"];

$tamaño_cultivo=$_POST["tamaño_cultivo"];
$loca="localhost";
$usuario="root";
$contra="";
$base="siffa";



$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM lotecultivo WHERE Idlote='$lote' AND idcultivo='$cultivo'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource) ;
if ($fila==true) {
	echo "<script>

swal('Advertencia','Cultivo en el Lote Ya Existe','warning');
	</script>";

} else {



$conexion3=mysqli_connect($loca,$usuario,$contra,$base);
$query3="SELECT Idlotecultivo,SUM(Extension),Ha FROM lotecultivo INNER JOIN lote ON lotecultivo.Idlote=lote.Idlote WHERE lotecultivo.Idlote='$lote'";
$resource3=mysqli_query($conexion, $query3);
$fila3=mysqli_fetch_row($resource3);

$sumacultivos=$fila3[1]+$tamaño_cultivo;




if ($sumacultivos>$fila3[2]) {
  echo "<script>

swal('Advertencia','Excede tamaño del lote=($fila3[2] Ha)','warning');
  </script>";
}else{

$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="INSERT INTO lotecultivo (Idlote,idcultivo,Extension) VALUES ('$lote', '$cultivo','$tamaño_cultivo')";

$resource=mysqli_query($conexion, $query);

if ($resource==true) {
	echo "<script>

swal('Resgistro Exitoso','','success')
	</script>";
}else{
	echo "Registro Fallido";
}





}




}
 ?>