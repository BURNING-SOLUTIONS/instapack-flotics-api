<?php


namespace App\Utils;


use Mpdf\Mpdf;

class ExportToPdf implements \App\Interfaces\IExportFile
{

    public function export(array $items)
    {

        $headers = $this->drawPdfHeaders($this->getTableHeaders($items));
        $tableBody = $this->drawPdfBody($items);
        $stylesheet = file_get_contents(__DIR__.'/'.'exportPdfStyle.css');
        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Mpdf(['tempDir' => sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'mpdf', 'format' => 'A4-L', 'orientation' => 'L']);
        $writer->Bookmark('Start of the document');
        $writer->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
        $writer->WriteHTML(
            "<table class='table table-striped'>
                      <thead>
                        <tr>
                          $headers
                        </tr>
                      </thead>
                      <tbody>
                        $tableBody
                      </tbody>
                    </table>", \Mpdf\HTMLParserMode::HTML_BODY);
        // Create a Temporary file in the system
        $fileName = 'report_pdf';
        $temp_file = tempnam(sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'mpdf', $fileName);

        $writer->Output($temp_file . '.mpdf');

        // Create the excel file in the tmp directory of the system
        return $temp_file . '.mpdf';
    }

    public function getTableHeaders($items)
    {
        if (!$items) {
            return array();
        }

        return array_keys($items[0]);
    }

    public function drawPdfHeaders(array $arrHeaders): string
    {
        $ths = "";

        foreach ($arrHeaders as $header) {
            $ths .= "<th scope='col'>$header</th>";
        }

        return $ths;
    }

    public function drawPdfBody(array $items): string
    {
        $trs = "";
        foreach ($items as $key => $item) {
            $pos = (int) $key;
            $isOdd = ($pos % 2) > 0;
            $trs .= $isOdd ? "<tr class='striped'>" : "<tr>";
            foreach ($item as $pos => $value) {
                $trs .= "<td>$value</td>";
            }
            $trs .= "</tr>";
        }
        return $trs;
    }

}