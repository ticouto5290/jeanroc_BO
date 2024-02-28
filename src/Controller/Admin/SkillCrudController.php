<?php

namespace App\Controller\Admin;

use App\Entity\Skill;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;

use Doctrine\ORM\EntityManagerInterface;

class SkillCrudController extends AbstractCrudController
{
    
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public static function getEntityFqcn(): string
    {
        return Skill::class;
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
            ChoiceField::new('parent')
                ->setLabel('Parent of the Skill')
                ->setChoices($skillChoices)
                ->allowMultipleChoices()
                ->setFormTypeOptions([
                    'multiple' => false, // Enable multiple selection
                    'expanded' => false, // Set to true if you prefer checkboxes over a select dropdown
                ]),
            BooleanField::new('label'),
        ];
    }
    
}
