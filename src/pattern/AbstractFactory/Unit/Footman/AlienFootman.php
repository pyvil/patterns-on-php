<?php
/**
 *
 */

namespace Pattern\AbstractFactory\Unit\Footman;

use Pattern\AbstractFactory\Unit;

/**
 * Class AlienFootman
 * @package Pattern\AbstractFactory\Unit\Footman
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