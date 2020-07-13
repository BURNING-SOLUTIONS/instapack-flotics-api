<?php

namespace App\Repository;

use App\Entity\VehicleIncident;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VehicleIncident|null find($id, $lockMode = null, $lockVersion = null)
 * @method VehicleIncident|null findOneBy(array $criteria, array $orderBy = null)
 * @method VehicleIncident[]    findAll()
 * @method VehicleIncident[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehicleIncidentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VehicleIncident::class);
    }

    // /**
    //  * @return VehicleIncident[] Returns an array of VehicleIncident objects
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
    public function findOneBySomeField($value): ?VehicleIncident
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
