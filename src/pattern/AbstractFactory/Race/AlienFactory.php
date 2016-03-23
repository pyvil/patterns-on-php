<?php
/**
 *
 */
namespace Pattern\AbstractFactory\Race;

use Pattern\AbstractFactory;
use Pattern\AbstractFactory\Unit;
use Pattern\AbstractFactory\Unit\Footmen;
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
    public function createFootmen()
    {
        return new Footmen\AlienFootmen();
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