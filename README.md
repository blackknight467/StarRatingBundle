StarRatingBundle
================

Star Rating Bundle for Symfony 2.  Requires Jquery and Font Awesome.

Sample Output
=============

![alt tag](http://images.trifecktasoftware.com/profile/test/StarRating.png)

Installation
============

### Step 1: Download the StarRatingBundle

***Using Composer***

Add the following to the "require" section of your `composer.json` file:

```
    "blackknight467/star-rating-bundle": "1.*"
```

### Step 2: Enable the bundle

Enable the bundle in the kernel:

```php
<?php
// app/appKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new blackknight467\StarRatingBundle\StarRatingBundle(),
    );
}
```

### Step 3: Add the css

Add the css in your page head

```
  <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/rating.css') }}" />
```

or 

```
	{% stylesheets
      'bundles/starrating/css/rating.css'
      filter="cssrewrite" %}
      <link href="{{ asset_url }}" rel="stylesheet" type="text/css" />
    {% endstylesheets %}
```

### Step 4: Add the js

Add the javascript to your page head

```
    <!-- make sure that jquery is included --!>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	{% javascripts
      '@StarRatingBundle/Resources/public/js/rating.js' %}
      <script src="{{ asset_url }}"></script>
    {% endjavascripts %}
```

Usage
=====

###In a Form

```php
<?php
    // ...
    $builder->add('rating', 'rating', array(
    	'label' => 'Rating'
    ));
    // ...
```
or for a custom rating scale:
```php
<?php
    // ...
    $builder->add('rating', 'rating', array(
    	//...
    	'stars' => 4,
    	//...
    ));
    // ...
```

###Display in a twig template using the rating filter
```
    // ...
    {{ someInteger|rating|raw }}
    // ...
```

or if you are not using a 5 star scale
```
{{ someInteger|rating(4)|raw }}
```

License
=======
This bundle is under the MIT license. See the complete license in the bundle:
    LICENSE