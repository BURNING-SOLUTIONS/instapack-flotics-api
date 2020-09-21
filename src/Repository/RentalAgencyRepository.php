<?php

namespace App\Repository;

use App\Entity\RentalAgency;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RentalAgency|null find($id, $lockMode = null, $lockVersion = null)
 * @method RentalAgency|null findOneBy(array $criteria, array $orderBy = null)
 * @method RentalAgency[]    findAll()
 * @method RentalAgency[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RentalAgencyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RentalAgency::class);
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

    public function findRentalAgencyByOrParams(array $params, array $selectFields, array $pagination)
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

    public function persistRentalAgency(RentalAgency $rentalAgency): void
    {
        $this->_em->persist($rentalAgency);
        $this->_em->flush();
    }

    public function removeRentalAgency(RentalAgency $rentalAgency): void
    {
        $this->_em->remove($rentalAgency);
        $this->_em->flush();
    }

    // /**
    //  * @return RentalAgency[] Returns an array of RentalAgency objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RentalAgency
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
