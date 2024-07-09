<?php 


$cultivo1=$_POST["cultivo1"];

$connection=mysqli_connect("localhost","root","","siffa");

$query="SELECT Idanalisis,Numero_Muestreo FROM `analisis_solo` INNER JOIN lotecultivo ON analisis.Idlotecultivo=lotecultivo.Idlotecultivo WHERE idcultivo='$cultivo1'";
$resource=mysqli_query($connection,$query);

echo "<select name='id_analisis' onclick='mostrar_analisis()' id='id_analisis' class=' form-control'>";
echo "<option value='Selecciona'  >Selecciona</option>";

while($fila=mysqli_fetch_row($resource)){

echo "<option value='$fila[0]' data-dismiss='modal' >$fila[1]</option>";



	

}

echo "</select>";




 ?>