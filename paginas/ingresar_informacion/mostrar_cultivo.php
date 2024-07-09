<?php 


$lote1=$_POST["lote1"];

$connection=mysqli_connect("localhost","root","","siffa");

$query="SELECT * FROM lotecultivo INNER JOIN cultivo ON lotecultivo.idcultivo=cultivo.idcultivo WHERE lotecultivo.Idlote='$lote1' ORDER BY NombreCultivo";
$resource=mysqli_query($connection,$query);

echo "<select name='' id='cultivo1' class=' form-control'>";
echo "<option value='Selecciona'  >Selecciona</option>";

while($fila=mysqli_fetch_row($resource)){

echo "<option value='$fila[2]'   >$fila[5]</option>";



	

}

echo "</select>";


 ?>