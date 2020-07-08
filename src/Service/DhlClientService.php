<?php


namespace App\Service;

use ApiPlatform\Core\Api\IriConverterInterface;
use Dhl\Dhl_Entity\Clientes;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ManagerRegistry;

class DhlClientService
{

    private $managerRegistry;
    private $clientsRepository;

    /**
     * UserService constructor.
     * @param ManagerRegistry $manager
     */
    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
        $this->clientsRepository = $this->managerRegistry->getManager('dhl')->getRepository(Clientes::class);
    }

    /**
     * @param array $params
     * @param string $strategy
     * @return array
     */
    public function getClientsByParams(array $params, string $strategy = 'findBy'): Clientes
    {
        $client = $this->clientsRepository->{$strategy}($params);
        if (!$client) {
            throw new NotFoundHttpException();
        }
        return $client;
    }

    /**
     * @param array $params
     */
    public function getClientsByOrParams(array $params, array $pagination = array('first' => 0, 'results' => 100))
    {
        $retrieveFields = array('codCli', 'nomCli', 'sucursalCli', 'empCli', 'depCli');
        return $this->clientsRepository->findClientsByOrParams($params, $retrieveFields, $pagination);
    }

}