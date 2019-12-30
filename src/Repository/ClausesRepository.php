<?php

namespace App\Repository;

use App\Entity\Clauses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Clauses|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clauses|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clauses[]    findAll()
 * @method Clauses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClausesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Clauses::class);
    }

    // /**
    //  * @return Clauses[] Returns an array of Clauses objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Clauses
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
