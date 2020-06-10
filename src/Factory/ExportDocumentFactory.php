<?php


namespace App\Factory;

use App\Utils\ExportToExcel;
use Symfony\Component\Config\Definition\Exception\Exception;
use App\Utils\ExportToPdf;

class ExportDocumentFactory
{

    private $mimeFormat; ///can be excel..pdf,....etc

    public function __construct(string $mimeFormat)
    {
        $this->mimeFormat = $mimeFormat;
    }

    public function __invoke(array $items): string
    {
        $exporterInstanceByFormat = null;

        switch ($this->mimeFormat) {
            case 'excel':
                $exporterInstanceByFormat = new ExportToExcel();
                break;
            case 'pdf':
                $exporterInstanceByFormat = new ExportToPdf();
                break;
            default:
                throw new Exception("The document format that you requested doesn't supportable");
        }

        return $exporterInstanceByFormat->export($items);
    }
}
