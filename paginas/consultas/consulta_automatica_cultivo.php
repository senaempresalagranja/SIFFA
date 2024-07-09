<?php 

$nombre_cultivo=$_POST["nombre_cultivo"];
$tipo_cultivo=$_POST["tipo_cultivo"];



$connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT * FROM cultivo INNER JOIN requerimiento ON cultivo.idrequerimiento=requerimiento.idrequerimiento INNER JOIN tipo_cultivo ON cultivo.Idtipo_cultivo=tipo_cultivo.Idtipo_cultivo WHERE cultivo.NombreCultivo LIKE'%$nombre_cultivo%' AND Nombre LIKE'%$tipo_cultivo%' ORDER BY NombreCultivo";
$resource=mysqli_query($connection, $query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	

while ($fila=mysqli_fetch_row($resource)) {
	echo "<div class='col-md-12'>


 <div class='col-md-2 border'>$fila[1]</div>
 <div class='col-md-2 border'>$fila[15]</div>
<div class='col-md-1 border'>$fila[5]</div>
<div class='col-md-1 border'>$fila[6]</div>
<div class='col-md-1 border'>$fila[7]</div>
<div class='col-md-1 border'>$fila[8]</div>
<div class='col-md-1 border'>$fila[9]</div>
<div class='col-md-1 border'>$fila[10]</div>
<div class='col-md-1 border'>$fila[11]</div>
<div class='col-md-1 border'>$fila[12]</div>
 


	</div>";

}


}else if ($nombre_cultivo!= null) {
	echo "<div class='col-md-12 text-center'>
		<h3 class='help-block'>No se encuentran Registros de cultivo $nombre_cultivo </h3>
	</div>";
}else if ($tipo_cultivo!= null) {
	echo "<div class='col-md-12 text-center'>
		<h3 class='help-block'>No se encuentran Registros de Tipo cultivo $tipo_cultivo </h3>
	</div>";
}



 ?>


