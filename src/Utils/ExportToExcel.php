<?php

namespace App\Utils;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class ExportToExcel implements \App\Interfaces\IExportFile
{
    const EXCEL_LETTERS_COLUMNS = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG');
    const EXCEL_HEADERS_ROW_NUMBER = 1;
    const EXCEL_BEGIN_BODY_ROW = 2;

    public function export(array $items)
    {
        $spreadsheet = new Spreadsheet();

        # @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet
        $sheet = $spreadsheet->getActiveSheet();
        $this->drawExcelHeaders($sheet, $this->getExcelHeaders($items));
        $this->drawExcelBody($sheet, $items);
        $sheet->setTitle("Report");
        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);
        // Create a Temporary file in the system
        $fileName = 'report_excel';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        // Create the excel file in the tmp directory of the system
        $writer->save($temp_file . '.xlsx');
        return $temp_file . '.xlsx';
    }

    public function drawExcelBody(Worksheet $sheet, array $items): void
    {
        foreach ($items as $key => $item) {
            $cellNumber = $key + self::EXCEL_BEGIN_BODY_ROW; # $cellNumber = (2, 3 ,4 ..etc)
            $indexLetter = 0;
            foreach ($item as $pos => $value) {
                $abecedaryIndexLetter = self::EXCEL_LETTERS_COLUMNS[$indexLetter]; # $abecedaryIndexLetter = ('A','B','C'..etc)
                $excelPosition = $abecedaryIndexLetter . $cellNumber; #  $excelPosition = ('A2','B2', 'C2','A3', 'B3', 'C3'..etc)
                $sheet->setCellValue($excelPosition, $value);
                $indexLetter++;
            }
            $cellNumber++;
        }
    }

    public function drawExcelHeaders(Worksheet $sheet, array $arrHeaders): void
    {
        foreach ($arrHeaders as $pos => $header) {
            $abecedaryIndexLetter = self::EXCEL_LETTERS_COLUMNS[$pos]; # $abecedaryIndexLetter = ('A','B', 'C'..etc)
            $excelPosition = $abecedaryIndexLetter . self::EXCEL_HEADERS_ROW_NUMBER; #  $excelPosition = ('A1','B1', 'C1'..etc)
            $sheet->setCellValue($excelPosition, $header);  # setCellValue('A1' = 'name', 'B1' = name2)
        }
    }

    public function getExcelHeaders($items): ?array
    {
        if (!$items) {
            return array();
        }

        return array_keys($items[0]);
    }
}