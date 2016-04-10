<?php
/**
 * Test case for singleton pattern
 */

namespace Pattern\Singleton\Test;

use Pattern\AbstractFactory\Race\AlienFactory;
use Pattern\Singleton\Singleton;


class SingletonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test constructor private
     *
     * @return void
     */
    public function testIsConstructorPrivate()
    {
        // $reflection = new \ReflectionClass('\Pattern\Singleton\Singleton');
        // or
        $reflection = new \ReflectionObject(Singleton::getInstance());
        $constructor = $reflection->getConstructor();
        $this->assertTrue($constructor->isPrivate());
    }

    /**
     * Are instances the same
     *
     * @return void
     */
    public function testInstancesSame()
    {
        $instance1 = Singleton::getInstance();
        $this->assertInstanceOf('Pattern\Singleton\Singleton', $instance1);
        $instance2 = Singleton::getInstance();
        $this->assertSame($instance1, $instance2);
    }

    /**
     * Singleton pattern doesn't allow to clone
     *
     * @expectedException \Exception
     *
     * @return void
     */
    public function testCloneException()
    {
        $instance = Singleton::getInstance();
        $instance2 = clone $instance;
    }

    /**
     * Singleton doesn't allow to wakeup (unserialize) object
     *
     * @expectedException \Exception
     *
     * @return void
     */
    public function testWakeupException()
    {
        $instance = Singleton::getInstance();
        $serialize = serialize($instance);
        $instance2 = unserialize($serialize);
    }
}
