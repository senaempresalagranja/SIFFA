<?php 

require_once('../../../exportar/tcpdf.php');


// P ORIENTACION VERTICA
// L ORIENTACION HORIZONTAL

$pdf = new TCPDF("L", PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('SIFFA');
$pdf->SetTitle('SIFFA');
$pdf->SetSubject('JERR');
$pdf->SetKeywords('EXPORTAR FINCAS');

// $pdf->SetPrintHeader(false); AQUI ES PARA QUE NO IMPRIMAR CABECERA
// $pdf->SetPrintFooter(false); AQUI ES PARA QUE NO SE IMPRIMA EL PIE DE PAGINA OSEA EL NUMERO DE LA PAGINA


// AQUI ES PARA LAS MARGENES EN LA HOJA PONGO 20 PORQUE SON MILIMETROS LO QUE PUSIMOS ARRIBA mm LAS MEDIDAS QUE VASMOS A UTILIZAR 
$pdf->SetMargins(20,20,20, false); 


// ------IMPORTANTE AQUI ABAJO NO TOCAR: AQUI ABAJO ES SI EN ALGUN CASO LLEGO A ESCRIBIR MUCHO CODIGO HTML Y SOBRE PASA LA HOJA SIMPLEMENTE ME PONGA OTRA HOJA COMO EN WORD VOY ESCRIBIENDO Y ME SACA OTRA HOJA SI AQUI ABAJO PONGO false NO ME VA SA LIR OTRA HOJA SI NO QUE EL CONTENIDO DE QUE SOBREPASE LA HOJA SE VA A PERDER
$pdf->SetAutoPageBreak(true, 20);

// NO TOCA AQUI ARRIBA ^^^^^^


// HEADER LOGO ES PARA PONER EL LOGO PARA CAMBIARLO TOCA A IR A AUTO CONFIGURADO Y CAMBIAR ESO POR DEFECTO CAMBIAR LA CARPTEA Y CAMBIAR LA IMAGEN
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'SIFFA V2', '');


$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);


$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);


$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}


$pdf->SetFont('helvetica', '', 9);

// PONEMOS UNA PAGINA SI PONGO OTRO AddPage PONGO OTRA PAGINA ES DECIR SON PAGINAS
$pdf->AddPage();

$Nombre_Finca=$_POST["Nombre_Finca"];
$lote=$_POST["lote"];
$cultivo=$_POST["cultivo"];



	
// CONTENIDO DE HTML
	


// AQUI ABAJO LE ESTOY ANEXANDO UN foreach ES UN CICLO EN POCAS PALABRAS WHILE PERO EN PHP ES foreach PARA PONER NUMERO DE LOTES QUE HAY EN LA BASE D EDATOS ES DECIR QUE SEHA DINAMICO SI SE ACTUALIZA ME GENERA MAS
$mysqli=new mysqli("localhost", "root", "", "siffa");

$sql="SELECT  COUNT(Idanalisis) AS Numeros_Analisis, NumeroLote, Ha, NombreCultivo ,  Extension  , Nombre, Tamano FROM `analisis` INNER JOIN lotecultivo ON analisis.Idlotecultivo=lotecultivo.Idlotecultivo INNER JOIN lote ON lotecultivo.Idlote=lote.Idlote INNER JOIN hacienda ON lote.IdHacienda=hacienda.Idhacienda INNER JOIN cultivo ON lotecultivo.idcultivo=cultivo.idcultivo
WHERE Nombre LIKE '%$Nombre_Finca%' AND NumeroLote LIKE '%$lote%' AND  NombreCultivo LIKE '%$cultivo%'  GROUP BY analisis.Idlotecultivo ORDER BY Nombre,Numero_Muestreo, NumeroLote";
$lotes= $mysqli->query($sql);
$html='
<style>
	h1{

	position: relative;
display: block; 
	color: red;
		font-family: arial;
		font-size: 20pt;
text-align: center;
	}
</style>
<p></p>
<h1>LOTES BASE DE DATOS SIFFA</h1>
<table >
			<tr>
				<td><b>ANALISIS REALIZADOS</b></td>
				<td><b># LOTE</b></td>
				<td><b>LOTE (Ha)</b></td>
				<td><b>CULTIVO</b></td>
				<td><b>CULTIVO (Ha)</b></td>
				<td><b>FINCA</b></td>
				<td><b>FINCA (Ha)</b></td>



			</tr>
			</table>';
$item=0;
foreach ($lotes as $row) {
	

    $analisis_realizados=$row["Numeros_Analisis"];
    $NumeroLote=$row["NumeroLote"];
    $Tamaño_lote=$row["Ha"];
    $Cultivo=$row["NombreCultivo"];
	$Tamaño_cultivo=$row["Extension"];
    $Finca=$row["Nombre"];
	$Finca_tamaño=$row["Tamano"];






	$html .='
<style>
	table,td{

	border:0px solid black;
	border-collapse:collapse;
}



</style>

<table>

<tr>
<td>'.$analisis_realizados.'</td>
<td>'.$NumeroLote.'</td>
<td>'.$Tamaño_lote.'</td>
<td>'.$Cultivo.'</td>
<td>'.$Tamaño_cultivo.'</td>
<td>'.$Finca.'</td>
<td>'.$Finca_tamaño.'</td>




				</tr>

			
			</table>	

	';


	
}


$pdf->writeHTML($html, true, 0,true,0);

$pdf->lastPage();

// ---------------------------------------------------------

// NOMBRE DEL ARCHIVO
$pdf->Output('Consulta_Analisis.pdf', 'I');


// AQUI EN I ( I ES PARA VISUALIZACION EN LINEA PARA QUE SE ABRA EL PDF EN EL NACEGADOR Y "D" DESCARGA AUTOMATICA ) 




 ?>