<?php 

$Nombre_Laboratorio=$_POST["Nombre_Laboratorio"];
$municipio=$_POST["municipio"];



$connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT Nombre_Laboratorio,Direccion, Telefono ,Nombre_Municipio, NombreDepartamento FROM `laboratorio` INNER JOIN municipio ON laboratorio.Idmunicipio=municipio.Idmunicipio INNER JOIN departamento ON municipio.Iddepartamento=departamento.Iddepartamento WHERE Nombre_Laboratorio like '%$Nombre_Laboratorio%' AND Nombre_Municipio like '%$municipio%' ORDER BY Nombre_Laboratorio";
$resource=mysqli_query($connection, $query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	


while ($fila=mysqli_fetch_row($resource)) {
	echo "<div class='col-md-12'>


 <div class='col-md-2 borde'>$fila[0]</div>
 <div class='col-md-3 borde'>$fila[1]</div>
<div class='col-md-2 borde'>$fila[2]</div>
<div class='col-md-2 borde'>$fila[3]</div>
<div class='col-md-2 borde'>$fila[4]</div>



	</div>";

}
}else if ($Nombre_Laboratorio!= null) {
echo "<div class='col-md-12 text-center'>
	<h3 class='help-block'>No se encuentra Registros de Laboratorio $Nombre_Laboratorio</h3>
</div>";
}else if ($municipio!= null) {
echo "<div class='col-md-12 text-center'>
	<h3 class='help-block'>No se encuentra Registros de Laboratorios en el Municipio  $municipio</h3>
</div>";
}
 ?>