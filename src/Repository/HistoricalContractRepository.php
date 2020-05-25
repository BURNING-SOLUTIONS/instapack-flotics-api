<?php

namespace App\Repository;

use App\Entity\HistoricalContract;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method HistoricalContract|null find($id, $lockMode = null, $lockVersion = null)
 * @method HistoricalContract|null findOneBy(array $criteria, array $orderBy = null)
 * @method HistoricalContract[]    findAll()
 * @method HistoricalContract[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HistoricalContractRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HistoricalContract::class);
    }

    public function persistHistoricalContract(HistoricalContract $historicalContract): void
    {
        $this->_em->persist($historicalContract);
        $this->_em->flush();
    }

    // /**
    //  * @return HistoricalContract[] Returns an array of HistoricalContract objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HistoricalContract
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
