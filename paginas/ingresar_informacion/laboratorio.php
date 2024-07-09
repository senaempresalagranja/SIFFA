<?php 
$nombre_laboratorio=$_POST["nombre_laboratorio"];
$dirreccion=$_POST["dirreccion"];
$telefono=$_POST["telefono"];
$municipio=$_POST["municipio"];





$loca="localhost";
$usuario="root";
$contra="";
$base="siffa";



$conexion=mysqli_connect($loca,$usuario,$contra,$base);

$query="SELECT *  FROM laboratorio WHERE Nombre_Laboratorio='$nombre_laboratorio'AND Direccion='$dirreccion' AND Idmunicipio='$municipio' ";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource) ;
if ($fila==true) {
	echo "<script>

swal('Advertencia','Laboratorio $nombre_laboratorio Ya existe','warning');
	</script>";
}else
{




$conexion1=mysqli_connect($loca,$usuario,$contra,$base);
$query1="INSERT INTO laboratorio (Nombre_Laboratorio,Direccion, Telefono, Idmunicipio) VALUES 
('$nombre_laboratorio', '$dirreccion', $telefono, $municipio) ";
$resource1=mysqli_query($conexion1,$query1);

if ($resource1==true) {
	echo "<script>
swal('Registro Exitoso','','success');
	</script>";
}else{
	echo "Registro Fallido";
}

}

 ?>