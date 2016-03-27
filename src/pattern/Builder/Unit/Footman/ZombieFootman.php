<?php
namespace Pattern\Builder\Unit\Footman;

use Pattern\Builder;

/**
 * Class ZombieFootman
 * @package Pattern\Builder\Unit\Footman
 */
class ZombieFootman implements Builder\BarrackInterface
{
    /**
     * @var null
     */
    protected $barrack = null;

    /**
     * Build unit barrack
     *
     * @return mixed
     */
    public function buildBarrack()
    {
        $this->barrack = null;
    }

    /**
     * Get barrack
     *
     * @return mixed
     */
    public function getBarrack()
    {
        return $this->barrack;
    }
}