<?php


namespace App\Controller;

use App\Entity\Contract;
use App\Utils\RequestContextParser;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\ContractService;


class ContractController
{
    private $request;
    private $contractService;

    /**
     * ContractController constructor.
     * @param Contract $contract
     * @param RequestStack $request
     */
    public function __construct(ContractService $contractService, RequestStack $request)
    {
        $this->contractService = $contractService;
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
    public function __invoke(Contract $data): Contract
    {
        $method = $this->request->getCurrentRequest()->getMethod();
        $parser = new RequestContextParser($this->request);
        $accessories = $parser->getRequestValue('accessories');
        $accessories_array = array();

        if ($accessories) {
            $accessories_array = array_map(function ($accessories) {
                return get_object_vars($accessories);
            }, $accessories);
        }

        if ($method == "POST") {
            $this->contractService->saveContract($data, $accessories_array);
        } /*else {
            $this->contractService->updateVehicle($data, $accessories_array);
        }*/

        return $data;
    }
}