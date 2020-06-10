<?php


namespace App\Controller;

use App\Entity\Contract;
use Symfony\Component\HttpFoundation\Response;
use App\Utils\RequestContextParser;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\VehicleService;
use App\Factory\ExportDocumentFactory;
use Symfony\Component\HttpFoundation\HeaderUtils;


class ExportContractsController
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
     * @param Contract $data
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
        $exporter = new ExportDocumentFactory($format);
        $fileColumns = $this->constructContractsColumnsToExport($data);
        # call__invokable class $exporter method
        $filePath = ($exporter)($fileColumns);
        $file = file_get_contents($filePath);
        $response = new Response($file);
        $disposition = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,
            'contracts.' . $extension
        );
        // Return the excel file as an attachment
        $response->headers->set('Content-Disposition', $disposition);
        return $response;
    }

    public function constructContractsColumnsToExport($contracts)
    {
        $columns = [];
        foreach ($contracts as $index => $contract) {
            if ($contract instanceof Contract) {
                $columns[] = array(
                    "Número" => $contract->getNumber(),
                    "Inicio" => $contract->getStartDate()->format('Y-m-d'),
                    "Fin" => $contract->getEndDate()->format('Y-m-d'),
                    "Tipo" => $contract->getType()->getName(),
                    "Vehículo" => $contract->getVehicle()->getRegistration(),
                    "Agencia" => $contract->getRentalAgency()->getName(),
                    "Grupo" => $contract->getInstapackGroup()->getName(),
                    "Dir.Recogida" => $contract->getDeliveryAddress(),
                    "Dir.Entre" => $contract->getDevolutionAddress(),
                    "Dep.Inicial" => $contract->getInitialDeposit(),
                    "Km. Recogida" => $contract->getEntryKm(),
                    "Km. Salida" => $contract->getExitKm()
                );
            }
        }

        return $columns;
    }

}