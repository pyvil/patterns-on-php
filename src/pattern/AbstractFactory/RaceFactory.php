<?php

namespace Pattern\AbstractFactory;

/**
 * Race factory
 *
 * @package Pattern\AbstractFactory
 */
interface RaceFactory
{
    /**
     * Create Footman for current race
     *
     * @return mixed
     */
    public function createFootmen();

    /**
     * Create Transport for current race
     *
     * @return mixed
     */
    public function createTransport();

    /**
     * Create Weaponry for current race
     *
     * @return mixed
     */
    public function createWeaponry();
}