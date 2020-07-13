<?php

namespace App\Repository;

use App\Entity\WorkshopRevisionType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WorkshopRevisionType|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkshopRevisionType|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkshopRevisionType[]    findAll()
 * @method WorkshopRevisionType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkshopRevisionTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkshopRevisionType::class);
    }

    // /**
    //  * @return WorkshopRevisionType[] Returns an array of WorkshopRevisionType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WorkshopRevisionType
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
