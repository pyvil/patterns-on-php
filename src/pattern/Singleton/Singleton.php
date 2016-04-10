<?php

namespace Pattern\Singleton;

/**
 * Singleton pattern
 *
 *
 */
class Singleton
{
    /**
     * @var static
     */
    static private $_instance;

    /**
     * Private constructor
     *
     * @return void
     */
    private function __constructor()
    {

    }

    /**
     * Disallow to clone
     *
     * @throws \Exception
     */
    final public function __clone ()
    {
        throw new \Exception('Singleton doesn\'t allow to clone instance');
    }

    /**
     * Disallow to wakeup
     *
     * @return void
     * @throws \Exception
     */
    final public function __wakeup()
    {
        throw new \Exception('Singleton doesn\'t allow to wakeup instance');
    }

    /**
     * Get instance
     *
     * @return Singleton|static
     */
    static public function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new static();
        }

        return self::$_instance;
    }
}