<?php 

$cultivo=$_POST["cultivo"];
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

$connection=mysqli_connect("localhost","root","","siffa");
$query="UPDATE cultivo SET NombreCultivo='$nombre_cultivo', Idtipo_cultivo=$tipo_cultivo WHERE idcultivo=$cultivo";

$resource=mysqli_query($connection,$query);




$connection1=mysqli_connect("localhost","root","","siffa");
$query1="UPDATE requerimiento SET Nitrogeno='$nutriente_N', Fosforo='$nutriente_F', Potasio='$nutriente_K', Calcio='$nutriente_Ca', Magnesio='$nutriente_Mg', Azufre='$nutriente_S', Zinc='$nutriente_Zn', Boro='$nutriente_B', Cobre='$nutriente_Cu' WHERE idrequerimiento='$cultivo'";

$resource1=mysqli_query($connection1,$query1);

if ($resource==true && $resource1==true) {
	echo "<script>
swal('Actualizacion Exitosa','','success')

	</script>";
}

 ?>