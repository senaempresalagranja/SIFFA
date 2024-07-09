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

$tamaño=$_POST["tamaño"];
$nombre=$_POST["nombre"];
$fax=$_POST["fax"];
$telefono=$_POST["telefono"];
$departamento=$_POST["departamento"];
$municipio=$_POST["municipio"];
$vereda=$_POST["vereda"];


$connection=mysqli_connect("localhost","root","","siffa");
							$query="SELECT * FROM `vereda` INNER JOIN municipio ON vereda.Idmunicipio=municipio.Idmunicipio INNER JOIN departamento ON municipio.Iddepartamento=departamento.Iddepartamento WHERE Idvereda='$vereda'";
							$resource=mysqli_query($connection,$query);
							$fila=mysqli_fetch_row($resource);

							$query1="SELECT Nombre, COUNT(Idlote),Nombre FROM hacienda INNER JOIN lote ON hacienda.Idhacienda=lote.IdHacienda WHERE hacienda.Nombre='$nombre' AND hacienda.Idvereda='$vereda'";
							$resource1=mysqli_query($connection,$query1);
							$fila1=mysqli_fetch_row($resource1);




	
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
<h1>FINCA</h1>

<b>NOMBRE FINCA: </b>$nombre &nbsp;&nbsp;  &nbsp;&nbsp; <b>FAX: </b>$fax &nbsp;&nbsp;  &nbsp;&nbsp; <b>TELEFONO: </b>$telefono &nbsp;&nbsp;  &nbsp;&nbsp; <b>DEPARTAMENTO: </b>$fila[7]
<p></p>
<b>MUNICIPIO: </b>$fila[4] &nbsp;&nbsp;  &nbsp;&nbsp; <b>VEREDA: </b>$fila[1]  &nbsp;&nbsp;  &nbsp;&nbsp;  <b>TAMAÑO (Ha): </b>$tamaño &nbsp;&nbsp;  &nbsp;&nbsp;  <b>NUMERO DE LOTES: </b>$fila1[1]
<p></p>
	

EOD;


// ESCRIBO EL CONTENIDP AL LA PAGINA
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);



// AQUI ABAJO LE ESTOY ANEXANDO UN foreach ES UN CICLO EN POCAS PALABRAS WHILE PERO EN PHP ES foreach PARA PONER NUMERO DE LOTES QUE HAY EN LA BASE D EDATOS ES DECIR QUE SEHA DINAMICO SI SE ACTUALIZA ME GENERA MAS
$mysqli=new mysqli("localhost", "root", "", "siffa");

$sql="SELECT NumeroLote,Ha,NombreCultivo FROM hacienda INNER JOIN lote ON hacienda.Idhacienda=lote.IdHacienda INNER JOIN lotecultivo ON lote.Idlote=lotecultivo.Idlote INNER JOIN cultivo ON lotecultivo.idcultivo=cultivo.idcultivo  WHERE  hacienda.Nombre='$fila1[2]' ORDER BY  NumeroLote";
$lotes= $mysqli->query($sql);
$html='<table >
			<tr>
				<td>Numero Lote</td>
				<td>Tamaño (Ha)</td>
				<td>Cultivo</td>
			</tr>
			</table>';
$item=1;
foreach ($lotes as $row) {
	$numero_lote=$row["NumeroLote"];
	$tamaño=$row["Ha"];
	$cultivo=$row["NombreCultivo"];


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
					<td>'.$tamaño.'</td>
					<td>'.$cultivo.'</td>

				</tr>

			
			</table>	

	';


	$item=$item+1;
}


$pdf->writeHTML($html, true, 0,true,0);
$pdf->lastPage();

// ---------------------------------------------------------

// NOMBRE DEL ARCHIVO
$pdf->Output('Formulario_Finca.pdf', 'I');


// AQUI EN I ( I ES PARA VISUALIZACION EN LINEA PARA QUE SE ABRA EL PDF EN EL NACEGADOR Y "D" DESCARGA AUTOMATICA ) 




 ?>