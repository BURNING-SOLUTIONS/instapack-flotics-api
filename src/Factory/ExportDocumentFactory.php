<?php


namespace App\Factory;

use App\Interfaces\IExportFile;
use Symfony\Component\Config\Definition\Exception\Exception;

const INSTANCE_TYPEDOC = array(
    "excel" => 'App\Utils\ExportToExcel',
    "pdf" => 'App\Utils\ExportToPdf'
);


abstract class ExporterDocument
{
    abstract function createDocumentExporter();
}

class ExportDocumentFactory extends ExporterDocument
{

    private $mimeFormat; ///can be excel..pdf,....etc

    public function __construct(string $mimeFormat)
    {
        $this->mimeFormat = $mimeFormat;
    }

    public function __invoke(): ?IExportFile
    {
        return $this->createDocumentExporter();

    }

    public function createDocumentExporter(): ?IExportFile
    {
        $exporterInterface = INSTANCE_TYPEDOC[$this->mimeFormat];

        return (new $exporterInterface());
    }

}
