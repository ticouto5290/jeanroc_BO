<?php

namespace App\Controller\Admin;

use App\Entity\Freelancer;

use App\Entity\Skill;

use App\Repository\SkillRepository;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;

use Doctrine\ORM\EntityManagerInterface;


class FreelancerCrudController extends AbstractCrudController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;

    }

    public static function getEntityFqcn(): string
    {
        return Freelancer::class;
    }
   
    public function createEntity(string $entityFqcn)
    {
        $freelancer = new Freelancer();
        $freelancer->setCreatedAt(new \DateTime());
        $freelancer->setUpdatedAt(new \DateTime());

        return $freelancer;
    }
     
    public function configureFields(string $pageName): iterable
    {
        $skillRepository = $this->entityManager->getRepository(Skill::class);
        $skills = $skillRepository->findSkillsForChoiceField();

        // Transform the skills into the expected format for ChoiceField
        $skillChoices = [];

        foreach ($skills as $skill_key => $skill) {
            $skillChoices[$skill['Name']] = $skill['id'];
        }

        return [
            TextField::new('Name'),
            TextField::new('Last_name'),
            EmailField::new('Email'),
            NumberField::new('status'),
            ChoiceField::new('skills')
                ->setLabel('Skills')
                ->setChoices($skillChoices)
                ->allowMultipleChoices()
                ->setFormTypeOptions([
                    'multiple' => true, // Enable multiple selection
                    'expanded' => false, // Set to true if you prefer checkboxes over a select dropdown
                ]),
                
            TextField::new('Files')->hideOnIndex(),  
            TextEditorField::new('Description'),
            DateTimeField::new('Updated_at')->setFormTypeOptions(['disabled' => true])->onlyOnForms(),
            DateTimeField::new('Created_at')->setFormTypeOptions(['disabled' => true])->onlyOnForms()
        ];
    }
    
    
}
