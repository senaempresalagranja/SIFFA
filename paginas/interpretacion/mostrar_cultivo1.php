<?php 


$lote1=$_POST["lote1"];

$connection=mysqli_connect("localhost","root","","siffa");

$query="SELECT Idanalisis,Numero_Muestreo FROM `analisis_solo` WHERE Id_Lote=$lote1";
$resource=mysqli_query($connection,$query);

echo "<select name='cultivo1' onclick='mostrar_analisis()' id='id_analisis' class=' form-control'>";
echo "<option value='Selecciona'  >Selecciona</option>";

while($fila=mysqli_fetch_row($resource)){

echo "<option value='$fila[0]'   >$fila[1]</option>";



	

}

echo "</select>";


 ?>