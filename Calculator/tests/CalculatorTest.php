<?php
include "./Calculator.php";

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @var Calculator
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Calculator;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Generated from @assert (0, 0) == 0.
     *
     * @covers Calculator::add
     */
    public function testAdd()
    {
        $this->assertEquals(
            0
,
            $this->object->add(0, 0)
        );
    }

    /**
     * Generated from @assert (0, 1) == 1.
     *
     * @covers Calculator::add
     */
    public function testAdd2()
    {
        $this->assertEquals(
            1
,
            $this->object->add(0, 1)
        );
    }

    /**
     * Generated from @assert (1, 0) == 1.
     *
     * @covers Calculator::add
     */
    public function testAdd3()
    {
        $this->assertEquals(
            1
,
            $this->object->add(1, 0)
        );
    }

    /**
     * Generated from @assert (1, 1) == 2.
     *
     * @covers Calculator::add
     */
    public function testAdd4()
    {
        $this->assertEquals(
            2
,
            $this->object->add(1, 1)
        );
    }

    /**
     * Generated from @assert (1, 2) == 4.
     *
     * @covers Calculator::add
     */
    public function testAdd5()
    {
        $this->assertEquals(
            3
,
            $this->object->add(1, 2)
        );
    }
}
