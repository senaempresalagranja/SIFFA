<?php 
$fertilizante=$_POST["fertilizante"];
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




$connection1=mysqli_connect("localhost","root","","siffa");
$query1="UPDATE fertilizantes SET NombreFertilizante='$nombre_fetilizante',  Nitrogeno='$nutriente_N', Fosforo='$nutriente_F', Potasio='$nutriente_K', Calcio='$nutriente_Ca', Magnesio='$nutriente_Mg', Azufre='$nutriente_S', Zinc='$nutriente_Zn', Boro='$nutriente_B', Cobre='$nutriente_Cu' WHERE Idfertilizante='$fertilizante'";

$resource1=mysqli_query($connection1,$query1);

if ($resource1==true) {
	echo "<script>

swal('Actualizacion Exitosa','','success');
	</script>";
}else{


	echo "Actulizacion Fallida";
}

 ?>