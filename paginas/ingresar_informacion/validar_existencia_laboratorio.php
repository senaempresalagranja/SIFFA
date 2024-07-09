<?php 
$nombre_laboratorio=$_POST["nombre_laboratorio"];





								$local="localhost";
								$usuario="root";
								$contra="";
								$bd="siffa";

								$conexion=mysqli_connect($local,$usuario,$contra,$bd)or die ("problemas en la conexion");

								$query="SELECT * FROM laboratorio WHERE Nombre_Laboratorio='$nombre_laboratorio'";

								$resource=mysqli_query($conexion, $query);
								$fila=mysqli_fetch_row($resource);
								if ($fila==true) {
									echo "<script>
swal('Advertencia','Laboratorio $nombre_laboratorio Ya Existe','warning');
									</script>";
								}


 ?>