<?php


namespace App\Controller;

use App\Entity\Vehicle;
use App\Entity\Workshop;
use Symfony\Component\HttpFoundation\Response;
use App\Utils\RequestContextParser;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\VehicleService;
use App\Factory\ExportDocumentFactory;
use Symfony\Component\HttpFoundation\HeaderUtils;


class ExportWorkshopsController
{
    private $request;

    /**
     * ExportVehiclesController constructor.
     * @param RequestStack $request
     */
    public function __construct(RequestStack $request)
    {
        $this->request = $request;
    }

    /**
     * @param Workshop $data
     * @return array
     * In custom controllers By Api-Platform, The __invoke method of the action is called when the matching route is hit.
     * It can return either an instance of Symfony\Component\HttpFoundation\Response (that will be displayed to the client
     * immediately by the Symfony kernel) or, like in this example, an instance of an entity mapped as a resource
     * (or a collection of instances for collection operations). In this case, the entity will pass through all built-in event
     * listeners of API Platform. It will be automatically validated, persisted and serialized in JSON-LD. Then the Symfony kernel
     * will send the resulting document to the client.
     *
     */
    public function __invoke($data, string $format): Response
    {
        $parser = new RequestContextParser($this->request);
        $extension = $format == 'excel' ? 'xlsx' : 'pdf';
        $fileColumns = $this->constructWorkshopsColumnsToExport($data);
        //Factory Pattern, I create
        $fileExporter = (new ExportDocumentFactory($format))(); //# call__invokable method of ExportDocumentFactory class

        $filePath = $fileExporter->export($fileColumns);
        $file = file_get_contents($filePath);

        $response = new Response($file);
        $disposition = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,
            'workshops.' . $extension
        );
        // Return the excel file as an attachment
        $response->headers->set('Content-Disposition', $disposition);
        return $response;
    }

    public function constructWorkshopsColumnsToExport($workshops)
    {
        $columns = [];
        foreach ($workshops as $index => $workshop) {
            if ($workshop instanceof Workshop) {
                $columns[] = array(
                    "Código" => $workshop->getCode(),
                    "Nombre" => $workshop->getName(),
                    "Alta" => $workshop->getCreatedAt()->format('Y-m-d'),
                    "Dirección" => $workshop->getMainDirection(),
                    "Móvil" => $workshop->getMainPhone(),
                    "Móvil Secundario" => $workshop->getSecondPhone(),
                    "Email" => $workshop->getMainEmail(),
                    "Servicios" => count($workshop->getVehicleWorkshops()),
                    "Clasificación" => $workshop->getAvgRate(),
                    "Facturación" => $workshop->getTotalBilled()
                );
            }
        }

        return $columns;
    }

}