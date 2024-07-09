<?php 

$nitrogeno=$_POST["nitrogeno"];
$Id_fertilizante=$_POST["Id_fertilizante"];





// EL ALGORITMO QUE DESARROLLO ES EL SIGUIENTE : POR PRIMERA VEZ EL USUARIO SELECCIONA E INGRESA UNCA CANTIDAD DE BULTOS LA FUNCION LLEGA HASTA ESTE PUENTO EN EL CUAL PARA PODER ACUMULAR LOS NUTRIENTES EN EL MOMENTO DE QUE EL USUARIO TENGA DOS FERTILIZANTES DIFERENTES PUES LOS NUTRIENTES DE ESOS DOS SE ACUMULEN Y SEHA UN SIMULADOR MUY REAL POR ESTA RAZON COMIENZA ASI: PRIMERA VEZ QUE ESCRIBE EN ESE FERTILIZANTES NO ESXISTE EL ARCHIVO LO CREA Y SUMA TODO DE LO CONTRARIO SI EXISTE ENTONCES LO REMPLAZA A 0 CERO PARA QUE NO ME ACUMULE LO DEL MISMO FERTILIZANTE


if ($nitrogeno>=0) {
	
if (file_exists($Id_fertilizante . "_N.txt")) {

	$Archivo_N=file_get_contents($Id_fertilizante . "_N.txt");
settype($Archivo_N, 'integer');


$Contendo_Archivo_N=0;

file_put_contents($Id_fertilizante . "_N.txt", $Contendo_Archivo_N);


$Contendo_Archivo_N=$Contendo_Archivo_N + $nitrogeno;

file_put_contents($Id_fertilizante . "_N.txt", $Contendo_Archivo_N);

echo "$Contendo_Archivo_N";

}else{
// AQUI ABAJO ES PARA CREAR UN ARCHIVO
fopen($Id_fertilizante . "_N.txt" , "a");
// ----------------------------------------------


	$Archivo_N=file_get_contents($Id_fertilizante . "_N.txt");
settype($Archivo_N, 'integer');


$Contendo_Archivo_N=0;

file_put_contents($Id_fertilizante . "_N.txt", $Contendo_Archivo_N);


$Contendo_Archivo_N=$Contendo_Archivo_N + $nitrogeno;

file_put_contents($Id_fertilizante . "_N.txt", $Contendo_Archivo_N);

echo "$Contendo_Archivo_N";



}


}

// // AQUI ABAJO ES PARA CREAR UN ARCHIVO
// fopen($nombre_archivo , "a");
// // ----------------------------------------------

// $Archivo_N=file_get_contents("nutriente_N.txt");
// settype($Archivo_N, 'integer');


// $Contendo_Archivo_N=$nitrogeno + $Archivo_N;

// file_put_contents('nutriente_N.txt', $Contendo_Archivo_N);

 ?>

