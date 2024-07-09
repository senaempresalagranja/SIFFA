<?php 


$fertilizante_N=$_POST["fertilizante_N"];
$fetilizante_P=$_POST["fetilizante_P"];
$fetilizante_K=$_POST["fetilizante_K"];
$fetilizante_Ca=$_POST["fetilizante_Ca"];
$fetilizante_Mg=$_POST["fetilizante_Mg"];
$fetilizante_S=$_POST["fetilizante_S"];
$fetilizante_Zn=$_POST["fetilizante_Zn"];
$fetilizante_B=$_POST["fetilizante_B"];


$diferencia_N=$_POST["diferencia_N"];
$diferencia_P=$_POST["diferencia_P"];
$diferencia_K=$_POST["diferencia_K"];
$diferencia_Ca=$_POST["diferencia_Ca"];
$diferencia_Mg=$_POST["diferencia_Mg"];
$diferencia_S=$_POST["diferencia_S"];
$diferencia_Zn=$_POST["diferencia_Zn"];
$diferencia_B=$_POST["diferencia_B"];
$diferencia_Cu=$_POST["diferencia_Cu"];



echo "<script>

var fertilizante_N='$fertilizante_N';
var fetilizante_P='$fetilizante_P';
var fetilizante_K='$fetilizante_K';
var fetilizante_Ca='$fetilizante_Ca';
var fetilizante_Mg='$fetilizante_Mg';
var fetilizante_S='$fetilizante_S';
var fetilizante_Zn='$fetilizante_Zn';
var fetilizante_B='$fetilizante_B';


var diferencia_N='$diferencia_N';
var diferencia_P='$diferencia_P';
var diferencia_K='$diferencia_K';
var diferencia_Ca='$diferencia_Ca';
var diferencia_Mg='$diferencia_Mg';
var diferencia_S='$diferencia_S';
var diferencia_Zn='$diferencia_Zn';
var diferencia_B='$diferencia_B';
var diferencia_Cu='$diferencia_Cu';


</script>";
?>

<script>
function mostrar_fetilizantes() {
$("#consultar").modal("show");
}




</script>





<div  id="consultar" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         <h1 class="modal-title">FERTILIZANTES </h1>
         
    </div>
    <div class="modal-body">

<div id="caja">


<table class="table  table-hover table-bordered table-responsive">
  <tr class="text-center "><td colspan="13">Kg/Ha</td></tr>
  <tr class="text-center danger"><td colspan="13">Fertilizantes Compuestos</td></tr>
	<tr class="text-center danger">
  <td>#</td>
		<td >Nombre</td>
