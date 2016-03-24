<?php
/**
 *
 */

namespace Pattern\AbstractFactory\Unit\Weaponry;

use Pattern\AbstractFactory\Unit;

/**
 * Class AlienTransport
 * @package Pattern\AbstractFactory\Unit\Footman
 */
class ZombieWeaponry implements Unit\Weaponry
{

    /**
     * @param $unit
     *
     * @return mixed
     */
    public function attack($unit)
    {
        return $unit;
    }

    /**
     * @param $units
     *
     * @return mixed
     */
    public function setUnits($units)
    {
        return $units;
    }
}