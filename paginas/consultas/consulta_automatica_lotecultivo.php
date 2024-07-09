<?php 

$Nombre_Cultivo=$_POST["Nombre_Cultivo"];
$Nombre_Finca=$_POST["Nombre_Finca"];





$connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT NumeroLote,extension,NombreCultivo,latitud,longitud, Ha,Nombre,NombreVereda,Nombre_Municipio, NombreDepartamento,Tamano FROM `lote` INNER JOIN lotecultivo ON lote.Idlote=lotecultivo.Idlote INNER JOIN cultivo ON lotecultivo.idcultivo=cultivo.idcultivo INNER JOIN Hacienda ON lote.IdHacienda=hacienda.Idhacienda INNER JOIN vereda ON hacienda.Idvereda=vereda.Idvereda INNER JOIN municipio ON vereda.Idmunicipio=municipio.Idmunicipio INNER JOIN departamento ON municipio.Iddepartamento=departamento.Iddepartamento WHERE NombreCultivo LIKE '%$Nombre_Cultivo%' AND Nombre LIKE '%$Nombre_Finca%' ORDER BY Nombre,NumeroLote  ";


$resource=mysqli_query($connection, $query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {

while ($fila=mysqli_fetch_row($resource)) {

echo "<div class='col-md-12'>


 <div class='col-md-1 border'>$fila[0]</div>
 <div class='col-md-1 border'>$fila[5]</div>
<div class='col-md-2 border'>$fila[2]</div>
<div class='col-md-1 border'>$fila[1]</div>
<div class='col-md-1 border'>$fila[3]</div>
<div class='col-md-1 border'>$fila[4]</div>
<div class='col-md-1 border'>$fila[6]</div>
<div class='col-md-1 border'>$fila[10]</div>
<div class='col-md-2 border'>$fila[7]</div>





	</div>";
}
}else if ($Nombre_Finca!=null ){

echo " <div class='text-center help-block col-md-12'>

<h3>No hay Registros de Finca  $Nombre_Finca</h3>

</div>";

}else if ($Nombre_Cultivo!=null ){

echo " <div class='text-center help-block col-md-12'>

<h3>No hay Registros de Cultivo $Nombre_Cultivo</h3>

</div>";

}
 ?>