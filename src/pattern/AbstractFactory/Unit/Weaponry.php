<?php
/**
 *
 */

namespace Pattern\AbstractFactory\Unit;

/**
 * Interface Weaponry
 * @package Pattern\AbstractFactory\Unit
 */
interface Weaponry
{

    /**
     * @param $unit
     *
     * @return mixed
     */
    public function attack($unit);

    /**
     * @param $units
     *
     * @return mixed
     */
    public function setUnits($units);
}