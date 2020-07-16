<?php


namespace App\Service;

use ApiPlatform\Core\Api\IriConverterInterface;
use Dhl\Dhl_Entity\Clientes;
use Dhl\Dhl_Entity\Mensajeros;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ManagerRegistry;


class DlMessengerService
{
    private $managerRegistry;
    private $messengerRepository;

    /**
     * UserService constructor.
     * @param ManagerRegistry $manager
     */
    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
        $this->messengerRepository = $this->managerRegistry->getManager('dhl')->getRepository(Mensajeros::class);
    }

    /**
     * @param array $params
     * @param string $strategy
     * @return array
     */
    public function getMessengerByParams(array $params, string $strategy = 'findBy'): Mensajeros
    {
        $messenger = $this->messengerRepository->{$strategy}($params);
        if (!$messenger) {
            throw new NotFoundHttpException();
        }
        return $messenger;
    }

    /**
     * @param array $params
     */
    public function getMessengersByOrParams(array $params, array $pagination = array('first' => 0, 'results' => 100))
    {
        $retrieveFields = array('codMen', 'nomMen', 'empMen');
        return $this->messengerRepository->findMessengersByOrParams($params, $retrieveFields, $pagination);
    }


}