<?php

namespace App\Service;

use App\Entity\Contract;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class ContractService
{
    private $dbManager;
    private $validator;
    private $contractRepository;

    /**
     * UserService constructor.
     * @param EntityManagerInterface $manager
     * @param ValidatorInterface $validator
     */
    public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator)
    {
        $this->dbManager = $manager;
        $this->validator = $validator;
        $this->contractRepository = $this->dbManager->getRepository(Contract::class);
    }

    /**
     * @param array $params
     * @param string $strategy
     * @return array
     */
    public function getContractByParams(array $params, string $strategy = 'findBy'): Contract
    {
        $application = $this->contractRepository->{$strategy}($params);
        if (!$application) {
            throw new NotFoundHttpException();
        }
        return $application;
    }

    /**
     * @param array $params
     */
    public function getContractByOrParams(array $params, array $pagination = array('first' => 0, 'results' => 40))
    {
        return $this->contractRepository->findContractByOrParams($params, array('id', 'number'), $pagination);
    }
}