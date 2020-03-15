<?php

namespace App\Repository;

use App\Entity\Contract;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Contract|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contract|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contract[]    findAll()
 * @method Contract[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContractRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contract::class);
    }

    public function constructSelectFieldsFromArray(string $alias, array $fields): string
    {
        $attrs = '';
        $lastPosition = count($fields) - 1;
        foreach ($fields as $key => $attr) {
            $attrs .= $alias . '.' . $attr;
            if ($key < $lastPosition) {
                $attrs .= ',';
            }
        }
        return $attrs;
    }

    public function findContractByOrParams(array $params, array $selectFields, array $pagination)
    {
        $attrs = $this->constructSelectFieldsFromArray('c', $selectFields);
        $qb = $this->createQueryBuilder('c')
            ->setFirstResult($pagination['first'])
            ->setMaxResults($pagination['results']);
        $qb->select($attrs);
        foreach ($params as $key => $param) {
            $qb->setParameter($key, '%' . $param . '%');
            $qb->orWhere("c." . $key . " like :" . $key);
        }

        return $qb->getQuery()->getResult();/*$qb->where(
            $qb->expr()->orX(
            $qb->expr()->eq('v.registration', '?1'),
            $qb->expr()->like('v.frame', '?2')
        ))*/
    }

    // /**
    //  * @return Contract[] Returns an array of Contract objects
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
    public function findOneBySomeField($value): ?Contract
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
