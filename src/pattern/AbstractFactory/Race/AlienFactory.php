<?php
/**
 *
 */
namespace Pattern\AbstractFactory\Race;

use Pattern\AbstractFactory;
use Pattern\AbstractFactory\Unit;
use Pattern\AbstractFactory\Unit\Footman;
use Pattern\AbstractFactory\Unit\Weaponry;
use Pattern\AbstractFactory\Unit\Transport;

/**
 * Aliens factory
 *
 * @package Pattern\AbstractFactory\Race
 */
class AlienFactory implements AbstractFactory\RaceFactory
{

    /**
     * Create Footman for current race
     *
     * @return mixed
     */
    public function createFootman()
    {
        return new Footman\AlienFootman();
    }

    /**
     * Create Transport for current race
     *
     * @return mixed
     */
    public function createTransport()
    {
        return new Transport\AlienTransport();
    }

    /**
     * Create Weaponry for current race
     *
     * @return mixed
     */
    public function createWeaponry()
    {
        return new Weaponry\AlienWeaponry();
    }
}