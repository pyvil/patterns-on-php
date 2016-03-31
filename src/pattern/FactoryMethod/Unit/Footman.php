<?php
namespace Pattern\FactoryMethod\Unit;

use Pattern\FactoryMethod;

/**
 * Class Footman
 *
 * @package Pattern\FactoryMethod\Unit
 */
class Footman implements FactoryMethod\UnitInterface
{

    /**
     * @return mixed
     */
    public function create()
    {
        return $this;
    }
}