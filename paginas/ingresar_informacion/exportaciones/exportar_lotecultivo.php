<?php 

require_once('../../../exportar/tcpdf.php');


// P ORIENTACION VERTICA
// L ORIENTACION HORIZONTAL

$pdf = new TCPDF("P", PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('SIFFA');
$pdf->SetTitle('SIFFA');
$pdf->SetSubject('JERR');
$pdf->SetKeywords('EXPORTAR FINCA');

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

$finca=$_POST["finca"];
$lote=$_POST["lote"];
$cultivo=$_POST["cultivo"];

$connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT NumeroLote,NombreVereda,Nombre_Municipio,latitud,longitud ,Nombre,Tamano,NombreDepartamento, Ha, NombreCultivo FROM `lotecultivo` INNER JOIN lote ON lotecultivo.Idlote=lote.Idlote INNER JOIN cultivo ON lotecultivo.idcultivo=cultivo.idcultivo INNER JOIN hacienda ON lote.IdHacienda=hacienda.Idhacienda INNER JOIN vereda ON hacienda.Idvereda=vereda.Idvereda INNER JOIN municipio ON vereda.Idmunicipio=municipio.Idmunicipio INNER JOIN departamento ON municipio.Iddepartamento=departamento.Iddepartamento WHERE lotecultivo.Idlote='$lote' AND lotecultivo.idcultivo='$cultivo'";
							$resource=mysqli_query($connection,$query);
							$fila=mysqli_fetch_row($resource);



	
// CONTENIDO DE HTML
				
$html = <<<EOD

	<style>   

	*{
				font-family: arial;
	}
h1{
position: relative;
display: block; 
	color: red;
		font-family: arial;
		font-size: 17pt;
text-align: center;


}
table,tr,td{

	border:1px solid black;
	border-collapse:collapse;
}


	</style>

<br>
<h1>LOTE</h1>

<b>NUMERO LOTE: </b>$fila[0] &nbsp;&nbsp;  &nbsp;&nbsp; <b>FINCA: </b>$fila[5]  &nbsp;&nbsp;  &nbsp;&nbsp;  <b>VEREDA </b>$fila[1] &nbsp;&nbsp;  &nbsp;&nbsp; <b>Tamaño Finca (Ha) </b>$fila[6] <p></p>    <b>MUNICIPIO: </b>$fila[2] &nbsp;&nbsp;  &nbsp;&nbsp;

 <b>DEPARTAMENTO: </b>$fila[7] &nbsp;&nbsp;  &nbsp;&nbsp; <b>LATITUD: </b>$fila[3]  &nbsp;&nbsp;  &nbsp;&nbsp;  <b>LONGITUD: </b>$fila[4] &nbsp;&nbsp;  &nbsp;&nbsp;<p></p>  <b>TAMAÑO LOTE (Ha): </b>$fila[8] &nbsp;&nbsp;  &nbsp;&nbsp;  <b>CULTIVO : </b>$fila[9]  
	

EOD;


// ESCRIBO EL CONTENIDP AL LA PAGINA
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);



$pdf->lastPage();

// ---------------------------------------------------------

// NOMBRE DEL ARCHIVO
$pdf->Output('Formulario_LoteCultivo.pdf', 'I');


// AQUI EN I ( I ES PARA VISUALIZACION EN LINEA PARA QUE SE ABRA EL PDF EN EL NACEGADOR Y "D" DESCARGA AUTOMATICA ) 




 ?>