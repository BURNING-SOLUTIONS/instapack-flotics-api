<?php

namespace App\Repository;

use App\Entity\VehicleHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method VehicleHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method VehicleHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method VehicleHistory[]    findAll()
 * @method VehicleHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehicleHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VehicleHistory::class);
    }

    public function persistVehicleHistory(VehicleHistory $vehicleHistory): void
    {
        $this->_em->persist($vehicleHistory);
        $this->_em->flush();
    }

    // /**
    //  * @return VehicleHistory[] Returns an array of VehicleHistory objects
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
    public function findOneBySomeField($value): ?VehicleHistory
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
