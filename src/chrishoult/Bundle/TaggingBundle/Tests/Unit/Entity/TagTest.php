<?php

namespace chrishoult\Bundle\TaggingBundle\Tests\Unit\Entity;

use \chrishoult\Bundle\TaggingBundle\Entity\Tag;
use \chrishoult\Tests\TestCase;

/**
 * @covers \chrishoult\Bundle\TaggingBundle\Entity\Tag
 */
class TagTest extends TestCase
{

    /**
     * {@inheritdoc}
     * @return \chrishoult\Bundle\TaggingBundle\Entity\Tag
     */
    public function getObject()
    {
        return new Tag();
    }

    /**
     * {@inheritdoc}
     * @return array
     */
    public function getterSetterProvider()
    {
        return array(
            array('name', 'test name'),
            array('id', 123),
        );
    }
}