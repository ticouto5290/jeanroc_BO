<?php

namespace App\Repository;

use App\Entity\Freelancer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Freelancer>
 *
 * @method Freelancer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Freelancer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Freelancer[]    findAll()
 * @method Freelancer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FreelancerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Freelancer::class);
    }

    /**
     * @return Freelancer[] Returns an array of Freelancer objects
     */
    public function findAllActiveFreelancers(): array
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.status = :status')
            ->setParameter('status', 1)
            ->orderBy('f.id', 'ASC')
            ->getQuery()
            ->getResult();
    }


}
