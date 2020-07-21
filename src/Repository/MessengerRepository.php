<?php

namespace App\Repository;

use Dhl\Dhl_Entity\Mensajeros;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Mensajeros|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mensajeros|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mensajeros[]    findAll()
 * @method Mensajeros[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessengerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mensajeros::class);
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

    public function findMessengersByOrParams(array $params, array $selectFields, array $pagination)
    {
        $attrs = $this->constructSelectFieldsFromArray('r', $selectFields);
        $qb = $this->createQueryBuilder('r')
            ->setFirstResult($pagination['first'])
            ->setMaxResults($pagination['results']);
        $qb->select($attrs);
        foreach ($params as $key => $param) {
            $qb->setParameter($key, '%' . $param . '%');
            $qb->orWhere("r." . $key . " like :" . $key);
        }

        return $qb->getQuery()->getResult();/*$qb->where(
            $qb->expr()->orX(
            $qb->expr()->eq('v.registration', '?1'),
            $qb->expr()->like('v.frame', '?2')
        ))*/
    }

    // /**
    //  * @return Concepts[] Returns an array of Concepts objects
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
    public function findOneBySomeField($value): ?Concepts
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
