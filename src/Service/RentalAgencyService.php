<?php

namespace App\Service;

use ApiPlatform\Core\Api\IriConverterInterface;
use App\Entity\Concepts;
use App\Entity\Rates;
use App\Entity\RentalAgency;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Service\RateService;


class RentalAgencyService
{
    private $dbManager;
    private $validator;
    private $rentalAgencyRepository;
    private $iriConverterInterface;
    private $rateService;

    /**
     * UserService constructor.
     * @param EntityManagerInterface $manager
     * @param ValidatorInterface $validator
     */
    public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator, IriConverterInterface $iriConverterInterface, RateService $rateService)
    {
        $this->dbManager = $manager;
        $this->validator = $validator;
        $this->rentalAgencyRepository = $this->dbManager->getRepository(RentalAgency::class);
        $this->iriConverterInterface = $iriConverterInterface;
        $this->rateService = $rateService;
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

    public function saveRentalAgencyRates(RentalAgency $rentalAgency, $rates_array = array()): void
    {
        if ($rates_array) {
            foreach ($rates_array as $key => $rate) {
                $name = $rate['name'];
                foreach ($rate as $index => $rateType) {
                    if (is_array($rateType)) {
                        $newRate = new Rates();
                        $concept_iri = $rateType['concept'];
                        $price = $rateType['price'];
                        $startDays = $rateType['start_days'] ?? null;
                        $endDays = $rateType['end_days'] ?? null;
                        $concept = $this->iriConverterInterface->getItemFromIri($concept_iri);

                        if ($concept instanceof Concepts) {
                            $newRate
                                ->setName($name)
                                ->setConcept($concept)
                                ->setAgency($rentalAgency)
                                ->setValue($price)
                                ->setStartDay($startDays)
                                ->setEndDay($endDays);

                            $this->rateService->saveRate($newRate);
                            $rentalAgency->addRate($newRate);
                        }
                    }
                }
            }

            $this->rentalAgencyRepository->persistRentalAgency($rentalAgency);
        }
    }

    public function updateRentalAgencyRates(RentalAgency $rentalAgency, $rates_array = array()): void
    {
        if ($rates_array) {
            foreach ($rates_array as $key => $rate) {
                $name = $rate['name'];
                foreach ($rate as $index => $rateType) {
                    if (is_array($rateType)) {
                        $existent_rate_iri = $rateType['@id'] ?? null;
                        $rate = !$existent_rate_iri
                            ? new Rates()
                            : $this->iriConverterInterface->getItemFromIri($existent_rate_iri);
                        $concept_iri = $rateType['concept'];
                        $price = $rateType['price'];
                        $startDays = $rateType['start_days'] ?? null;
                        $endDays = $rateType['end_days'] ?? null;
                        $concept = $this->iriConverterInterface->getItemFromIri($concept_iri);
                        if ($concept instanceof Concepts) {
                            $rate
                                ->setName($name)
                                ->setConcept($concept)
                                ->setAgency($rentalAgency)
                                ->setValue($price)
                                ->setStartDay($startDays)
                                ->setEndDay($endDays);

                            $this->rateService->saveRate($rate);
                            if (!$existent_rate_iri) {
                                $rentalAgency->addRate($rate);
                            }
                            continue;
                        }
                    }
                }
            }

            $this->rentalAgencyRepository->persistRentalAgency($rentalAgency);
        }
    }

    public function saveRentalAgency(RentalAgency $rentalAgency, $rates_array = array()): void
    {
        $errors = $this->validator->validate($rentalAgency);
        if (!count($errors) > 0) {
            $this->dbManager->beginTransaction();
            try {
                $this->rentalAgencyRepository->persistRentalAgency($rentalAgency);
                $this->saveRentalAgencyRates($rentalAgency, $rates_array);
                $this->dbManager->commit();
            } catch (\Exception $e) {
                $this->dbManager->rollback();
                throw new \Exception($e->getMessage());
            }
        }
    }

    public function updateRentalAgency(RentalAgency $rentalAgency, $rates_array = array()): void
    {
        $errors = $this->validator->validate($rentalAgency);
        if (!count($errors) > 0) {
            $this->dbManager->beginTransaction();
            try {
                $this->rentalAgencyRepository->persistRentalAgency($rentalAgency);
                $this->updateRentalAgencyRates($rentalAgency, $rates_array);
                $this->dbManager->commit();
            } catch (\Exception $e) {
                $this->dbManager->rollback();
                throw new \Exception($e->getMessage());
            }
        }
    }
}