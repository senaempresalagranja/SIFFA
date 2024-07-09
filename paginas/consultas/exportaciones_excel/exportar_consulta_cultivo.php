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
            ->setCellValue('A7', 'Nombre Cultivo')
            ->setCellValue('B1','SIFFA V.2')
            ->setCellValue('B7', 'Tipo Cultivo')
            ->setCellValue('C7', 'N')
            ->setCellValue('D7', 'P')
            ->setCellValue('E7', 'K')
            ->setCellValue('F7', 'Ca')
            ->setCellValue('G7', 'Mg')
            ->setCellValue('H7', 'S')
            ->setCellValue('I7', 'Zn')
            ->setCellValue('J7', 'B')
            ->setCellValue('K7', 'Cu');






// AQUI ESTOY DICIENDO LA FUENTE Y SU TAMAÑO
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
$objPHPExcel->getDefaultStyle()->getFont()->setSize(14);



$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(10);





// ESTILOS DE LAS COLUMNAS Y FILAS
$objPHPExcel->getActiveSheet()
            ->getStyle('A7:K7')
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
            ->getStyle('A7:K8')
            ->applyFromArray($border);



// 4) Propiedades de la hoja

// Luego de escribir en la hoja de cálculo pasamos a darle un nombre y definir con que hoja abrirá el documento, en este caso como tenemos solo uno, el valor será “0”.
$nombre_cultivo=$_POST["nombre_cultivo"];
$tipo_cultivo=$_POST["tipo_cultivo"];


            $objPHPExcel->getActiveSheet()->setTitle('Consulta_Cultivo');
$objPHPExcel->setActiveSheetIndex(0);


$connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT * FROM cultivo INNER JOIN requerimiento ON cultivo.idrequerimiento=requerimiento.idrequerimiento INNER JOIN tipo_cultivo ON cultivo.Idtipo_cultivo=tipo_cultivo.Idtipo_cultivo WHERE cultivo.NombreCultivo LIKE'%$nombre_cultivo%' AND Nombre LIKE'%$tipo_cultivo%'";
$resource=mysqli_query($connection,$query);
$y=7;
while ($fila=mysqli_fetch_row($resource)) {
    $y++;


    $objPHPExcel->setActiveSheetIndex(0)
                ->getStyle("A".$y.":K".$y)
                ->applyFromArray($border);





     $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$y, $fila[1])
            ->setCellValue('B'.$y, $fila[15])
            ->setCellValue('C'.$y, $fila[3])
            ->setCellValue('D'.$y, $fila[4])
            ->setCellValue('E'.$y, $fila[5])
            ->setCellValue('F'.$y, $fila[6])
            ->setCellValue('G'.$y, $fila[7])
            ->setCellValue('H'.$y, $fila[8])
            ->setCellValue('I'.$y, $fila[9])
            ->setCellValue('J'.$y, $fila[10])
            ->setCellValue('K'.$y, $fila[11]);




};






// 5) Descargar el archivo

// El paso final será descargar el archivo, aquí definiremos el nombre que tendrá al ser descargado y el tipo de Excel que será.

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Consulta_Cultivo.xls"');
header('Cache-Control: max-age=0');
 
$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
$objWriter->save('php://output');
exit;