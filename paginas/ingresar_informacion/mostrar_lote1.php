<?php 


$finca=$_POST["finca"];

$connection=mysqli_connect("localhost","root","","siffa");

$query="SELECT * FROM lote WHERE Idhacienda=$finca ORDER BY NumeroLote";
$resource=mysqli_query($connection,$query);

echo "<select name='lote1' id='lote1' onclick='mostrar_cultivo()' class='lote form-control'>";
echo "<option value='Selecciona'  >Selecciona</option>";

while($fila=mysqli_fetch_row($resource)){

echo "<option value='$fila[0]'   >$fila[1]</option>";



	

}

echo "</select>";


 ?>