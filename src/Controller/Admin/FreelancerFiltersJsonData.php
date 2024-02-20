<?php

namespace App\Controller\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FreelancerFiltersJsonData extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $jsonData = json_decode($options['json_data'], true);

        foreach ($jsonData['filters'] as $filter) {
            foreach ($filter['subsections'] as $subsection) {
                $builder->add($this->sanitizedName($subsection['name']), ChoiceType::class, [
                    'choices' => array_combine($subsection['options'], $subsection['options']),
                    'expanded' => true, // Render as checkboxes
                    'multiple' => true, // Allow multiple selections
                    'label' => $subsection['name'],
                ]);
            }
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'json_data' => '{}', // Default empty JSON
        ]);
    }

    private function sanitizedName($name)
    {
        return preg_replace('/[^a-zA-Z0-9_]/', '_', strtolower($name));
    }
}
