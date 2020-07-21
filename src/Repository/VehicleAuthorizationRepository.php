<?php

namespace App\Repository;

use App\Entity\EquipmentVehicle;
use App\Entity\VehicleAuthorization;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method VehicleAuthorization|null find($id, $lockMode = null, $lockVersion = null)
 * @method VehicleAuthorization|null findOneBy(array $criteria, array $orderBy = null)
 * @method VehicleAuthorization[]    findAll()
 * @method VehicleAuthorization[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehicleAuthorizationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VehicleAuthorization::class);
    }

    public function persistVehicleAuthorization(VehicleAuthorization $vehicleAuthorization): void
    {
        $this->_em->persist($vehicleAuthorization);
        $this->_em->flush();
    }

    public function removeVehicleAuthorization(VehicleAuthorization $vehicleAuthorization): void
    {
        $this->_em->remove($vehicleAuthorization);
        $this->_em->flush();
    }

    // /**
    //  * @return VehicleAuthorization[] Returns an array of VehicleAuthorization objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VehicleAuthorization
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
