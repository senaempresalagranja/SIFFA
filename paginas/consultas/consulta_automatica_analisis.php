<?php 


$Nombre_Finca=$_POST["Nombre_Finca"];
$lote=$_POST["lote"];
$cultivo=$_POST["cultivo"];




$connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT  COUNT(Idanalisis) AS Numeros_Analisis, NumeroLote, Ha, NombreCultivo ,  Extension  , Nombre, Tamano FROM `analisis` INNER JOIN lotecultivo ON analisis.Idlotecultivo=lotecultivo.Idlotecultivo INNER JOIN lote ON lotecultivo.Idlote=lote.Idlote INNER JOIN hacienda ON lote.IdHacienda=hacienda.Idhacienda INNER JOIN cultivo ON lotecultivo.idcultivo=cultivo.idcultivo
WHERE Nombre LIKE '%$Nombre_Finca%' AND NumeroLote LIKE '%$lote%' AND  NombreCultivo LIKE '%$cultivo%'  GROUP BY analisis.Idlotecultivo ORDER BY Nombre,Numero_Muestreo, NumeroLote";
$resource=mysqli_query($connection, $query);


$filas=mysqli_num_rows($resource);
if ($filas>0) {



while ($fila=mysqli_fetch_row($resource)) {
	
	echo "<div class='col-md-12'>


<div class=' col-md-2  '>$fila[0]</div>
<div class=' col-md-1  '>$fila[1]</div>
<div class=' col-md-1  '>$fila[2]</div>
<div class=' col-md-2  '>$fila[3]</div>
<div class=' col-md-2  '>$fila[4]</div>
<div class=' col-md-2  '>$fila[5]</div>
<div class=' col-md-2  '>$fila[6]</div>



	</div>";




}

}else if ($Nombre_Finca !=null) {

echo "
<div class='col-md-12 text-center help-block'>
<h3>No se encuentran Registros de Finca $Nombre_Finca</h3>
</div>

";
}else if ($cultivo !=null) {

echo "
<div class='col-md-12 text-center help-block'>
<h3>No se encuentran Registros de Cultivo $cultivo</h3>
</div>

";
}
else if ($lote !=null) {

echo "
<div class='col-md-12 text-center help-block'>
<h3>No se encuentran Registros de Lote $lote</h3>
</div>

";
}

 ?>