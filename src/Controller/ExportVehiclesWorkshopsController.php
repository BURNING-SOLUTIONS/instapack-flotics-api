<?php


namespace App\Controller;

use App\Entity\VehicleWorkshop;
use App\Factory\ExportDocumentFactory;
use Symfony\Component\HttpFoundation\HeaderUtils;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use App\Utils\RequestContextParser;

class ExportVehiclesWorkshopsController
{
    private $request;

    /**
     * ExportVehiclesWorkshopsController constructor.
     * @param RequestStack $request
     */
    public function __construct(RequestStack $request)
    {
        $this->request = $request;
    }

    /**
     * @param VehicleWorkshop $data
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
        $fileColumns = $this->constructVehiclesWorkshopsColumnsToExport($data);
        //Factory Pattern, I create
        $fileExporter = (new ExportDocumentFactory($format))(); //# call__invokable method of ExportDocumentFactory class

        $filePath = $fileExporter->export($fileColumns);
        $file = file_get_contents($filePath);

        $response = new Response($file);
        $disposition = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,
            'vehicles_workshops.' . $extension
        );
        // Return the excel file as an attachment
        $response->headers->set('Content-Disposition', $disposition);
        return $response;
    }

    public function constructVehiclesWorkshopsColumnsToExport($vehiclesWorkshops)
    {
        $total = 0;
        $columns = [];
        foreach ($vehiclesWorkshops as $index => $vehiclesWorkshop) {
            $total += $vehiclesWorkshop->getPrice();
            if ($vehiclesWorkshop instanceof VehicleWorkshop) {
                $columns[] = array(
                    "Matrícula" => $vehiclesWorkshop->getVehicle()->getRegistration(),
                    "Inicio" => $vehiclesWorkshop->getStartDate() ? $vehiclesWorkshop->getStartDate()->format('Y-m-d') : '-',
                    "Fin" => $vehiclesWorkshop->getEndDate() ? $vehiclesWorkshop->getEndDate()->format('Y-m-d') : '-',
                    "Agencia" => $vehiclesWorkshop->getRentalAgency()->getName(),
                    "Taller" => $vehiclesWorkshop->getWorkshop()->getName(),
                    "Grúa" => $vehiclesWorkshop->getHasCrane() ? 'Sí' : 'No',
                    "Pago Grúa" => $vehiclesWorkshop->getHasCrane() ? $vehiclesWorkshop->getCraneMsg() : '-',
                    "Pago Taller" => $vehiclesWorkshop->getWorkshopPayment() ? $vehiclesWorkshop->getWorkshopMsg() : '-',
                    "Servicios" => $vehiclesWorkshop->getStrServices(),
                    "Finalizado" => $vehiclesWorkshop->getFinalized() ? 'Sí' : 'No',
                    "Costo/Importe" => $vehiclesWorkshop->getPrice() . ' ' . '(€)',
                    "Costo Acumulado" => '↑' . $total . ' ' . '(€)',
                );
            }
        }

        return $columns;
    }
}