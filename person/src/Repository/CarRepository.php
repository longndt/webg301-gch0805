<?php

namespace App\Repository;

use App\Entity\Car;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Car|null find($id, $lockMode = null, $lockVersion = null)
 * @method Car|null findOneBy(array $criteria, array $orderBy = null)
 * @method Car[]    findAll()
 * @method Car[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Car::class);
    }

    /**
     * @return Car[]
     */ 
    public function sortPriceAsc() {
        return $this->createQueryBuilder('c')
                    ->orderBy('c.price', 'ASC')
                    ->getQuery()
                    ->getResult()
        ;
    }

    /**
     * @return Car[]
     */ 
    public function sortPriceDesc() {
        return $this->createQueryBuilder('c')
                    ->orderBy('c.price', 'DESC')
                    ->getQuery()
                    ->getResult()
        ;
    }

    /**
     * @return Car[]
     */
    public function searchCar($keyword) {
        return $this->createQueryBuilder('c')
                    ->andWhere('c.name LIKE :keyword')
                    ->orWhere('c.brand LIKE :keyword')
                    ->setParameter('keyword','%' . $keyword . '%')
                    ->orderBy('c.price', 'DESC')
                    ->setMaxResults(3)
                    ->getQuery()
                    ->getResult()
                    ;
    }

    /**
     * @return Car[]
     */
    public function filterCar($min, $max) {
        return $this->createQueryBuilder('c')
                    ->andWhere('c.price >= :start')
                    ->andWhere('c.price <= :end')
                    ->setParameters(['start' => $min, 
                                     'end' => $max])
                    ->orderBy('c.price', 'ASC')
                    ->setMaxResults(5)
                    ->getQuery()
                    ->getResult();
    }
}
