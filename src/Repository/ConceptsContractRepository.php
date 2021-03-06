<?php

namespace App\Repository;

use App\Entity\ConceptsContract;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ConceptsContract|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConceptsContract|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConceptsContract[]    findAll()
 * @method ConceptsContract[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConceptsContractRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConceptsContract::class);
    }

    // /**
    //  * @return ConceptsContract[] Returns an array of ConceptsContract objects
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
    public function findOneBySomeField($value): ?ConceptsContract
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
