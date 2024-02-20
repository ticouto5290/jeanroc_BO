<?php

namespace App\Controller\Admin;

use App\Entity\Freelancer;
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

use App\Form\Type\JsonMultiSelectType;
use App\Form\DataTransformer\ArrayToJsonTransformer;

use App\Service\ChoicesProvider;


class FreelancerCrudController extends AbstractCrudController
{
    private $choicesProvider;
    public function __construct(ChoicesProvider $choicesProvider)
    {
        $this->choicesProvider = $choicesProvider;
    }

    public static function getEntityFqcn(): string
    {
        return Freelancer::class;
    }

     
    public function configureFields(string $pageName): iterable
    {
        $choices = $this->choicesProvider->getChoices();

        $dataField = Field::new('Data')->hideOnIndex()
        ->setFormType(JsonMultiSelectType::class)
        ->setFormTypeOptions(['choices' => $choices])
        ->addJsFiles('js/admin/data-field.js') // Optional: Add custom JS if needed for dynamic behavior
        ->addCssFiles('css/admin/data-field.css'); // Optional: Add custom CSS

        // Attach the data transformer
        $dataField->setFormTypeOptions([
            'attr' => [
                'data-widget' => 'select2',
            ],
            'by_reference' => false,
        ]);
        $dataField->setCustomOption('dataTransformer', new ArrayToJsonTransformer());


        return [
            // IdField::new('ID'),
            TextField::new('Name'),
            TextField::new('Last_name'),
            EmailField::new('Email'),
            NumberField::new('status'),
            $dataField, 
            TextField::new('Files')->hideOnIndex(),  
            TextEditorField::new('Description'),
            DateTimeField::new('Updated_at')->setFormTypeOptions(['disabled' => true])->onlyOnForms(),
            DateTimeField::new('Created_at')->setFormTypeOptions(['disabled' => true])->onlyOnForms()
        ];
    }
    
    
}
