<?php 

$problema=$_POST["problema"];

$local="localhost";
$usuario="root";
$contraseña="";
$base="siffa";
$conexion=mysqli_connect($local,$usuario,$contraseña,$base);
$query="SELECT * FROM ayuda WHERE Problema LIKE '%$problema%' ORDER BY problema";
$resource=mysqli_query($conexion,$query);
$filas=mysqli_num_rows($resource);

if ($filas>0) {
	echo " 
<div id='contenedor1'>
<table class='table table-bordered table-condensed table-responsive'>
	<tr>
		<td class='text-center danger'>Problema</td>

	</tr>




";
	while ($fila=mysqli_fetch_row($resource)) {
	echo "

<tr>
		<td ><button type='submit' class='btn  icon-question' name='problema' value='$fila[0]'>  $fila[1]</button></td>

	</tr>



	";
}

echo "</table>

</div> ";
}else{


	echo "<h3 class='help-block icon  icon-cancel-circle'>  Lo siento No Hay resultados</h3>";
}

 ?>