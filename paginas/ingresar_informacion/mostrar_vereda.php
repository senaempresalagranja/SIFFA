<?php 




$municipio=$_POST['municipio'];
// echo "$municipio";
$connection=mysqli_connect("localhost","root","","siffa");

$query="SELECT * FROM vereda WHERE Idmunicipio=$municipio ORDER BY NombreVereda";
$resource=mysqli_query($connection,$query);

echo "<select name='Vereda' id='Vereda' onclick='validar_existencia()' class='Vereda form-control'>";
echo "<option value='Selecciona' >Selecciona</option>";

while($fila=mysqli_fetch_row($resource)){

echo "<option value='$fila[0]'  >$fila[1]</option>";



	

}

echo "</select>";


?>