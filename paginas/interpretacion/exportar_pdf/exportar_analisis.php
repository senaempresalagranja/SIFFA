<?php 


$laboratorio=$_POST["laboratorio"];
$cultivo=$_POST["cultivo"];



$conexion=mysqli_connect("localhost", "root", "", "siffa");
$query="SELECT  Nombre_Laboratorio,Nombre, NumeroLote, NombreCultivo, Extension  FROM `analisis` INNER JOIN laboratorio ON analisis.Idlaboratorio=laboratorio.Idlaboratorio INNER JOIN lotecultivo ON analisis.Idlotecultivo=lotecultivo.Idlotecultivo INNER JOIN lote ON lotecultivo.Idlote=lote.Idlote INNER JOIN hacienda ON lote.IdHacienda=hacienda.Idhacienda INNER JOIN cultivo ON lotecultivo.idcultivo=cultivo.idcultivo WHERE analisis.Idlaboratorio='$laboratorio' AND cultivo.idcultivo='$cultivo'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);


echo '<script>


var Nombre_Laboratorio="'.$fila[0].'";
var finca="'.$fila[1].'";
var lote="'.$fila[2].'";
var nombre_cultivo="'.$fila[3].'";
var profundidad=parseFloat(document.getElementById("profundidad").value);
var clima=document.getElementById("clima").value;
var densidad_aparente=parseFloat(document.getElementById("densidad_aparente").value);




</script>';




 ?>

 <script>
var tabla=document.getElementById('tabla').style.display="block";
  
     var doc = new jsPDF('P' , 'pt')
     

 
   


                  // addImage(imagedata, type, x, y, width, height)
                 
                

// doc.addImage(logo, 'JPEG', 10, 10, 50, 70);
// AQUI ABAJO ES EL ANCHO DE LAS FORMS ESTABA EN 80
            var chartHeight = 190;




            // var imgData = 'data: img/logo.png';



// doc.setTextColor(165,223,0);
            // doc.SetFont('Arial','B',9);
            doc.setFontSize(15);
            doc.setTextColor(3,3,3);
            doc.text(110, 25, "INTERPRETACION DE ANALISIS DE SUELO CULTIVO " + cultivo );
            // doc.addImage(imgData, 'JPEG', 15, 40, 180, 160);
            // doc.Line(10,10,206,10);
            // doc.Line(10,35.5,206,35.5);


doc.setFontSize(10);



            doc.text(65,65,"Laboratorio: " );
            doc.setFontSize(10);
            doc.setTextColor(0,0,0);
            doc.text(150,65, Nombre_Laboratorio );




            doc.setTextColor(3,3,3);
            doc.text(320,65,"Nombre Finca: " );
            doc.setFontSize(10);
            doc.setTextColor(0,0,0);
            doc.text(380,65, finca );



            doc.setTextColor(3,3,3);
            doc.text(65,85,"# Lote: " );
            doc.setFontSize(10);
            doc.setTextColor(0,0,0);
            doc.text(95,85, lote );



            doc.setTextColor(3,3,3);
            doc.text(140,85,"Nombre Cultivo: " );
            doc.setFontSize(10);
            doc.setTextColor(0,0,0);
            doc.text(200,85, nombre_cultivo );


            doc.setTextColor(3,3,3);
            doc.text(320,85, "Tamaño Cultivo: " );
            doc.setFontSize(10);
            doc.setTextColor(0,0,0);
            doc.text(400,85, hectarea + " Ha" );

            doc.setTextColor(3,3,3);
            doc.text(65,105, "Clima:" );
            doc.setFontSize(10);
            doc.setTextColor(0,0,0);
            doc.text(95,105, clima );


            doc.setTextColor(3,3,3);
            doc.text(140,105, "Densidad Aparente: " );
            doc.setFontSize(10);
            doc.setTextColor(0,0,0);
            doc.text(230,105, " " + densidad_aparente + " (g/cc)"  );

            doc.setTextColor(3,3,3);
            doc.text(320,105, "Profundidad Muestra: " );
            doc.setFontSize(10);
            doc.setTextColor(0,0,0);
            doc.text(420,105, profundidad + " m" );


// EL X y Y ES DESPUES DEL 0 DE GET
doc.fromHTML($("#tabla").get(0),65,125,{

    "height":100
})



            $('.exportar').each(function(index) {
                var imageData = $(this).highcharts().createCanvas();


                  // addImage(imagedata, type, x, y, width, height)
                 
                doc.addImage(imageData, 'JPEG', 15, (index * chartHeight) + 600, 250, chartHeight);
            });

                        $('.exportar2').each(function(index) {
                var imageData = $(this).highcharts().createCanvas();


                  // addImage(imagedata, type, x, y, width, height)
                 
                doc.addImage(imageData, 'JPEG', 250, (index * chartHeight) + 600, 330, chartHeight);
            });
doc.addPage()

    $('.exportar1').each(function(index) {
                var imageData = $(this).highcharts().createCanvas();


                /**
                 * addImage(imagedata, type, x, y, width, height)
                 */
                 ancho=360;
                doc.addImage(imageData, 'JPEG', 100, (index * ancho) + 15, 360, ancho);
            });

            //save with name
            doc.save('INTERPRETACION_ANALISIS.pdf');


var tabla=document.getElementById('tabla').style.display="none";
 </script>
