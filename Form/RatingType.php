<?php

namespace blackknight467\StarRatingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class RatingType extends AbstractType
{

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars = array_replace($view->vars, array(
            'stars' => $options['stars']
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'attr' => array(
                'class' => 'rating',
            ),
            'precision' => 1,
            'stars' => 5,
        ));
    }

    public function getParent()
    {
        return 'number';
    }

    public function getName()
    {
        return 'rating';
    }
}