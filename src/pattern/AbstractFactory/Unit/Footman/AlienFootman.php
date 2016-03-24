<?php
/**
 *
 */

namespace Pattern\AbstractFactory\Unit\Footmen;

use Pattern\AbstractFactory\Unit;

/**
 * Class AlienFootmen
 * @package Pattern\AbstractFactory\Unit\Footmen
 */
class AlienFootman implements Unit\Footman
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
}