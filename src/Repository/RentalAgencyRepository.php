<?php

namespace App\Repository;

use App\Entity\RentalAgency;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RentalAgency|null find($id, $lockMode = null, $lockVersion = null)
 * @method RentalAgency|null findOneBy(array $criteria, array $orderBy = null)
 * @method RentalAgency[]    findAll()
 * @method RentalAgency[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RentalAgencyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RentalAgency::class);
    }

    // /**
    //  * @return RentalAgency[] Returns an array of RentalAgency objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RentalAgency
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
