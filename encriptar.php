<?php 

// FORMA 1 DE ENCRIPTAR
// $salt='AZC·$%9742#¬~€~¬~#bsg35679#~€¬$)%1243';
// $contraseña=md5($salt."pajsdp98379dpowijasd9w7yoiuh");

// echo "$contraseña";



// MEJOR FORMA DE ENCRIPTA

$salt='AZC·$%9742#¬~€~¬~#bsg35679#~€¬$)%1243';
$contraseña=password_hash($salt .'escribir contraseña', PASSWORD_DEFAULT,["cost"=> 12]);
$resource=password_verify($salt . "escribir contraseña", $contraseña);
echo "$contraseña";

// if ($resource==true) {
// 	echo "contraseña correcta";
// }else{
// 	echo " contraseña incorrecta";
// }


 ?>