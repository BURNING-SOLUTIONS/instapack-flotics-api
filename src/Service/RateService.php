<?php


namespace App\Service;


use App\Entity\Rates;
use App\Entity\RentalAgency;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RateService
{

    private $dbManager;
    private $validator;
    private $ratesRepository;

    /**
     * UserService constructor.
     * @param EntityManagerInterface $manager
     * @param ValidatorInterface $validator
     */
    public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator)
    {
        $this->dbManager = $manager;
        $this->validator = $validator;
        $this->ratesRepository = $this->dbManager->getRepository(Rates::class);
    }

    /**
     * @param array $params
     * @param string $strategy
     * @return array
     */
    public function getRatesByParams(array $params, string $strategy = 'findBy'): Rates
    {
        $application = $this->ratesRepository->{$strategy}($params);
        if (!$application) {
            throw new NotFoundHttpException();
        }
        return $application;
    }

    public function saveRate(Rates $rate): Rates
    {
        $this->ratesRepository->persistRate($rate);

        return $rate;
    }

}