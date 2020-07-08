<?php


namespace App\Controller;

use ApiPlatform\Core\Hydra\Serializer\CollectionFiltersNormalizer;
use Dhl\Dhl_Entity\Clientes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Utils\RequestContextParser;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\DhlClientService;

class clientController extends AbstractController
{
    private $request;
    private $dhlClientService;

    /**
     * @param RequestStack $request
     */
    public function __construct(RequestStack $request, DhlClientService $dhlClientService)
    {
        $this->request = $request;
        $this->dhlClientService = $dhlClientService;
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
    {
        $parser = new RequestContextParser($this->request);
        ['nomCli' => $nomCli] = $this->request->getCurrentRequest()->query->all();
        //personal filter
        $parameters = array('nomCli' => $nomCli, 'codCli' => $nomCli);
        $clients = $this->dhlClientService->getClientsByOrParams($parameters);
        $response = array("@context" => "/api/contexts/Clientes", "@id" => "/api/clientes", "@type" => "hydra:Collection", "hydra:member" => $clients);
        return new JsonResponse($response, Response::HTTP_OK);
    }

}