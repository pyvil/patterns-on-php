<?php
namespace Pattern\FactoryMethod;

use Pattern\FactoryMethod;
use Pattern\FactoryMethod\Unit;

/**
 * Class FactoryMethod
 *
 * @package Pattern\FactoryMethod
 */
class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Data factories
     *
     * @return array
     */
    public function getFactories()
    {
        return array(
            array(new Unit\Footman()),
            array(new Unit\Transport()),
            array(new Unit\Weaponry()),
        );
    }

    /**
     * @param UnitInterface $factory
     *
     * @dataProvider getFactories
     */
    public function testInstances(UnitInterface $factory)
    {
        $arr = array(
            $factory->create()
        );

        $this->assertContainsOnlyInstancesOf('Pattern\FactoryMethod\UnitInterface', $arr);
    }
}
