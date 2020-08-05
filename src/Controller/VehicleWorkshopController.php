<?php


namespace App\Controller;

use App\Entity\VehicleWorkshop;
use App\Service\VehicleService;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\VehicleWorkshopService;

class VehicleWorkshopController
{
    private $request;
    private $vehicleWorkshopService;

    /**
     * VehicleController constructor.
     * @param VehicleService $vehicleWorkshopService
     * @param RequestStack $request
     */
    public function __construct(VehicleWorkshopService $vehicleWorkshopService, RequestStack $request)
    {
        $this->request = $request;
        $this->vehicleWorkshopService = $vehicleWorkshopService;
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
    public function __invoke(VehicleWorkshop $data): VehicleWorkshop
    {
        $method = $this->request->getCurrentRequest()->getMethod();
        switch ($method) {
            case "POST":
                $this->vehicleWorkshopService->saveVehicleWorkshop($data);
                break;
            case "PATCH":
                $this->vehicleWorkshopService->updateVehicleWorkshop($data);
                break;
        }
        return $data;
    }

}