<td>N</td>
<td>P</td>
<td>K</td>
<td>Ca</td>
<td>Mg</td>
<td>S</td>
<td>Zn</td>
<td>B</td>
<td>Cu</td>
<td>Cantidad Aplicar (Bultos)</td>
<td>Cantidad Aplicar (Kilos)</td>
	</tr>




                              <?php 

                              $local="localhost";
                              $usuario="root";
                              $contra="";
                              $bd="siffa";

                              $conexion=mysqli_connect($local,$usuario,$contra,$bd)or die ("problemas en la conexion");
                                
                              $query="SELECT * FROM fertilizantes WHERE  	Nitrogeno$fertilizante_N 0 AND Fosforo$fetilizante_P 0 AND Potasio$fetilizante_K 0 AND Calcio$fetilizante_Mg 0 AND Magnesio$fetilizante_Mg 0 AND 	Azufre$fetilizante_S 0 AND Zinc$fetilizante_S 0 AND Boro$fetilizante_B 0 ORDER BY NombreFertilizante";

                              $resource=mysqli_query($conexion,$query);
                           
                           $numero=1;
  
                              while ($fila=mysqli_fetch_row($resource)) {
$funcion="funcion";

// AQUI ABAJO ESTOY PASANDO LOS VALORES DE LOS NUTRIENTES DE FERTILIZANTES A VARIABLES PARA HACER QUE MIESTRE LA CANITDAD NECESARIA
echo "<script>


var valor_fertilizante_N=parseFloat($fila[2]);
var valor_fertilizante_P=parseFloat($fila[3]);
var valor_fertilizante_K=parseFloat($fila[4]);
var valor_fertilizante_Ca=parseFloat($fila[5]);
var valor_fertilizante_Mg=parseFloat($fila[6]);
var valor_fertilizante_S=parseFloat($fila[7]);
var valor_fertilizante_Z=parseFloat($fila[8]);
var valor_fertilizante_B=parseFloat($fila[9]);
var valor_fertilizante_Cu=parseFloat($fila[10]);

var porcentaje_fetilizante_total=parseFloat(valor_fertilizante_N+valor_fertilizante_P+valor_fertilizante_K+valor_fertilizante_Ca+valor_fertilizante_Mg+valor_fertilizante_S+valor_fertilizante_Z+valor_fertilizante_B+valor_fertilizante_Cu);


// var kg_N=(1*valor_fertilizante_N)/100;
// var cantidad_aplicar_N=(1*diferencia_N)/kg_N;


</script>";


if ($fila[2]>0) {
$valor_fertilizante_N=$fila[2];
$kg_N=(1*$valor_fertilizante_N)/100;
$cantidad_aplicar_N=(1*$diferencia_N)/$kg_N;


$cantidad_aplicar=(1*$cantidad_aplicar_N)/50;
}else{
$kg_N=0;

};


if ($fila[3]>0) {
  $valor_fertilizante_P=$fila[3];
$kg_P=(1*$valor_fertilizante_P)/100;
$cantidad_aplicar_P=(1*$diferencia_P)/$kg_P;

$cantidad_aplicar=(1*$cantidad_aplicar_P)/50;
}else{

  $kg_P=0;
}


if ($fila[4]>0) {
  $valor_fertilizante_K=$fila[4];
$kg_K=(1*$valor_fertilizante_K)/100;
$cantidad_aplicar_K=(1*$diferencia_K)/$kg_K;

$cantidad_aplicar=(1*$cantidad_aplicar_K)/50;
}else{

  $kg_K=0;
}


if ($fila[5]>0) {
  $valor_fertilizante_Ca=$fila[5];
$kg_Ca=(1*$valor_fertilizante_Ca)/100;
$cantidad_aplicar_Ca=(1*$diferencia_Ca)/$kg_Ca;

$cantidad_aplicar=(1*$cantidad_aplicar_Ca)/50;
}else{

  $kg_Ca=0;
}


if ($fila[6]>0) {
  $valor_fertilizante_Mg=$fila[6];
$kg_Mg=(1*$valor_fertilizante_Mg)/100;
$cantidad_aplicar_Mg=(1*$diferencia_Mg)/$kg_Mg;

$cantidad_aplicar=(1*$cantidad_aplicar_Mg)/50;
}else{
$kg_Mg=0;

}


if ($fila[7]>0) {
  $valor_fertilizante_S=$fila[7];
$kg_S=(1*$valor_fertilizante_S)/100;
$cantidad_aplicar_S=(1*$diferencia_S)/$kg_S;

$cantidad_aplicar=(1*$cantidad_aplicar_S)/50;
}else{
$kg_S=0;

}


if ($fila[8]>0) {
  $valor_fertilizante_Zn=$fila[8];
$kg_Zn=(1*$valor_fertilizante_Zn)/100;
$cantidad_aplicar_Zn=(1*$diferencia_Zn)/$kg_Zn;

$cantidad_aplicar=(1*$cantidad_aplicar_Zn)/50;
}else{
$kg_Zn=0;

}



if ($fila[9]>0) {
  $valor_fertilizante_B=$fila[9];
$kg_B=(1*$valor_fertilizante_B)/100;
$cantidad_aplicar_B=(1*$diferencia_B)/$kg_B;

$cantidad_aplicar=(1*$cantidad_aplicar_B)/50;
}else{

$kg_B=0;

}






                           $funcion=$funcion.$numero;
                           $cantidad_aplicar=round($cantidad_aplicar);

            $cantidad_aplicar_kg=$cantidad_aplicar*50;                 
            $cantidad_aplicar_kg=round($cantidad_aplicar_kg);
                                echo "<tr>
<td><input type='checkbox' name='fertilizante' onchange='$funcion()'   id='$numero' > </td>
<td>$fila[1]</td>
<td>$fila[2]</td>
<td>$fila[3]</td>
<td>$fila[4]</td>
<td>$fila[5]</td>
<td>$fila[6]</td>
<td>$fila[7]</td>
<td>$fila[8]</td>
<td>$fila[9]</td>
<td>$fila[10]</td>
<td>$cantidad_aplicar</td>
<td>$cantidad_aplicar_kg</td>


                                </tr>



";


echo "

<script>

function $funcion()
{

var condicion=1

var Id_fertilizante=document.getElementById('$numero').value='$fila[0]';
var Nombre_Fertilizante='$fila[1]';
var kg_N='$kg_N';
var kg_P='$kg_P';
var kg_K='$kg_K';
var kg_Ca='$kg_Ca';
var kg_Mg='$kg_Mg';
var kg_S='$kg_S';
var kg_Zn='$kg_Zn';
var kg_B='$kg_B';
var cantidad_aplicar=$cantidad_aplicar
fertilizante_caja(Id_fertilizante, Nombre_Fertilizante,kg_N,kg_P,kg_K,kg_Ca,kg_Mg,kg_S,kg_Zn,kg_B,cantidad_aplicar);


}


</script>




                                ";

                                $numero=$numero+1;
                              }
                                  
                              


                               ?>


