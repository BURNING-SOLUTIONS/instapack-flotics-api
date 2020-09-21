<?php


namespace App\Controller;

use App\Entity\RentalAgency;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Utils\RequestContextParser;
use App\Service\RentalAgencyService;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonDecode;

class RentalAgencyController
{

    private $request;
    private $rentalAgencyService;

    /**
     * VehicleController constructor.
     * @param RentalAgencyService $rentalAgencyService
     * @param RequestStack $request
     */
    public function __construct(RentalAgencyService $rentalAgencyService, RequestStack $request)
    {
        $this->request = $request;
        $this->rentalAgencyService = $rentalAgencyService;
    }

    /**
     * @param RentalAgency $data
     * @return RentalAgency
     * In custom controllers By Api-Platform, The __invoke method of the action is called when the matching route is hit.
     * It can return either an instance of Symfony\Component\HttpFoundation\Response (that will be displayed to the client
     * immediately by the Symfony kernel) or, like in this example, an instance of an entity mapped as a resource
     * (or a collection of instances for collection operations). In this case, the entity will pass through all built-in event
     * listeners of API Platform. It will be automatically validated, persisted and serialized in JSON-LD. Then the Symfony kernel
     * will send the resulting document to the client.
     */
    public function __invoke(RentalAgency $data): RentalAgency
    {
        $method = $this->request->getCurrentRequest()->getMethod();
        $encoder = new JsonEncode();
        $decoder = new JsonDecode();
        $parser = new RequestContextParser($this->request);
        $rates = $parser->getRequestValue('agency_rates');
        $ratesArray = array();
        if ($rates) {
            $ratesJson = $encoder->encode($rates, 'json');
            $ratesArray = $decoder->decode($ratesJson, 'array', ['json_decode_associative' => true]);
        }

        switch ($method) {
            case "POST":
                $this->rentalAgencyService->saveRentalAgency($data, $ratesArray);
                break;
            case "PATCH":
                $this->rentalAgencyService->updateRentalAgency($data, $ratesArray);
                break;
        }
        return $data;
    }

}