<?php 


$Nombre_Fertilizante=$_POST["Nombre_Fertilizante"];



$connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT * FROM fertilizantes  WHERE NombreFertilizante LIKE '%$Nombre_Fertilizante%' ORDER BY NombreFertilizante";
$resource=mysqli_query($connection, $query);

$filas=mysqli_num_rows($resource);
if ($filas>0) {
	


while ($fila=mysqli_fetch_row($resource)) {
	
	echo "<div class='col-md-12'>



 <div class='col-md-3 border'>$fila[1]</div>
<div class='col-md-1 border'>$fila[2]</div>
<div class='col-md-1 border'>$fila[3]</div>
<div class='col-md-1 border'>$fila[4]</div>
<div class='col-md-1 border'>$fila[5]</div>
<div class='col-md-1 border'>$fila[6]</div>
<div class='col-md-1 border'>$fila[7]</div>
<div class='col-md-1 border'>$fila[8]</div>
<div class='col-md-1 border'>$fila[9]</div>



	</div>";




}


}else if ($Nombre_Fertilizante!= null) {
echo "<div class='col-md-12 text-center'>
	<h3 class='help-block'>No se ecnuentran Registros de Fertilizantes con Nombre $Nombre_Fertilizante</h3>
</div>";
}
 ?>