<?php

namespace App\Repository;

use App\Entity\VehicleWorkshopBill;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VehicleWorkshopBill|null find($id, $lockMode = null, $lockVersion = null)
 * @method VehicleWorkshopBill|null findOneBy(array $criteria, array $orderBy = null)
 * @method VehicleWorkshopBill[]    findAll()
 * @method VehicleWorkshopBill[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehicleWorkshopBillRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VehicleWorkshopBill::class);
    }

    // /**
    //  * @return VehicleWorkshopBill[] Returns an array of VehicleWorkshopBill objects
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
    public function findOneBySomeField($value): ?VehicleWorkshopBill
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
