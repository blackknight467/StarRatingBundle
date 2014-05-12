<?php

namespace blackknight467\StarRatingBundle\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RatingType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'expanded' => true,
            'choices' => array(1 => '1 star', 2 => '2 stars', 3 => '3 stars', 4 => '4 stars', 5 => '5 stars')
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