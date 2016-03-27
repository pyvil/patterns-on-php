<?php
namespace Pattern\Builder;

/**
 * Interface BuilderInterface
 *
 * @package Pattern\Builder
 */
interface BarrackInterface
{
    /**
     * Build unit barrack
     *
     * @return mixed
     */
    public function buildBarrack();

    /**
     * Get barrack
     *
     * @return mixed
     */
    public function getBarrack();
}