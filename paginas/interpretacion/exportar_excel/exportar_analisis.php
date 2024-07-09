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
// require_once '../graficar.php';
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


      


$style = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );

$objPHPExcel->getDefaultStyle()->applyFromArray($style);



// ESTILOS DE LAS COLUMNAS Y FILAS
$objPHPExcel->getActiveSheet()
            ->getStyle('A7:I7')
            ->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
            ->getStartColor()->setARGB('#A5DF00');

$objPHPExcel->getActiveSheet()
            ->getStyle('E12:I12')
            ->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
            ->getStartColor()->setARGB('#DAAFAF');
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
            ->getStyle('A7:I8')
            ->applyFromArray($border);



// 4) Propiedades de la hoja


    $numero_muestra=$_POST["numero_muestra"];
    $laboratorio=$_POST["laboratorio"];
    $finca=$_POST["finca"];
    $lote=$_POST["lote"];
    $cultivo=$_POST["cultivo"];
    $profundidad=$_POST["profundidad"];
    $cilma=$_POST["cilma"];
    $densidad_aparente=$_POST["densidad_aparente"];
    $PH=$_POST["PH"];
    $MO=$_POST["MO"];
    $CO=$_POST["CO"];
    $P=$_POST["P"];
    $Al=$_POST["Al"];
    $Ca=$_POST["Ca"];
    $Mg=$_POST["Mg"];
    $K=$_POST["K"];
    $Na=$_POST["Na"];
    $CICE=$Al + $Ca + $Mg + $K + $Na;
    $S=$_POST["S"];
    $Fe=$_POST["Fe"];
    $Mn=$_POST["Mn"];
    $Cu=$_POST["Cu"];
$Zn=$_POST["Zn"];   
    $B=$_POST["B"];
    $porcentaje_saturacion_Al=$Al/$CICE*100;
    $porcentaje_saturacion_Na=$Na/$CICE*100;
$CE=$_POST["CE"];





  $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A7', '# Lote')
            ->setCellValue('B1','SIFFA V.2')
            ->setCellValue('B7', 'LABORATORIO')
            ->setCellValue('C7', 'FINCA')
            ->setCellValue('D7', 'LOTE')
            ->setCellValue('E7', 'CULTIVO')
            ->setCellValue('F7', 'TAMAÑO CULTIVO (Ha)')
            ->setCellValue('G7', 'PROFUNDIDAD (m)')
            ->setCellValue('H7', 'CLIMA')
            ->setCellValue('I7', 'DENSIDAD APARENTE');









// AQUI ESTOY DICIENDO LA FUENTE Y SU TAMAÑO
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
$objPHPExcel->getDefaultStyle()->getFont()->setSize(14);



$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(27);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(23);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(15);



            $connection=mysqli_connect("localhost","root","","siffa");
$query="SELECT  Nombre_Laboratorio,Nombre, NumeroLote, NombreCultivo, Extension, requerimiento.Nitrogeno,  requerimiento.Fosforo, requerimiento.Potasio,  requerimiento.Calcio,  requerimiento.Magnesio, requerimiento.Azufre, requerimiento.Zinc, requerimiento.Boro, requerimiento.Cobre  FROM `analisis` INNER JOIN laboratorio ON analisis.Idlaboratorio=laboratorio.Idlaboratorio INNER JOIN lotecultivo ON analisis.Idlotecultivo=lotecultivo.Idlotecultivo INNER JOIN lote ON lotecultivo.Idlote=lote.Idlote INNER JOIN hacienda ON lote.IdHacienda=hacienda.Idhacienda INNER JOIN cultivo ON lotecultivo.idcultivo=cultivo.idcultivo INNER JOIN requerimiento ON cultivo.idrequerimiento=requerimiento.idrequerimiento WHERE analisis.Idlaboratorio='$laboratorio' AND cultivo.idcultivo='$cultivo'";


