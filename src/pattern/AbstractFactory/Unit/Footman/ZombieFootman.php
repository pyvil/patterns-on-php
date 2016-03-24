<?php
/**
 *
 */

namespace Pattern\AbstractFactory\Unit\Footman;

use Pattern\AbstractFactory\Unit;

/**
 * Class ZombieFootman
 * @package Pattern\AbstractFactory\Unit\Footman
 */
class ZombieFootman implements Unit\Footman
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