<?php
/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2015 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */


date_default_timezone_set('Europe/London');


// 1) Incluir las librerías e inicializar la Clase.

// Para este ejemplo básico necesitaremos incluir la librería PHPExcel.php, luego pasamos a inicializar la clase
require_once '../../../exportar_excel/Classes/PHPExcel.php';

$objPHPExcel = new PHPExcel();





// 2) Propiedades del documento Excel

// Cuando exportemos un archivo Excel podemos definir quién fue el creador, el título del documento, la descripción, algunos keywords y su categoría

$objPHPExcel->
    getProperties()
        ->setCreator("Joaquin Reyes Roa")
        ->setLastModifiedBy("SIFFA")
        ->setTitle("Exportaciones")
        ->setSubject("SIFFA")
        ->setDescription("SIFFA")
        ->setKeywords("SIFFA")
        ->setCategory("Exportacion");




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







$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('SIFFA');
$objDrawing->setDescription('SIFFA');
$objDrawing->setPath('../../../img/logo.png');     
$objDrawing->setHeight(100);             
$objDrawing->setCoordinates('A1');   
$objDrawing->setOffsetX(100);                
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());



// 3) Escribiendo data

// Con el siguiente bloque de código podemos escribir en la casilla que deseamos, es muy sencillo el manejo tanto para hacerlo manualmente como dinámicamente.


        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A7', 'Nombre Finca')
            ->setCellValue('B1','SIFFA V.2')
            ->setCellValue('B7', 'Fax')
            ->setCellValue('C7', 'Telefono')
            ->setCellValue('D7', 'Departamento')
            ->setCellValue('E7', 'Municipio')
            ->setCellValue('F7', 'Vereda')
            ->setCellValue('G7', 'Tamaño (Ha)')
            ->setCellValue('H7', 'Numero Lotes')
            ->setCellValue('A11', 'Numero Lote')
            ->setCellValue('B11', 'Tamaño (Ha)')
            ->setCellValue('C11', 'Cultivo')




            ->setCellValue('A8', $nombre)
            ->setCellValue('B8', $fax)
            ->setCellValue('C8', $telefono)
            ->setCellValue('D8', $fila[7])
            ->setCellValue('E8', $fila[4])
            ->setCellValue('F8', $fila[1])
            ->setCellValue('G8', $tamaño)
            ->setCellValue('H8', $fila1[1]);




// AQUI ESTOY DICIENDO LA FUENTE Y SU TAMAÑO
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
$objPHPExcel->getDefaultStyle()->getFont()->setSize(14);



$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(15);






// ESTILOS DE LAS COLUMNAS Y FILAS
$objPHPExcel->getActiveSheet()
			->getStyle('A7:H7')
			->getFill()
			->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
			->getStartColor()->setARGB('#A5DF00');


// BORDES
$border= array(
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN,
                'color' => array('rgb' => '#00000')
            )
        )
    );




$objPHPExcel->getActiveSheet()
            ->getStyle('A7:H8')
            ->applyFromArray($border);



// 4) Propiedades de la hoja

            $connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT NumeroLote,Ha,NombreCultivo FROM hacienda INNER JOIN lote ON hacienda.Idhacienda=lote.IdHacienda INNER JOIN lotecultivo ON lote.Idlote=lotecultivo.Idlote INNER JOIN cultivo ON lotecultivo.idcultivo=cultivo.idcultivo  WHERE  hacienda.Nombre='$fila1[2]' ORDER BY NumeroLote";


$resource=mysqli_query($connection,$query);
$y=11;

// ESTILOS DE LAS COLUMNAS Y FILAS
$objPHPExcel->getActiveSheet()
            ->getStyle('A11:C11')
            ->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
            ->getStartColor()->setARGB('#A5DF00');


// BORDES
$border= array(
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN,
                'color' => array('rgb' => '#00000')
            )
        )
    );

   $objPHPExcel->setActiveSheetIndex(0)
                ->getStyle("A11:C11")
                ->applyFromArray($border);


while ($fila=mysqli_fetch_row($resource)) {
    $y++;


    $objPHPExcel->setActiveSheetIndex(0)
                ->getStyle("A".$y.":C".$y)
                ->applyFromArray($border);





     $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$y, $fila[0])
            ->setCellValue('B'.$y, $fila[1])
            ->setCellValue('C'.$y, $fila[2]);




};

// Luego de escribir en la hoja de cálculo pasamos a darle un nombre y definir con que hoja abrirá el documento, en este caso como tenemos solo uno, el valor será “0”.



            $objPHPExcel->getActiveSheet()->setTitle('Formulario_Finca');
$objPHPExcel->setActiveSheetIndex(0);



// 5) Descargar el archivo

// El paso final será descargar el archivo, aquí definiremos el nombre que tendrá al ser descargado y el tipo de Excel que será.

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Formulario_Finca.xls"');
header('Cache-Control: max-age=0');
 
$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
$objWriter->save('php://output');
exit;