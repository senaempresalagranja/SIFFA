<?php 


$hot='localhost';
$usuario='root';
$contra='';
$base='siffa';

$Usuario=$_POST["Usuario"];
$contraseña_actual=$_POST["contraseña_actual"];
$contraseña_nueva=$_POST["contraseña_nueva"];

$conexion=mysqli_connect($hot,$usuario,$contra,$base);
$query="SELECT * FROM usuario  WHERE Rol='Consulta' AND password='$contraseña_actual'";

$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);

if ($fila==true) {


$conexion=mysqli_connect($hot,$usuario,$contra,$base);
$query="UPDATE usuario SET  password='$contraseña_nueva'";
$resource=mysqli_query($conexion,$query);
if ($resource==true) {
	echo "Actualizacion Exitosa";




	
}else{
	echo "Actualizacion Fallida";
}




}else{

	echo "Conraseña Actual Icorrecta";
	echo "<script>

var contraseña_nueva=document.getElementById('contraseña_nueva').value='';
var repita_contraseña=document.getElementById('repita_contraseña').value='';
var contraseña_actual=document.getElementById('contraseña_actual').value='';


	</script>";
}




 ?>