<?php

namespace blackknight467\StarRatingBundle\Extensions;

use Symfony\Component\DependencyInjection\ContainerInterface;

class StarRatingExtension extends \Twig_Extension
{

    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('rating', array($this, 'rating')),
        );
    }

    public function rating($number, $max = 5)
    {
    	return $this->container->get('templating')->render('StarRatingBundle:ratingDisplay.html.twig', array('stars' => $number,'max' => $max));
    }

    public function getName()
    {
        return 'star_rating_extension';
    }
}