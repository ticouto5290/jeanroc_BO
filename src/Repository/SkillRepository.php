<?php

namespace App\Repository;

use App\Entity\Skill;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Skill>
 *
 * @method Skill|null find($id, $lockMode = null, $lockVersion = null)
 * @method Skill|null findOneBy(array $criteria, array $orderBy = null)
 * @method Skill[]    findAll()
 * @method Skill[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SkillRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Skill::class);
    }

    
    public function findSkillsForChoiceField(): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.label = 0')
            ->select('s.id, s.Name')
            ->getQuery()
            ->getResult();
    }

    public function findSkillNameByID($value)
       {
            try {
                return $this->createQueryBuilder('s')
                    ->select('s.Name')
                    ->andWhere('s.id = :val')
                    ->setParameter('val', $value)
                    ->getQuery()
                    ->getSingleScalarResult(); // This returns a single scalar value
            } catch (\Doctrine\ORM\NoResultException $e) {
                // Handle the case where no result is found
                return null;
            } catch (\Doctrine\ORM\NonUniqueResultException $e) {
                // Handle the case where the result is not unique
                return null;
            }
       }

        public function findSectionsWithSubsections(): array
        {
            $qb = $this->createQueryBuilder('s')
                ->andWhere('s.label = 1')
                ->andWhere('s.parent IS NULL') // Assuming 'parent' is null for top-level sections
                ->getQuery();

            return $qb->getResult();
        }


}
