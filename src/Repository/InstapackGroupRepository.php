<?php

namespace App\Repository;

use App\Entity\InstapackGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method InstapackGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method InstapackGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method InstapackGroup[]    findAll()
 * @method InstapackGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InstapackGroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InstapackGroup::class);
    }

    // /**
    //  * @return InstapackGroup[] Returns an array of InstapackGroup objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InstapackGroup
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
