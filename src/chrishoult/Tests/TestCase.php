<?php

namespace chrishoult\Tests;

// @codeCoverageIgnoreStart
abstract class TestCase extends \PHPUnit_Framework_TestCase
{

    /**
     * DataProvider for testGetterSetter
     * 
     * @return array
     */
    abstract public function getterSetterProvider();
    
    /**
     * Gets the object for this TestCase
     * 
     * @return mixed
     */
    abstract public function getObject();

    /**
     * @dataProvider getterSetterProvider
     * 
     * @param type $property
     * @param type $input
     * @param type $output
     * @param type $expectedException
     * @param string $getter
     * @param string $setter @
     */
    public function testGetterSetter($property, $input, $copyInput = true, $output = null, $expectedException = false, $getter = null, $setter = null)
    {
        if ($expectedException)
        {
            $this->setExpectedException($expectedException);
        }

        if (!$getter)
        {
            $getter = 'get' . ucwords($property);
        }

        if (!$setter)
        {
            $setter = 'set' . ucwords($property);
        }

        if ($copyInput)
        {
            $output = $input;
        }

        $object = $this->getObject();
        $object->$setter($input);
        $value = $object->$getter();
        $this->assertEquals($output, $value);
    }
}
// @codeCoverageIgnoreEnd