<?php

namespace blackknight467\StarRatingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RatingType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'attr' => array(
                'class' => 'rating',
            ),
            'expanded' => true,
            'choices' => array(5 => '5 stars',4 => '4 stars', 3 => '3 stars', 2 => '2 stars', 1 => '1 star')
        ));
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'rating';
    }
}