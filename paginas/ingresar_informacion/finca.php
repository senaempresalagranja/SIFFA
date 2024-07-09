<?php 
$tamaño=$_POST["tamaño"];
$nombre=$_POST["nombre"];
$fax=$_POST["fax"];
$telefono=$_POST["telefono"];
$Vereda=$_POST["Vereda"];




$loca="localhost";
$usuario="root";
$contra="";
$base="siffa";



$conexion=mysqli_connect($loca,$usuario,$contra,$base);

$query="SELECT *  FROM hacienda INNER JOIN vereda ON hacienda.Idvereda=Vereda.Idvereda WHERE Nombre='$nombre'AND hacienda.Idvereda='$Vereda' ";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource) ;
if ($fila==true) {
	echo "
<script>
swal('Advertencia','Finca $nombre Ya existe En la Vereda $fila[7]','warning')
</script>";
}else
{




$conexion1=mysqli_connect($loca,$usuario,$contra,$base);
$query1="INSERT INTO hacienda (Nombre,Fax, Telefono, Idvereda, Tamano) VALUES 
('$nombre', $fax, $telefono, $Vereda, $tamaño) ";
$resource1=mysqli_query($conexion1,$query1);

if ($resource1==true) {


		echo "
<script>
swal('Registro Exitoso','','success')
</script>";

}else{
		echo "
<script>
swal('Registro Fallido','','error')
</script>";
}

}

 ?>