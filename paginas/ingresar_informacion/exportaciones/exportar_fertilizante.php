<?php 

require_once('../../../exportar/tcpdf.php');


// P ORIENTACION VERTICA
// L ORIENTACION HORIZONTAL
$pdf = new TCPDF("P", PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('SIFFA');
$pdf->SetTitle('SIFFA');
$pdf->SetSubject('JERR');
$pdf->SetKeywords('EXPORTAR CULTIVO');

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


$nombre_fetilizante=$_POST["nombre_fetilizante"];
$nutriente_N=$_POST["nutriente_N"];
$nutriente_P=$_POST["nutriente_P"];
$nutriente_K=$_POST["nutriente_K"];
$nutriente_Ca=$_POST["nutriente_Ca"];
$nutriente_Mg=$_POST["nutriente_Mg"];
$nutriente_S=$_POST["nutriente_S"];
$nutriente_Zn=$_POST["nutriente_Zn"];
$nutriente_B=$_POST["nutriente_B"];
$nutriente_Cu=$_POST["nutriente_Cu"];



// CONTENIDO DE HTML

// TERMINANDO EL HPT DOCUMENTO ME DI CUENTA QUE SE PUEDE HACER ESPACIADOS EN PDF NO SE PUEDEN HACER ESPACIADOS O CON CSS LEFT O RIGTH O MOVER ETC.. POR ESTA RAZON LO ESTABA HACIENDO HACIA ABAJO PERO ME PUSE HA ANALIZAR EL EJEMPLO 21 QUE HABIAN ESPACIADOS Y MIRE COMO SE HACIAS Y LO HICE Y NO ME FUNCIONO PORQUE LO HACIA CON <P> Y ESTA ETIQUETA HTML DA UN SALTO DE LINEA AUTOMATICO EL CODIGO PARA EL ESPACIADO ES ESTE PONERLO PARA REALIZAR DOS TABULADORES "&nbsp;  &nbsp;&nbsp;" CREO QUE TRES PERO MENOS MAL ME DI CUENTA XD JERR
					
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
		font-size: 20pt;
text-align: center;


}
table,tr,td{

	border:1px solid black;
	border-collapse:collapse;
}
.titulo_tabla{

	position: relative;
	display: block;
	text-align: center;
}

	</style>

<br>
<h1>FERTILIZANTE</h1>

<b>NOMBRE:</b>$nombre_fetilizante
<p></p>
<table class="table table-bordered">
			<tr>
				<td colspan="9" class="titulo_tabla"><b>NUTRIENTES PROPORCIONADOS Kg(Ha)</b></td>
			</tr>
				<tr>

					<td><b>Nitrogeno</b></td>
					<td><b>Fosforo</b></td>
					<td><b>Potasio</b></td>
					<td><b>Calcio</b></td>
					<td><b>Magnesio</b></td>
					<td><b>Azufre</b></td>
					<td><b>Zinc</b></td>
					<td><b>Boro</b></td>
					<td><b>Cobre</b></td>
				</tr>
				<tr>
					<td>$nutriente_N</td>
					<td>$nutriente_P</td>
					<td>$nutriente_K</td>
					<td>$nutriente_Ca</td>
					<td>$nutriente_Mg</td>
					<td>$nutriente_S</td>
					<td>$nutriente_Zn</td>
					<td>$nutriente_B</td>
					<td>$nutriente_Cu</td>
				</tr>
			
			</table>			
		








EOD;


// ESCRIBO EL CONTENIDP AL LA PAGINA
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);


$pdf->lastPage();

// ---------------------------------------------------------

// NOMBRE DEL ARCHIVO
$pdf->Output('Formulario_Fertilizante.pdf', 'I');


// AQUI EN I ( I ES PARA VISUALIZACION EN LINEA PARA QUE SE ABRA EL PDF EN EL NACEGADOR Y "D" DESCARGA AUTOMATICA ) 




 ?>