<?php 


$Nombre_Finca=$_POST["Nombre_Finca"];
$vereda=$_POST["vereda"];
$municipio=$_POST["municipio"];




$connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT Nombre,Fax,Telefono,Tamano, NombreVereda,Nombre_Municipio,NombreDepartamento, COUNT(NumeroLote) AS lotes FROM hacienda INNER JOIN lote ON hacienda.Idhacienda=lote.IdHacienda INNER JOIN vereda ON hacienda.Idvereda=vereda.Idvereda INNER JOIN municipio ON vereda.Idmunicipio=municipio.Idmunicipio INNER JOIN departamento ON municipio.Iddepartamento=departamento.Iddepartamento WHERE Nombre LIKE '%$Nombre_Finca%' AND NombreVereda LIKE '%$vereda%' AND Nombre_Municipio LIKE '%$municipio%' GROUP BY Hacienda.Idhacienda  ORDER BY hacienda.Nombre";
$resource=mysqli_query($connection, $query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	


while ($fila=mysqli_fetch_row($resource)) {
	
	echo "<div class='col-md-12'>


 <div class='col-md-2 border'>$fila[0]</div>
 <div class='col-md-1 border'>$fila[1]</div>
<div class='col-md-1 border'>$fila[2]</div>
<div class='col-md-1 border'>$fila[3]</div>
<div class='col-md-2 border'>$fila[4]</div>
<div class='col-md-1 border'>$fila[5]</div>
<div class='col-md-2 border'>$fila[6]</div>
<div class='col-md-1 border'>$fila[7]</div>



	</div>";




}
}else if ($Nombre_Finca!= null) {
echo "<div class='col-md-12 text-center'>
	<h3 class='help-block'>No se encuentran Registros de Finca $Nombre_Finca</h3>
</div>";
}else if ($vereda!= null) {
echo "<div class='col-md-12 text-center'>
	<h3 class='help-block'>No se encuentran Registros de  Fincas en la vereda $vereda</h3>
</div>";
}else if ($municipio!= null) {
echo "<div class='col-md-12 text-center'>
	<h3 class='help-block'>No se encuentran Registros de  Fincas en el municipio $municipio</h3>
</div>";
}
 ?>