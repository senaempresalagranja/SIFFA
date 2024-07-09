<?php 
$lote=$_POST["lote"];
$cultivo=$_POST["cultivo"];
$numero_muestra=$_POST["numero_muestra"];
$laboratorio=$_POST["laboratorio"];
$clima=$_POST["clima"];
$profundidad=$_POST["profundidad"];
$densidad_aparente=$_POST["densidad_aparente"];
$PH=$_POST["PH"];
$MO=$_POST["MO"];
$P=$_POST["P"];
$Al=$_POST["Al"];
$Ca=$_POST["Ca"];
$CICE=$_POST["CICE"];
$Mg=$_POST["Mg"];
$K=$_POST["K"];
$Na=$_POST["Na"];
$S=$_POST["S"];
$Fe=$_POST["Fe"];
$Mn=$_POST["Mn"];
$Cu=$_POST["Cu"];
$Zn=$_POST["Zn"];
$B=$_POST["B"];
$porcentaje_Al=$_POST["porcentaje_Al"];
$porcentaje_Na=$_POST["porcentaje_Na"];
$CE=$_POST["CE"];







 $connection=mysqli_connect("localhost","root","","siffa");
 $query="SELECT Idlotecultivo FROM lotecultivo WHERE Idlote='$lote' AND idcultivo='$cultivo'";
 $resource=mysqli_query($connection,$query);
 $fila=mysqli_fetch_row($resource);

  $connection1=mysqli_connect("localhost","root","","siffa");
 $query1="SELECT Numero_Muestreo,Idlotecultivo  FROM analisis WHERE  Numero_Muestreo='$numero_muestra' AND Idlotecultivo='$fila[0]'";
 $resource1=mysqli_query($connection1,$query1);
 $fila1=mysqli_fetch_row($resource1);

if ($fila1==true) {
	echo "Analisis Ya Existe";
}else{
 $connection=mysqli_connect("localhost","root","","siffa");
 $query="INSERT INTO `analisis` (`Numero_Muestreo`, `Idlaboratorio`, `Idlotecultivo`, `Clima`,Densidad_Aparente, PH, `Profundidad_Muestra`, `Materia_Organica`, `Fosforo`, `Aluminio`, `Calcio`, `Magnesio`, `Potasio`, `Sodio`, `CICE`, `Azufre`, `Hierro`, `Manganesio`, `Cobre`, `Zinc`, `Boro`, `Saturacion_Aluminio`, `Saturacion_Sodio`, `CE`) VALUES ('$numero_muestra', '$laboratorio', ' $fila[0]', '$clima', '$densidad_aparente', '$PH', '$profundidad', '$MO', '$P', '$Al', '$Ca', '$Mg', '$K', '$Na', '$CICE', '$S', '$Fe', '$Mn', '$Cu', '$Zn', '$B', '$porcentaje_Al', '$porcentaje_Na', '$CE')";

 $resource=mysqli_query($connection,$query);

 if ($resource==true) {
 	echo "Resgistro Exitosos";
 }else {

 	echo "Restro Fallido";
 }


	
}



 ?>