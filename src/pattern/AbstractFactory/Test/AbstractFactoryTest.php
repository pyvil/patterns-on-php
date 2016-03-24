<?php

namespace Pattern\AbstractFactory\Test;

use Pattern\AbstractFactory\Race\AlienFactory;
use Pattern\AbstractFactory\Race\ZombieFactory;
use Pattern\AbstractFactory\RaceFactory;
use Pattern\AbstractFactory\Unit;


class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Inheritance test
     *
     * @return void
     */
    public function testRaceInstance()
    {
        $race = new AlienFactory();
        $this->assertTrue($race instanceof RaceFactory);
    }

    /**
     * Data provider method
     *
     * @return array
     */
    public function getFactories()
    {
        return array(
            array(new AlienFactory()),
            array(new ZombieFactory())
        );
    }

    /**
     * @param RaceFactory $factory
     *
     * @dataProvider getFactories
     */
    public function testComponentCreation(RaceFactory $factory)
    {
        $footman = array(
            $factory->createFootman(),
            $factory->createFootman()
        );
        $this->assertContainsOnlyInstancesOf('Pattern\AbstractFactory\Unit\Footman', $footman, 'Footmans');
    }
}
