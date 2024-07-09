<?php

session_start();
$usuario=$_SESSION['usuario'];
$contraseña=$_SESSION['contraseña'];

if (isset($usuario) && isset($contraseña)) {

	$connection=mysqli_connect("localhost","root","","siffa");
							$query="SELECT * FROM usuario WHERE Usuario='$usuario'";
							$resource=mysqli_query($connection,$query);

							$fila=mysqli_fetch_row($resource);




}else{

header("Location:../../index.php");	


}


						


					

 ?>
