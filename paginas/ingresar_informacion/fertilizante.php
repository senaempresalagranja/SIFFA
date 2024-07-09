<?php

$nombre_fetilizante=$_POST["nombre_fetilizante"];
$nutriente_N=$_POST["nutriente_N"];
$nutriente_F=$_POST["nutriente_F"];
$nutriente_K=$_POST["nutriente_K"];
$nutriente_Ca=$_POST["nutriente_Ca"];
$nutriente_Mg=$_POST["nutriente_Mg"];
$nutriente_S=$_POST["nutriente_S"];
$nutriente_Zn=$_POST["nutriente_Zn"];
$nutriente_B=$_POST["nutriente_B"];
$nutriente_Cu=$_POST["nutriente_Cu"];



$loca="localhost";
$usuario="root";
$contra="";
$base="siffa";



$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM  fertilizantes WHERE NombreFertilizante='$nombre_fetilizante'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($fila==true) {
	echo "<script>
swal('Advertencia','Fertilizante $nombre_fetilizante Ya Existe','warning')

	</script>";

}else {



		$conexion3=mysqli_connect("localhost","root","","siffa");
		$query3="INSERT INTO fertilizantes (NombreFertilizante, Nitrogeno, Fosforo,	Potasio,Calcio, Magnesio, Azufre, Zinc, Boro, Cobre) VALUES ('$nombre_fetilizante', $nutriente_N, $nutriente_F,$nutriente_K, $nutriente_Ca,$nutriente_Mg, $nutriente_S, $nutriente_Zn, $nutriente_B, $nutriente_Cu )";


		$resource4=mysqli_query($conexion3,$query3);


		if ($resource4==true) {
			echo "<script>

swal('Registro Exitoso','','success');
			</script>";
			}else{

				echo "<span class='help-block'>Error en el Registro</span";
				}




			}





			?>
