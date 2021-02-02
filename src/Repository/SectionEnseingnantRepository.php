<?php

namespace App\Repository;

use App\Entity\SectionEnseingnant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SectionEnseingnant|null find($id, $lockMode = null, $lockVersion = null)
 * @method SectionEnseingnant|null findOneBy(array $criteria, array $orderBy = null)
 * @method SectionEnseingnant[]    findAll()
 * @method SectionEnseingnant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionEnseingnantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SectionEnseingnant::class);
    }

    // /**
    //  * @return SectionEnseingnant[] Returns an array of SectionEnseingnant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SectionEnseingnant
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
