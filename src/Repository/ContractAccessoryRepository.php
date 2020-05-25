<?php

namespace App\Repository;

use App\Entity\ContractAccessory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ContractAccessory|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContractAccessory|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContractAccessory[]    findAll()
 * @method ContractAccessory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContractAccessoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContractAccessory::class);
    }

    public function persistContractAccessory(ContractAccessory $contractAccessory): void
    {
        $this->_em->persist($contractAccessory);
        $this->_em->flush();
    }

    // /**
    //  * @return ContractAccessory[] Returns an array of ContractAccessory objects
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
    public function findOneBySomeField($value): ?ContractAccessory
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
