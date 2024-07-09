<?php 

$formatos=array('.jpg','.png');


	$nombreArchivo=$_FILES['imagenes']['name'];
	$nombreTemporalArchivo=$_FILES['imagenes']['tmp_name'];
	$ext=substr($nombreArchivo, strrpos($nombreArchivo, '.'));
	if (in_array($ext, $formatos)) {
		if (move_uploaded_file($nombreTemporalArchivo, "img/cultivos/$nombreArchivo")) {
			echo "siii";
		}
		else{

			echo "nooo";
		}
	}










 ?>