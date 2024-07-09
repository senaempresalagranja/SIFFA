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
            ->setCellValue('A7', 'Nombre Cultivo')
            ->setCellValue('B1','SIFFA V.2')
            ->setCellValue('B7', 'N')
            ->setCellValue('C7', 'P')
            ->setCellValue('D7', 'K')
            ->setCellValue('E7', 'Ca')
            ->setCellValue('F7', 'Mg')
            ->setCellValue('G7', 'S')
            ->setCellValue('H7', 'Zn')
            ->setCellValue('I7', 'B')
            ->setCellValue('J7', 'Cu')



            ->setCellValue('A8', $nombre_fetilizante)
            ->setCellValue('B8', $nutriente_N)
            ->setCellValue('C8', $nutriente_P)
            ->setCellValue('D8', $nutriente_K)
            ->setCellValue('E8', $nutriente_Ca)
            ->setCellValue('F8', $nutriente_Mg)
            ->setCellValue('G8', $nutriente_S)
            ->setCellValue('H8', $nutriente_Zn)
            ->setCellValue('I8', $nutriente_B)
            ->setCellValue('J8', $nutriente_Cu);



// AQUI ESTOY DICIENDO LA FUENTE Y SU TAMAÑO
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
$objPHPExcel->getDefaultStyle()->getFont()->setSize(14);



$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(5);





// ESTILOS DE LAS COLUMNAS Y FILAS
$objPHPExcel->getActiveSheet()
			->getStyle('A7:J7')
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
            ->getStyle('A7:J8')
            ->applyFromArray($border);



// 4) Propiedades de la hoja

// Luego de escribir en la hoja de cálculo pasamos a darle un nombre y definir con que hoja abrirá el documento, en este caso como tenemos solo uno, el valor será “0”.



            $objPHPExcel->getActiveSheet()->setTitle('Formulario_Cultivo');
$objPHPExcel->setActiveSheetIndex(0);



// 5) Descargar el archivo

// El paso final será descargar el archivo, aquí definiremos el nombre que tendrá al ser descargado y el tipo de Excel que será.

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Formulario_Fertilizante.xls"');
header('Cache-Control: max-age=0');
 
$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
$objWriter->save('php://output');
exit;