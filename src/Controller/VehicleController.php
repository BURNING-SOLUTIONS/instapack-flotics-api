<?php


namespace App\Controller;

use App\Entity\Vehicle;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Utils\RequestContextParser;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Exception\CredentialsExpiredException;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use App\Service\VehicleService;


class VehicleController
{
    private $oauthService;
    private $applicationService;
    private $request;
    private $vehicle;
    private $vechicleService;

    /**
     * VehicleController constructor.
     * @param VehicleService $vechicleService
     * @param Vehicle $vehicle
     * @param RequestStack $request
     */
    public function __construct(VehicleService $vechicleService,Vehicle $vehicle, RequestStack $request)
    {
        $this->vehicle = $vehicle;
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
    public function __invoke(Vehicle $data): Vehicle
    {

        $this->vechicleService->saveVehicle($data);
        return $data;
    }
}