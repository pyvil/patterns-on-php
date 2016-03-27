<?php
namespace Pattern\Builder;

/**
 * Class BarrackDirector
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