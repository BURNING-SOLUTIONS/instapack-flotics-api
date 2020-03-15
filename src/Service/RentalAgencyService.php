<?php

namespace App\Service;

use App\Entity\RentalAgency;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class RentalAgencyService
{
    private $dbManager;
    private $validator;
    private $rentalAgencyRepository;

    /**
     * UserService constructor.
     * @param EntityManagerInterface $manager
     * @param ValidatorInterface $validator
     */
    public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator)
    {
        $this->dbManager = $manager;
        $this->validator = $validator;
        $this->rentalAgencyRepository = $this->dbManager->getRepository(RentalAgency::class);
    }

    /**
     * @param array $params
     * @param string $strategy
     * @return array
     */
    public function getRentalAgencyByParams(array $params, string $strategy = 'findBy'): RentalAgency
    {
        $application = $this->rentalAgencyRepository->{$strategy}($params);
        if (!$application) {
            throw new NotFoundHttpException();
        }
        return $application;
    }

    /**
     * @param array $params
     */
    public function getRentalAgencyByOrParams(array $params, array $pagination = array('first' => 0, 'results' => 40))
    {
        return $this->rentalAgencyRepository->findRentalAgencyByOrParams($params, array('id', 'name', 'code', 'cif'), $pagination);
    }
}