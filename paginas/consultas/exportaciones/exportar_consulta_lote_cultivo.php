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
$Nombre_Cultivo=$_POST["Nombre_Cultivo"];


	
// CONTENIDO DE HTML
	


// AQUI ABAJO LE ESTOY ANEXANDO UN foreach ES UN CICLO EN POCAS PALABRAS WHILE PERO EN PHP ES foreach PARA PONER NUMERO DE LOTES QUE HAY EN LA BASE D EDATOS ES DECIR QUE SEHA DINAMICO SI SE ACTUALIZA ME GENERA MAS
$mysqli=new mysqli("localhost", "root", "", "siffa");

$sql="SELECT NumeroLote,extension,NombreCultivo,latitud,longitud, Ha,Nombre,NombreVereda,Nombre_Municipio, NombreDepartamento,Tamano FROM `lote` INNER JOIN lotecultivo ON lote.Idlote=lotecultivo.Idlote INNER JOIN cultivo ON lotecultivo.idcultivo=cultivo.idcultivo INNER JOIN Hacienda ON lote.IdHacienda=hacienda.Idhacienda INNER JOIN vereda ON hacienda.Idvereda=vereda.Idvereda INNER JOIN municipio ON vereda.Idmunicipio=municipio.Idmunicipio INNER JOIN departamento ON municipio.Iddepartamento=departamento.Iddepartamento WHERE NombreCultivo LIKE '%$Nombre_Cultivo%' AND Nombre LIKE '%$Nombre_Finca%' ORDER BY Nombre,NumeroLote";
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
				<td><b>NUMERO LOTE</b></td>
				<td><b>CULTIVO</b></td>
				<td><b>TAMAÑO CULTIVO (Ha)</b></td>
				<td><b>LATITUD</b></td>
				<td><b>LONGITUD</b></td>
				<td><b>TAMAÑO LOTE(Ha)</b></td>
				<td><b>FINCA</b></td>
				<td><b>TAMAÑO FINCA</b></td>
				<td><b>VEREDA</b></td>
				<td><b>MUNICPIO</b></td>
				<td><b>DEPARTAMENTO</b></td>


			</tr>
			</table>';
$item=0;
foreach ($lotes as $row) {
	

    $numero_lote=$row["NumeroLote"];
    $extension=$row["extension"];
    $cultivo=$row["NombreCultivo"];
    $latitud=$row["latitud"];
	$longitud=$row["longitud"];
    $Tamano=$row["Ha"];
	$NombreVereda=$row["NombreVereda"];
	$NOMBRE=$row["Nombre"];
	$NOMBRE1=$row["Tamano"];
	$Nombre_Municipio=$row["Nombre_Municipio"];
	$NombreDepartamento=$row["NombreDepartamento"];





	$html .='
<style>
	table,td{

	border:0px solid black;
	border-collapse:collapse;
}



</style>

<table>

<tr>
<td>'.$numero_lote.'</td>
<td>'.$cultivo.'</td>
<td>'.$extension.'</td>
<td>'.$latitud.'</td>
<td>'.$longitud.'</td>
<td>'.$Tamano.'</td>
<td>'.$NOMBRE.'</td>
<td>'.$NOMBRE1.'</td>
<td>'.$NombreVereda.'</td>
<td>'.$Nombre_Municipio.'</td>
<td>'.$NombreDepartamento.'</td>



				</tr>

			
			</table>	

	';


	
}


$pdf->writeHTML($html, true, 0,true,0);

$pdf->lastPage();

// ---------------------------------------------------------

// NOMBRE DEL ARCHIVO
$pdf->Output('Consulta_Lote_Cultivo.pdf', 'I');


// AQUI EN I ( I ES PARA VISUALIZACION EN LINEA PARA QUE SE ABRA EL PDF EN EL NACEGADOR Y "D" DESCARGA AUTOMATICA ) 




 ?>