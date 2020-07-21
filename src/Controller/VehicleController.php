<?php


namespace App\Controller;

use App\Entity\Vehicle;
use App\Messages\VehicleHistoryMessage;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Utils\RequestContextParser;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\VehicleService;
use Symfony\Component\Messenger\MessageBusInterface;


class VehicleController
{
    private $request;
    private $vechicleService;

    /**
     * VehicleController constructor.
     * @param VehicleService $vechicleService
     * @param RequestStack $request
     */
    public function __construct(VehicleService $vechicleService, RequestStack $request)
    {
        $this->request = $request;
        $this->vechicleService = $vechicleService;
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
    public function __invoke(MessageBusInterface $bus, Vehicle $data): Vehicle
    {
        $method = $this->request->getCurrentRequest()->getMethod();
        $parser = new RequestContextParser($this->request);
        $equipments = $parser->getRequestValue('equipments');
        $authorizations = $parser->getRequestValue('authorizations');
        $equipments_array = array();
        $authorizations_array = array();

        if ($equipments) {
            $equipments_array = $this->arrayMap($equipments);
        }
        if ($authorizations) {
            $authorizations_array = $this->arrayMap($authorizations);
        }

        switch ($method) {
            case "POST":
                $this->vechicleService->saveVehicle($data, $equipments_array, $authorizations_array);
                break;
            case "PATCH":
                $this->vechicleService->updateVehicle($data, $equipments_array, $authorizations_array);
                break;
        }
        return $data;
    }

    public function arrayMap(array $pieces): array
    {
        return array_map(function ($piece) {
            return get_object_vars($piece);
        }, $pieces);
    }
}