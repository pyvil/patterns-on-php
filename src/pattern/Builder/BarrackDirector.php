<?php
namespace Pattern\Builder;

/**
 * Director as a part of builder pattern.
 *
 * @package Pattern\Builder
 */
class BarrackDirector
{
    /**
     * @param BarrackInterface $barrack
     *
     * @return mixed
     */
    public function build(BarrackInterface $barrack)
    {
        $barrack->buildBarrack();

        return $barrack->getBarrack();
    }
}