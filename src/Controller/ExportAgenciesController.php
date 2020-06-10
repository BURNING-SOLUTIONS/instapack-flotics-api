<?php


namespace App\Controller;

use App\Entity\RentalAgency;
use Symfony\Component\HttpFoundation\Response;
use App\Utils\RequestContextParser;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Factory\ExportDocumentFactory;
use Symfony\Component\HttpFoundation\HeaderUtils;


class ExportAgenciesController
{
    private $request;

    /**
     * ExportContractsController constructor.
     * @param RequestStack $request
     */
    public function __construct(RequestStack $request)
    {
        $this->request = $request;
    }

    /**
     * @param RentalAgency $data
     * @return array
     * In custom controllers By Api-Platform, The __invoke method of the action is called when the matching route is hit.
     * It can return either an instance of Symfony\Component\HttpFoundation\Response (that will be displayed to the client
     * immediately by the Symfony kernel) or, like in this example, an instance of an entity mapped as a resource
     * (or a collection of instances for collection operations). In this case, the entity will pass through all built-in event
     * listeners of API Platform. It will be automatically validated, persisted and serialized in JSON-LD. Then the Symfony kernel
     * will send the resulting document to the client.
     */
    public function __invoke($data, string $format): Response
    {
        $parser = new RequestContextParser($this->request);
        $extension = $format == 'excel' ? 'xlsx' : 'pdf';
        $exporter = new ExportDocumentFactory($format);
        $fileColumns = $this->constructAgenciesColumnsToExport($data);
        # call__invokable class $exporter method
        $filePath = ($exporter)($fileColumns);
        $file = file_get_contents($filePath);
        $response = new Response($file);
        $disposition = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,
            'rental_agencies.' . $extension
        );
        // Return the excel file as an attachment
        $response->headers->set('Content-Disposition', $disposition);
        return $response;
    }

    public function constructAgenciesColumnsToExport($agencies)
    {
        $columns = [];
        foreach ($agencies as $index => $agency) {
            if ($agency instanceof RentalAgency) {
                $columns[] = array(
                    "Código" => $agency->getCode(),
                    "Nombre" => $agency->getName(),
                    "Cif" => $agency->getCif(),
                    "Dirección" => $agency->getBussinesAddress(),
                    "Dirección Fiscal" => $agency->getBussinesAddress(),
                    "Provincia" => $agency->getProvince(),
                    "Población" => $agency->getPopulation(),
                    "Total de Vehículos" => count($agency->getVehicles()),
                );
            }
        }

        return $columns;
    }

}