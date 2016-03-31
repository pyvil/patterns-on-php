<?php
namespace Pattern\FactoryMethod\Unit;

use Pattern\FactoryMethod;

/**
 * Class Transport
 *
 * @package Pattern\FactoryMethod\Unit
 */
class Transport implements FactoryMethod\UnitInterface
{

    /**
     * @return mixed
     */
    public function create()
    {
        return $this;
    }
}