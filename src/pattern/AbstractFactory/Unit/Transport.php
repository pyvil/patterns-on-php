<?php
/**
 *
 */

namespace Pattern\AbstractFactory\Unit;

/**
 * Interface Transport
 * @package Pattern\AbstractFactory\Unit
 */
interface Transport
{

    /**
     * @param $units
     *
     * @return mixed
     */
    public function setUnits($units);
}