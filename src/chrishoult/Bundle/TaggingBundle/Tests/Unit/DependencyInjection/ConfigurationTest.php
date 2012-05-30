<?php

namespace chrishoult\Bundle\TaggingBundle\Tests\Unit\DependencyInjection;

use \chrishoult\Bundle\TaggingBundle\DependencyInjection\Configuration;

/**
 * @covers \chrishoult\Bundle\TaggingBundle\DependencyInjection\Configuration
 */
class ConfigurationTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers \chrishoult\Bundle\TaggingBundle\DependencyInjection\Configuration::getConfigTreeBuilder
     */
    public function testGetConfigTreeBuilder()
    {
        $config = new Configuration();
        $obj = $config->getConfigTreeBuilder();
        $this->assertInstanceOf('Symfony\Component\Config\Definition\Builder\TreeBuilder', $obj);
    }

}