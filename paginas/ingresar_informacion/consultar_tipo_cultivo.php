<?php 


$clase=$_POST["clase"];


$connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT * FROM tipo_cultivo WHERE Idtipo_cultivo='$clase'";
$resource=mysqli_query($connection,$query);
$fila=mysqli_fetch_row($resource);

echo "<script>
 var nombre_tipo_cultivo=document.getElementById('nombre_tipo_cultivo').value='$fila[1]';




</script>";

 ?>