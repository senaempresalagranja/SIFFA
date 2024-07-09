<?php 
$lote=$_POST["lote"];


$connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT * FROM lote WHERE Idlote='$lote'";
$resource=mysqli_query($connection,$query);

$fila=mysqli_fetch_row($resource);	

echo "<script  type='text/javascript' charset='utf-8' >



var numero_lote=document.getElementById('numero_lote').value='$fila[1]';
var hacienda=document.getElementById('hacienda').value='$fila[2]';
var coordenadas=document.getElementById('coordenadas').value='$fila[3]';
var longitud=document.getElementById('longitud').value='$fila[4]';
var tamaño=parseFloat(document.getElementById('tamaño').value='$fila[5]');
</script>";
 ?>