</table>
                             
                            
    </div>
         <div class="modal-footer">

        <a href="#" data-dismiss='modal'  class="btn btn-danger">Cerrar</a>

         </div>
 </div>
</div>


</div>
<script>  
function fertilizante_caja(Id_fertilizante, Nombre_Fertilizante,kg_N,kg_P,kg_K,kg_Ca,kg_Mg,kg_S,kg_Zn,kg_B,cantidad_aplicar) {

var kg_N=kg_N;
var kg_P=kg_P;
var kg_K=kg_K;
var kg_Ca=kg_Ca;
var kg_Mg=kg_Mg;
var kg_S=kg_S;
var kg_Zn=kg_Zn;
var kg_B=kg_B;
var Id_fertilizante=Id_fertilizante;
var cantidad_aplicar=cantidad_aplicar


    var table = document.getElementById('tabla_fertiizante');
  {
  var row = table.insertRow(1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  cell1.innerHTML =Nombre_Fertilizante;
  cell2.innerHTML = "<input type='text' name='' class='form-control fertilizantes_caja' id='id_caja'  >";
  cell3.innerHTML =cantidad_aplicar;
  cell4.innerHTML ="<h3 class='icon icon-bin' title='Retirar Fertilizante' onclick='eliminar_fertilizante()'></h3>";

  var id_caja=document.getElementById('id_caja').id=Id_fertilizante;



  }

  var fertilizantes_caja=document.querySelectorAll(".fertilizantes_caja");
  for (var i = 0; i < fertilizantes_caja.length; i++) {
    fertilizantes_caja[i].addEventListener("keyup",barrasmoviles,false);

  }

inicio();

barrasmoviles()
}




function barrasmoviles(e) {


var Id_fertilizante=e.target.id;
var fertilizante_compuesto=document.getElementById(Id_fertilizante).value;
  var cultivo_select=document.getElementById('cultivo').value;
$("#analisis").load("barras_movibles.php",{cultivo_select:cultivo_select,fertilizante_compuesto:fertilizante_compuesto,Id_fertilizante:Id_fertilizante});
}





function eliminar_fertilizante() {



  document.getElementById("tabla_fertiizante").deleteRow(1);

}
</script>

<style>


#caja{

position: relative;
display: block;
/*border:solid 1px black;*/
overflow: auto;
width: 840px;

}

</style>