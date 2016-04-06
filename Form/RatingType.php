<?php

namespace blackknight467\StarRatingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class RatingType extends AbstractType
{

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars = array_replace($view->vars, [
            'stars' => $options['stars']
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'attr' => [
                'class' => 'rating',
            ],
            'scale' => 1,
            'stars' => 5,
        ]);
    }

    public function getParent()
    {
        return NumberType::class;
    }

    public function getName()
    {
        return 'rating';
    }
}