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
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
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








// 3) Escribiendo data
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('SIFFA');
$objDrawing->setDescription('SIFFA');
$objDrawing->setPath('../../../img/logo.png');     
$objDrawing->setHeight(100);             
$objDrawing->setCoordinates('A1');   
$objDrawing->setOffsetX(100);                
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
// Con el siguiente bloque de código podemos escribir en la casilla que deseamos, es muy sencillo el manejo tanto para hacerlo manualmente como dinámicamente.


  $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A7', 'Nombre Finca')
            ->setCellValue('B1','SIFFA V.2')
            ->setCellValue('B7', 'Fax')
            ->setCellValue('C7', 'Telefono')
            ->setCellValue('D7', 'Tamaño')
            ->setCellValue('E7', 'Vereda')
            ->setCellValue('F7', 'Municipio')
            ->setCellValue('G7', 'Departamento')
            ->setCellValue('H7', 'lotes');







// AQUI ESTOY DICIENDO LA FUENTE Y SU TAMAÑO
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
$objPHPExcel->getDefaultStyle()->getFont()->setSize(14);



$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(18);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(24);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(24);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(24);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(10);






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

// Luego de escribir en la hoja de cálculo pasamos a darle un nombre y definir con que hoja abrirá el documento, en este caso como tenemos solo uno, el valor será “0”.
$Nombre_Finca=$_POST["Nombre_Finca"];
$vereda=$_POST["vereda"];
$municipio=$_POST["municipio"];


            $objPHPExcel->getActiveSheet()->setTitle('Consulta_Finca');
$objPHPExcel->setActiveSheetIndex(0);


$connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT Nombre,Fax,Telefono,Tamano, NombreVereda,Nombre_Municipio,NombreDepartamento, COUNT(Idlote) AS lotes FROM hacienda INNER JOIN lote ON hacienda.Idhacienda=lote.IdHacienda INNER JOIN vereda ON hacienda.Idvereda=vereda.Idvereda INNER JOIN municipio ON vereda.Idmunicipio=municipio.Idmunicipio INNER JOIN departamento ON municipio.Iddepartamento=departamento.Iddepartamento WHERE Nombre LIKE '%$Nombre_Finca%' AND NombreVereda LIKE '%$vereda%' AND Nombre_Municipio LIKE '%$municipio%'";
$resource=mysqli_query($connection,$query);
$y=7;
while ($fila=mysqli_fetch_row($resource)) {
    $y++;


    $objPHPExcel->setActiveSheetIndex(0)
                ->getStyle("A".$y.":H".$y)
                ->applyFromArray($border);





     $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$y, $fila[0])
            ->setCellValue('B'.$y, $fila[1])
            ->setCellValue('C'.$y, $fila[2])
            ->setCellValue('D'.$y, $fila[3])
            ->setCellValue('E'.$y, $fila[4])
            ->setCellValue('F'.$y, $fila[5])
            ->setCellValue('G'.$y, $fila[6])
            ->setCellValue('H'.$y, $fila[7]);




};






// 5) Descargar el archivo

// El paso final será descargar el archivo, aquí definiremos el nombre que tendrá al ser descargado y el tipo de Excel que será.

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Consulta_Finca.xls"');
header('Cache-Control: max-age=0');
 
$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
$objWriter->save('php://output');
exit;