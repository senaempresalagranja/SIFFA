<?php 


$departamento=$_POST["departamento"];



$connection=mysqli_connect("localhost","root","","siffa");

$query="SELECT * FROM municipio WHERE Iddepartamento=$departamento ORDER BY Nombre_Municipio";
$resource=mysqli_query($connection,$query);

echo "<select name='municipio' onclick='mostrar_veredas()' id='municipio' class='municipio form-control'>";
echo "<option value='Selecciona'  >Selecciona</option>";

while($fila=mysqli_fetch_row($resource)){

echo "<option value='$fila[0]'  >$fila[1]</option>";



	

}

echo "</select>";


 ?>