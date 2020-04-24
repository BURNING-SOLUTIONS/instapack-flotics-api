<?php

namespace App\Repository;

use App\Entity\EquipmentVehicle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EquipmentVehicle|null find($id, $lockMode = null, $lockVersion = null)
 * @method EquipmentVehicle|null findOneBy(array $criteria, array $orderBy = null)
 * @method EquipmentVehicle[]    findAll()
 * @method EquipmentVehicle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EquipmentVehicleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EquipmentVehicle::class);
    }

    public function persistEquipmentVehicle(EquipmentVehicle $equipmentVehicle): void
    {
        $this->_em->persist($equipmentVehicle);
        $this->_em->flush();
    }

    public function removeEquipmentVehicle(EquipmentVehicle $equipmentVehicle): void
    {
        $this->_em->remove($equipmentVehicle);
        $this->_em->flush();
    }

    // /**
    //  * @return EquipmentVehicle[] Returns an array of EquipmentVehicle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EquipmentVehicle
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
