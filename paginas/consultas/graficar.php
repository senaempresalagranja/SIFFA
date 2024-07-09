<?php

$cultivo=$_POST["cultivo"];


$connection=mysqli_connect("localhost","root","","siffa");
$sql = "SELECT * FROM `cultivo` INNER JOIN requerimiento ON cultivo.idrequerimiento=requerimiento.idrequerimiento WHERE idcultivo='$cultivo'";
$result = mysqli_query($connection,$sql);
$fila=mysqli_fetch_row($result);

echo "<script>

var nombre_cultivo='$fila[1]';

var nutriente_N='$fila[5]';
var nutriente_P='$fila[6]';
var nutriente_K='$fila[7]';
var nutriente_Ca='$fila[8]';
var nutriente_Mg='$fila[9]';
var nutriente_S='$fila[10]';
var nutriente_Zn='$fila[11]';
var nutriente_B='$fila[12]';
var nutriente_Cu='$fila[13]';


</script>";


?>
<script>




$(function () {


  $('#container').highcharts({
    chart: {
      type: 'column',
      options3d: {
        enabled: true,
        alpha: 2,
        beta: 0
      },
    },
    title: {
      text: 'Requerimientos Nutricionales Cultivo ' + nombre_cultivo
    },
    subtitle: {
      text: 'SIFFA'
    },
    xAxis: {
      categories: [ '<?php echo "Nitrogeno" ?>',
      '<?php echo "Fosforo" ?>',
      '<?php echo "Potasio" ?>',
      '<?php echo "Calcio" ?>',
      '<?php echo "Magnesio" ?>',
      '<?php echo "Azufre" ?>',
      '<?php echo "Zinc" ?>',
      '<?php echo "Boro" ?>',
      '<?php echo "Cobre" ?>',],
      crosshair: true
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Cantidad (Kg)'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y:.1f} Kg</b></td></tr>',
          footerFormat: '</table>',
          shared: true,
          useHTML: true
        },
        plotOptions: {
          column: {
            pointPadding: 0.2,
            borderWidth: 0,
            colorByPoint: true// AQUI ES PARA ACTIVAR QUE SE PUEDA CAMBIAR EL COLOR DE CADA COLUMNA DE LA GRAFICA
          }
        },
        series: [{
          name: 'Nutrientes',
          data: [      <?php

          $connection=mysqli_connect("localhost","root","","siffa");
          $sql = "SELECT * FROM `cultivo` INNER JOIN requerimiento ON cultivo.idrequerimiento=requerimiento.idrequerimiento
          WHERE idcultivo=$cultivo";
          $result = mysqli_query($connection,$sql);
          while ($registros4=mysqli_fetch_array($result))
          { ?>


            <?php echo $registros4[5] ?>,
            <?php echo $registros4[6] ?>,
            <?php echo $registros4[7] ?>,
            <?php echo $registros4[8] ?>,
            <?php echo $registros4[9] ?>,
            <?php echo $registros4[10] ?>,
            <?php echo $registros4[11] ?>,
            <?php echo $registros4[12] ?>,
            <?php echo $registros4[13] ?>,
            <?php
          }
          mysqli_close($connection);

          ?> ],
          colors: [//AQUI ES PONIENDO COLORES A CADA COLUMNA Y SI HAY MUCHAS COLUMNAS LOS COLORES SE REPITEN ADEMAS SON VARIABLES Y LOS COLORES PUEDEN CAMBIAR
          Highcharts.getOptions().colors[0],
          Highcharts.getOptions().colors[1],
          Highcharts.getOptions().colors[2],
          Highcharts.getOptions().colors[3],
          Highcharts.getOptions().colors[4],
          Highcharts.getOptions().colors[5],
          Highcharts.getOptions().colors[6],
          Highcharts.getOptions().colors[7],
          Highcharts.getOptions().colors[8],
          Highcharts.getOptions().colors[9]


          ],

        }]
      });
    });

    var nutriente_N1=document.getElementById('nutriente_N').value=nutriente_N;
    var nutriente_P1=document.getElementById('nutriente_P').value=nutriente_P;
    var nutriente_K1=document.getElementById('nutriente_K').value=nutriente_K;
    var nutriente_Ca1=document.getElementById('nutriente_Ca').value=nutriente_Ca;
    var nutriente_Mg1=document.getElementById('nutriente_Mg').value=nutriente_Mg;
    var nutriente_S1=document.getElementById('nutriente_S').value=nutriente_S;
    var nutriente_Zn1=document.getElementById('nutriente_Zn').value=nutriente_Zn;
    var nutriente_B1=document.getElementById('nutriente_B').value=nutriente_B;
    var nutriente_Cu1=document.getElementById('nutriente_Cu').value=nutriente_Cu;

  </script>