$resource=mysqli_query($connection,$query);
$fila=mysqli_fetch_row($resource);




  $objPHPExcel->setActiveSheetIndex(0)
              ->setCellValue('A8', $numero_muestra)
            ->setCellValue('B8',  $fila[0])
            ->setCellValue('C8', $fila[1])
            ->setCellValue('D8', $fila[2])
            ->setCellValue('E8', $fila[3])
            ->setCellValue('F8', $fila[4])
            ->setCellValue('G8', $profundidad)
            ->setCellValue('H8', $cilma)
            ->setCellValue('I8', $densidad_aparente)

            ->setCellValue('A11', 'Elementos')
            ->setCellValue('B11', 'PH ')
            ->setCellValue('C11', '% MO')
            ->setCellValue('D11', 'P ppm-B-||')
            ->setCellValue('E11', 'BASES [cmol(c)/Kg Suelo] ')
            ->setCellValue('J11', 'CICE')
            ->setCellValue('K11', 'S-ppm')


            ->setCellValue('E12', 'AL')
            ->setCellValue('F12', 'Ca')
            ->setCellValue('G12', 'Mg')
            ->setCellValue('H12', 'K')
            ->setCellValue('I12', 'Na')

            ->setCellValue('A13', 'Resultados')
            ->setCellValue('B13', $PH)
            ->setCellValue('C13', $MO)
            ->setCellValue('D13', $P)
            ->setCellValue('E13', $Al)
            ->setCellValue('F13', $Ca)
            ->setCellValue('G13', $Mg)
            ->setCellValue('H13', $K)
            ->setCellValue('I13', $Na)
            ->setCellValue('J13', $CICE)
            ->setCellValue('K13', $S)

            ->setCellValue('A17', 'Elementos Menores')
            ->setCellValue('F17', 'Saturacion (%)')
            ->setCellValue('A18', 'Elementos')
            ->setCellValue('B18', 'Fe')
            ->setCellValue('C18', 'Mn')
            ->setCellValue('D18', 'Cu')
            ->setCellValue('E18', 'Zn')
            ->setCellValue('F18', 'B')
            ->setCellValue('G18', 'Al')
            ->setCellValue('H18', 'Na')
            ->setCellValue('I18', 'CE-ds/m')



            ->setCellValue('A19', 'Resultados')
            ->setCellValue('B19', $Fe)
            ->setCellValue('C19', $Mn)
            ->setCellValue('D19', $Cu)
            ->setCellValue('E19', $Zn)
            ->setCellValue('F19', $B)
            ->setCellValue('G19', $porcentaje_saturacion_Al)
            ->setCellValue('H19', $porcentaje_saturacion_Na)
            ->setCellValue('I19', $CE)


            ->setCellValue('A23', 'Kg/Ha')


             ->setCellValue('A24', '#')
             ->setCellValue('B24', 'Nombre Nutriente')
             ->setCellValue('C24', 'Cantidad Nutriente Suelo')
             ->setCellValue('D24', 'Requerimiento Nutricional (Cultivo)')
             ->setCellValue('E24', "Diferencia");









// ESTILOS DE LAS COLUMNAS Y FILAS
$objPHPExcel->getActiveSheet()
            ->getStyle('A11:K11')
            ->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
            ->getStartColor()->setARGB('#A5DF00');

$objPHPExcel->getActiveSheet()
            ->getStyle('A17:I17')
            ->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
            ->getStartColor()->setARGB('#A5DF00');

            $objPHPExcel->getActiveSheet()
            ->getStyle('A23:E23')
            ->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
            ->getStartColor()->setARGB('#A5DF00');



$objPHPExcel->getActiveSheet()
            ->getStyle('A24:E24')
            ->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
            ->getStartColor()->setARGB('#DAAFAF');
// CENTRAR CELDAS

$objPHPExcel->setActiveSheetIndex(0)
->getStyle("A1:A2")
->applyFromArray($style);

// PARA COMBINAR CELDAS
$objPHPExcel->getActiveSheet()->mergeCells('E11:I11');


$objPHPExcel->getActiveSheet()->mergeCells('A11:A12');
$objPHPExcel->getActiveSheet()->mergeCells('B11:B12');
$objPHPExcel->getActiveSheet()->mergeCells('C11:C12');
$objPHPExcel->getActiveSheet()->mergeCells('D11:D12');
$objPHPExcel->getActiveSheet()->mergeCells('K11:K12');
$objPHPExcel->getActiveSheet()->mergeCells('J11:J12');
$objPHPExcel->getActiveSheet()->mergeCells('A17:E17');

$objPHPExcel->getActiveSheet()->mergeCells('F17:I17');
$objPHPExcel->getActiveSheet()->mergeCells('A23:E23');
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
                ->getStyle("A11:K13")
                ->applyFromArray($border);


   $objPHPExcel->setActiveSheetIndex(0)
                ->getStyle("A17:I19")
                ->applyFromArray($border);

$objPHPExcel->setActiveSheetIndex(0)
                ->getStyle("A23:E33")
                ->applyFromArray($border);

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