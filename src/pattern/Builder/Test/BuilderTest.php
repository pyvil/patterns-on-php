<?php

namespace Pattern\Builder\Test;

use Pattern\Builder\Unit;
use Pattern\Builder;

class BuilderTest extends \PHPUnit_Framework_TestCase
{
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

    public function testComponentCreation(Builder\BarrackInterface $builder)
    {
        $footman = array(
            $builder,
            $builder
        );
    }
}
