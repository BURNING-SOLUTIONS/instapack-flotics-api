<?php

namespace App\Repository;

use App\Entity\Authorizations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Authorizations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Authorizations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Authorizations[]    findAll()
 * @method Authorizations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuthorizationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Authorizations::class);
    }

    // /**
    //  * @return Authorizations[] Returns an array of Authorizations objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Authorizations
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
