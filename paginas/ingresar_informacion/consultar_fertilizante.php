<?php 


$fertilizante=$_POST["fertilizante"];



$connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT * FROM `fertilizantes` WHERE Idfertilizante='$fertilizante' ";
$resource=mysqli_query($connection,$query);
$fila=mysqli_fetch_row($resource);
	

echo "<script  type='text/javascript' charset='utf-8' >

var nombre_fetilizante=document.getElementById('nombre_fetilizante').value='$fila[1]';
var nutriente_N=document.getElementById('nutriente_N').value='$fila[2]';
var nutriente_F=document.getElementById('nutriente_F').value='$fila[3]';
var nutriente_K=document.getElementById('nutriente_K').value='$fila[4]';
var nutriente_Ca=document.getElementById('nutriente_Ca').value='$fila[5]';
var nutriente_Mg=document.getElementById('nutriente_Mg').value='$fila[6]';
var nutriente_S=document.getElementById('nutriente_S').value='$fila[7]';
var nutriente_Zn=document.getElementById('nutriente_Zn').value='$fila[8]';
var nutriente_B=document.getElementById('nutriente_B').value='$fila[9]';
var nutriente_Cu=document.getElementById('nutriente_Cu').value='$fila[10]';


</script>";

 ?>