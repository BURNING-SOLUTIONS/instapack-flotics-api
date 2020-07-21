<?php


namespace App\Controller;

use ApiPlatform\Core\Hydra\Serializer\CollectionFiltersNormalizer;
use App\Service\DhlClientService;
use Dhl\Dhl_Entity\Mensajeros;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Utils\RequestContextParser;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\DlMessengerService;

class MessengerController
{

    private $request;
    private $dlMessengerService;

    /**
     * @param RequestStack $request
     */
    public function __construct(RequestStack $request, DlMessengerService $dlMessengerService)
    {
        $this->request = $request;
        $this->dlMessengerService = $dlMessengerService;
    }

    /**
     * @return array
     * In custom controllers By Api-Platform, The __invoke method of the action is called when the matching route is hit.
     * It can return either an instance of Symfony\Component\HttpFoundation\Response (that will be displayed to the client
     * immediately by the Symfony kernel) or, like in this example, an instance of an entity mapped as a resource
     * (or a collection of instances for collection operations). In this case, the entity will pass through all built-in event
     * listeners of API Platform. It will be automatically validated, persisted and serialized in JSON-LD. Then the Symfony kernel
     * will send the resulting document to the client.
     *
     */
    public function __invoke($data): Response
    {   //array('codMen', 'nomMen', 'empMen')
        $parser = new RequestContextParser($this->request);
        ['nomMen' => $nomMen] = $this->request->getCurrentRequest()->query->all();
        //personal filter
        $parameters = array('nomMen' => $nomMen, 'codMen' => $nomMen);
        $messengers = $this->dlMessengerService->getMessengersByOrParams($parameters);
        $response = array("@context" => "/api/contexts/Mensajeros", "@id" => "/api/mensajeros", "@type" => "hydra:Collection", "hydra:member" => $messengers);

        return new JsonResponse($response, Response::HTTP_OK);
    }
}