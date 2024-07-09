<?php
$nombre_cultivo=$_POST["nombre_cultivo"];
$tipo_cultivo=$_POST["tipo_cultivo"];
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
$query="SELECT * FROM  cultivo WHERE NombreCultivo='$nombre_cultivo'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource) ;
if ($fila==true) {
	echo "<script>
swal('Advertencia','Cultivo $nombre_cultivo Ya Existe','warning')
	</script>";

}else {









		$conexion3=mysqli_connect("localhost","root","","siffa");
		$query3="INSERT INTO requerimiento (
		Nitrogeno,Fosforo,Potasio,Calcio,Magnesio,Azufre,Zinc,Boro,Cobre) VALUES ('$nutriente_N','$nutriente_F', '$nutriente_K', '$nutriente_Ca' , '$nutriente_Mg','$nutriente_S','$nutriente_Zn' ,'$nutriente_B' ,'$nutriente_Cu')";


		$resource4=mysqli_query($conexion3,$query3);





			$conexion1=mysqli_connect($loca,$usuario,$contra,$base);



	$query1="SELECT  MAX(idrequerimiento) FROM requerimiento";
	$resource1=mysqli_query($conexion1,$query1);
	$fila1=mysqli_fetch_row($resource1);

	




	$conexion2=mysqli_connect("localhost","root","","siffa");
	$query2="INSERT INTO `cultivo`(`NombreCultivo`, `Idtipo_cultivo`, `idrequerimiento`) VALUES ('$nombre_cultivo','$tipo_cultivo',$fila1[0])";
		$resource3=mysqli_query($conexion2,$query2);


		if ($resource3==true && $resource4==true) {
			echo "<script>
swal('Registro Exitoso','','success')
			</script>";
			}else{

				echo "<span class='help-block'>Error en el Registro</span";
				}




			}





			?>
