<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\DataTransformer\ArrayToJsonTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class JsonMultiSelectType extends AbstractType
{
    private $transformer;

    public function __construct(ArrayToJsonTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('data', ChoiceType::class, [
            'choices' => $options['choices'],
            'multiple' => true,
            'expanded' => false, // Set to false for a dropdown
        ]);

        $builder->get('data')
            ->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => [],
        ]);
    }
}
