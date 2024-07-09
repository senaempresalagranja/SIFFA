<?php 

$nombre_fetilizante=$_POST["nombre_fetilizante"];


						$local="localhost";
						$usuario="root";
						$contra="";
						$bd="siffa";

						$conexion=mysqli_connect($local,$usuario,$contra,$bd)or die ("problemas en la conexion");





						$query="SELECT * FROM fertilizantes WHERE NombreFertilizante='$nombre_fetilizante'";

						$resource=mysqli_query($conexion,$query);

						$fila=mysqli_fetch_row($resource);

						if ($fila==true) {
							echo "<script>

swal('Advertencia','Fertilizante $nombre_fetilizante Ya Existe','warning');

							</script>";
						}
 ?>