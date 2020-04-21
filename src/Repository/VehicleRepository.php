<?php

namespace App\Repository;

use App\Entity\Vehicle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @method Vehicle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vehicle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vehicle[]    findAll()
 * @method Vehicle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehicleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vehicle::class);
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


    public function findVehicleByOrParams(array $params, array $selectFields, array $pagination)
    {
        $attrs = $this->constructSelectFieldsFromArray('v', $selectFields);
        $qb = $this->createQueryBuilder('v')
            ->setFirstResult($pagination['first'])
            ->setMaxResults($pagination['results']);
        $qb->select($attrs);
        foreach ($params as $key => $param) {
            $qb->setParameter($key, '%' . $param . '%');
            $qb->orWhere("v." . $key . " like :" . $key);
        }

        return $qb->getQuery()->getResult();/*$qb->where(
            $qb->expr()->orX(
            $qb->expr()->eq('v.registration', '?1'),
            $qb->expr()->like('v.frame', '?2')
        ))*/
    }

    // /**
    //  * @return Vehicle[] Returns an array of Vehicle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Vehicle
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */



    public function persistVehicle(Vehicle $app): void
    {
        $this->_em->persist($app);
        $this->_em->flush();
    }
}
