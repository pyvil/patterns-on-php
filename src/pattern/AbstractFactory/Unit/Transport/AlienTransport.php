<?php
/**
 *
 */

namespace Pattern\AbstractFactory\Unit\Transport;

use Pattern\AbstractFactory\Unit;

/**
 * Class AlienTransport
 * @package Pattern\AbstractFactory\Unit\Footman
 */
class AlienTransport implements Unit\Transport
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