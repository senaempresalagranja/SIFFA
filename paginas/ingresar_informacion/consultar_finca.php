<?php 

$finca=$_POST["finca"];



$loca="localhost";
$usuario="root";
$contra="";
$base="siffa";



$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM hacienda INNER JOIN vereda ON hacienda.Idvereda=vereda.Idvereda INNER JOIN municipio ON vereda.Idmunicipio=municipio.Idmunicipio INNER JOIN departamento ON departamento.Iddepartamento=municipio.Iddepartamento WHERE Idhacienda='$finca'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);

echo "<script>
;

var nombre=document.getElementById('nombre').value='$fila[1]';
var fax=document.getElementById('fax').value='$fila[2]';
var telefono=document.getElementById('telefono').value='$fila[3]';
var Vereda=document.getElementById('Vereda').value='$fila[4]';
var tamaño=document.getElementById('tamaño').value='$fila[5]';
var departamento=document.getElementById('departamento').value='$fila[11]';
var municipio=document.getElementById('municipio').value='$fila[8]';
var Vereda=document.getElementById('Vereda').value='$fila[4]';	
var municipio=document.getElementById('municipio').style.opacity='1';
var Vereda=document.getElementById('Vereda').style.opacity='1';

</script>

";





?>