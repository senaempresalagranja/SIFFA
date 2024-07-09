<?php 

$nombre_cultivo=$_POST["nombre_cultivo"];


$local="localhost";
								$usuario="root";
								$contra="";
								$bd="siffa";

								$conexion=mysqli_connect($local,$usuario,$contra,$bd)or die ("problemas en la conexion");

								$query1="SELECT * FROM cultivo WHERE NombreCultivo='$nombre_cultivo'";
								$resource1=mysqli_query($conexion,$query1);

								$fila=mysqli_fetch_row($resource1);

								if ($fila==true) {
									echo "<script>

swal('Advertencia','Cultivo $nombre_cultivo Ya Existe','warning');
									</script>";
								}else{

									
								}

 ?>