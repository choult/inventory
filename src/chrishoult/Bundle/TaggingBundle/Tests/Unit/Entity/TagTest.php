<?php

namespace chrishoult\Bundle\TaggingBundle\Tests\Unit\Entity;

use \chrishoult\Bundle\TaggingBundle\Entity\Tag;
use \chrishoult\Tests\TestCase;

class TagTest extends TestCase
{

    public function getObject()
    {
        return new Tag();
    }

    public function getterSetterProvider()
    {
        return array(
            array('name', 'test name'),
            array('id', 123),
        );
    }
}