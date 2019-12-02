<?php

namespace App\Repository;

use App\Entity\LivreOr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LivreOr|null find($id, $lockMode = null, $lockVersion = null)
 * @method LivreOr|null findOneBy(array $criteria, array $orderBy = null)
 * @method LivreOr[]    findAll()
 * @method LivreOr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LivreOrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LivreOr::class);
    }

    // /**
    //  * @return LivreOr[] Returns an array of LivreOr objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LivreOr
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
