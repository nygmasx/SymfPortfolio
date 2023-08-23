<?php

namespace App\Repository;

use App\Entity\ImageProjet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImageProjet>
 *
 * @method ImageProjet|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageProjet|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageProjet[]    findAll()
 * @method ImageProjet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageProjetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageProjet::class);
    }

//    /**
//     * @return ImageProjet[] Returns an array of ImageProjet objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ImageProjet
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
