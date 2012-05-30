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
            array('name', 'test name 2'),
            array('id', 123),
            array('lft', 123),
            array('rgt', 123),
            array('lvl', 123),
            array('parent', $this->getObject()),
        );
    }
}