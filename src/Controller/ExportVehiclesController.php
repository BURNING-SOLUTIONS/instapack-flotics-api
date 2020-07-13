<?php


namespace App\Controller;

use App\Entity\Vehicle;
use Symfony\Component\HttpFoundation\Response;
use App\Utils\RequestContextParser;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\VehicleService;
use App\Factory\ExportDocumentFactory;
use Symfony\Component\HttpFoundation\HeaderUtils;


class ExportVehiclesController
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
     * @param Vehicle $data
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
        $fileColumns = $this->constructVehiclesColumnsToExport($data);
        //Factory Pattern, I create
        $fileExporter = (new ExportDocumentFactory($format))(); //# call__invokable method of ExportDocumentFactory class

        $filePath = $fileExporter->export($fileColumns);
        $file = file_get_contents($filePath);

        $response = new Response($file);
        $disposition = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,
            'vehicles.' . $extension
        );
        // Return the excel file as an attachment
        $response->headers->set('Content-Disposition', $disposition);
        return $response;
    }

    public function constructVehiclesColumnsToExport($vehicles)
    {
        $columns = [];
        foreach ($vehicles as $index => $vehicle) {
            if ($vehicle instanceof Vehicle) {
                $columns[] = array(
                    "Matrícula" => $vehicle->getRegistration(),
                    "Bastidor" => $vehicle->getFrame(),
                    "Marca" => $vehicle->getBrand(),
                    "Modelo" => $vehicle->getModel(),
                    "Agencia" => $vehicle->getRentalAgency()->getName(),
                    "#Contrato" => $vehicle->getContract() ? $vehicle->getContract()->getNumber() : '-',
                    "Tipo" => $vehicle->getContract() ? $vehicle->getContract()->getType()->getName() : '-',
                    "Fin Contrato" => $vehicle->getContract() ? $vehicle->getContract()->getEndDate()->format('Y-m-d') : '-',
                    "Combustible" => $vehicle->getFuelVehicle()->getType(),
                    "Carga" => $vehicle->getCapacity(),
                    "Mom" => $vehicle->getMom(),
                    "Mma" => $vehicle->getMma(),
                    "Co2" => $vehicle->getCo2(),
                    #"Seguro" => $vehicle->getInsurance(),
                    "Tarj. Transporte" => $vehicle->getTransportCard(),
                    "M. Central" => $vehicle->getMadridCentral() ? $vehicle->getMadridCentral()->format('Y-m-d') : '-',
                    "M. Ser" => $vehicle->getMadridSer() ? $vehicle->getMadridSer()->format('Y-m-d') : '-',
                );
            }
        }

        return $columns;
    }

}