<?php

namespace App\Controller;

use App\Service\ContractService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use App\Service\VehicleService;
use App\Service\RentalAgencyService;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;

class GlobalSearchController
{
    private $request;
    private $vehicleService;
    private $rentalAgencyService;
    private $contractService;

    /**
     * GlobalSearchController constructor.
     */
    public function __construct(RequestStack $request, VehicleService $vehicleService, RentalAgencyService $rentalAgencyService, ContractService $contractService)
    {
        $this->request = $request;
        $this->vehicleService = $vehicleService;
        $this->rentalAgencyService = $rentalAgencyService;
        $this->contractService = $contractService;
    }

    /**
     * In custom controllers By Api-Platform, The __invoke method of the action is called when the matching route is hit.
     * It can return either an instance of Symfony\Component\HttpFoundation\Response (that will be displayed to the client
     * immediately by the Symfony kernel) or, like in this example, an instance of an entity mapped as a resource
     * (or a collection of instances for collection operations). In this case, the entity will pass through all built-in event
     * listeners of API Platform. It will be automatically validated, persisted and serialized in JSON-LD. Then the Symfony kernel
     * will send the resulting document to the client.
     *
     */
    /**
     * @Route(
     *     name="global_search",
     *     path="api/global-search",
     *     methods={"GET"}
     * )
     */
    public function __invoke(): Response
    {
        $query = $this->request->getCurrentRequest()->get('query');
        $vehicles = $this->vehicleService->getVehicleByOrParams(array('registration' => $query, 'frame' => $query));
        $agencies = $this->rentalAgencyService->getRentalAgencyByOrParams(array('name' => $query, 'code' => $query, 'cif' => $query));
        $contracts = $this->contractService->getContractByOrParams(array('number' => $query));

        return new JsonResponse(
            array(
                'code' => 200,
                'results' => array(
                    'vehicles' => $vehicles,
                    'agencies' => $agencies,
                    'contracts' => $contracts
                )));
    }
}
