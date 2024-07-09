<?php 

$lote1=$_POST["lote1"];
$cultivo=$_POST["cultivo"];




$connection=mysqli_connect("localhost","root","","siffa");

$query="SELECT * FROM lotecultivo  WHERE Idlote='$lote1' AND  idcultivo='$cultivo'";
$resource=mysqli_query($connection,$query);

$fila=mysqli_fetch_row($resource); 	

echo "<script>


  var hectarea=document.getElementById('hectarea').value='$fila[3]'


</script>";

 ?>