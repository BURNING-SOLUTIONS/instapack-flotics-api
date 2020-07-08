<?php

namespace App\Repository;

use App\Entity\VehicleWorkshop;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VehicleWorkshop|null find($id, $lockMode = null, $lockVersion = null)
 * @method VehicleWorkshop|null findOneBy(array $criteria, array $orderBy = null)
 * @method VehicleWorkshop[]    findAll()
 * @method VehicleWorkshop[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehicleWorkshopRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VehicleWorkshop::class);
    }

    // /**
    //  * @return VehicleWorkshop[] Returns an array of VehicleWorkshop objects
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
    public function findOneBySomeField($value): ?VehicleWorkshop
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
