<?php

namespace Pattern\Builder\Test;

use Pattern\Builder\Unit;
use Pattern\Builder;

/**
 * Test of builder pattern
 *
 * @package Pattern\Builder\Test
 */
class BuilderTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testInstance()
    {
        $footman = new Unit\Footman\AlienFootman();
        $this->assertTrue($footman instanceof Builder\BarrackInterface);
    }

    /**
     * Data provider
     *
     * @return array
     */
    public function getBuilders()
    {
       return array(
           array(new Unit\Footman\AlienFootman()),
           array(new Unit\Footman\ZombieFootman()),
       );
    }

    /**
     * Test creation of builders
     *
     * @param Builder\BarrackInterface $builder
     *
     * @dataProvider getBuilders
     */
    public function testComponentCreation(Builder\BarrackInterface $builder)
    {
        $footman = array(
            $builder,
            $builder
        );

        $this->assertContainsOnlyInstancesOf('Pattern\Builder\BarrackInterface', $footman, 'Builder');
    }
}
