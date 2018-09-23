<?php

include "./MyCalculator.php";

class MyTest extends \Codeception\Test\Unit
{

    public $obj;

    protected function _before()
    {
        $this->obj = new MyCalculator();
    }

    protected function _after()
    {
    }

    // tests
    public function testAddTwoPositiveNumbers()
    {
        $this->assertEquals(5, $this->obj->add(1,4));
        $this->assertEquals(500000, $this->obj->add(100000,400000));
    }

    public function testAddTwoNegativeNumbers()
    {
        $this->assertEquals(-5, $this->obj->add(-1,-4));
        $this->assertEquals(-500000, $this->obj->add(-100000,-400000));
    }

    public function testAddTwoFractions()
    {
        $this->assertEquals(10, $this->obj->add(5.45,4.55));
        //$this->assertEquals(-500000, $this->obj->add(-100000,-400000));
    }

    public function testAddTwoBigNumbers()
    {
        $numberA = PHP_INT_MAX;
        $this->assertEquals(2*$numberA, $this->obj->add($numberA,$numberA));
    }

    public function testInvalidNumbers()
    {
        $this->assertEquals(false, $this->obj->add("a",10));
    }
}