<?php 

$tamaño_cultivo=$_POST["tamaño_cultivo"];
$finca=$_POST["finca"];
$lote=$_POST["lote"];
$cultivo=$_POST["cultivo"];
$lote1=$_POST["id_lotecultivo"];



$local="localhost";
$usuario="root";
$contra="";
$base="siffa";



$conexion3=mysqli_connect($local,$usuario,$contra,$base);
$query3="SELECT Idlotecultivo,SUM(Extension)AS sumacultivo,Extension, Ha FROM lotecultivo INNER JOIN lote ON lotecultivo.Idlote=lote.Idlote  WHERE lotecultivo.Idlote='$lote'";
$resource3=mysqli_query($conexion3, $query3);
$fila3=mysqli_fetch_row($resource3);

$sumacultivos=$fila3[1]-$fila3[2];

$sumacultivos=$sumacultivos+$tamaño_cultivo;



if ($sumacultivos>$fila3[3]) {
  echo "<script>
swal('Advertencia','Excede tamaño del Lote=($fila3[3] Ha)','warning')

  </script>";
}else{




$conexion=mysqli_connect($local,$usuario,$contra,$base);
$query="UPDATE lotecultivo SET  Idlote='$lote', idcultivo='$cultivo', Extension='$tamaño_cultivo' WHERE Idlotecultivo=$lote1";
$resource=mysqli_query($conexion,$query);
if ($resource==true) {
	echo "<script>

swal('Actualizacion Exitosa','','success');
	</script>";
}else{
	echo "Actualizacion Fallida";
}


}

 ?>