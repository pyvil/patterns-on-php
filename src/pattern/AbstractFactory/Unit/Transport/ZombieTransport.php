<?php
/**
 *
 */

namespace Pattern\AbstractFactory\Unit\Transport;

use Pattern\AbstractFactory\Unit;

/**
 * Class ZombieTransport
 * @package Pattern\AbstractFactory\Unit\Footman
 */
class ZombieTransport implements Unit\Transport
{

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