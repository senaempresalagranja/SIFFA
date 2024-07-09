<?php


$usuario1=$_POST["usuario"];
$contraseña=$_POST["contraseña"];


if ($usuario1=="Consulta") {
	
	echo "<script>


	$('#formualrio').submit();



	</script>";

}else{

$loca="localhost";
$usuario="root";
$contra="";
$base="siffa";

// echo "<span class='help-block'>$usuario</span";

$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM  usuario WHERE Rol='$usuario1'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);


// AQUI ABAJO ES PARA DESENCRIPTAR LA CONTRASEÑA
$salt='AZC·$%9742#¬~€~¬~#bsg35679#~€¬$)%1243';
$resource1=password_verify($salt . $contraseña, $fila[3]);

if ($resource1==true) {



	echo "<script>


	$('#formualrio').submit();



	</script>";


}else{

	echo "<script>


	swal('Error','Usuario o Contraseña Invalidos','error')



	</script>";

}


}


?>
