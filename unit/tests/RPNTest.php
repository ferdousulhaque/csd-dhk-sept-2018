<?php

include "./RPN.php";

class RPNTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
        $this->obj = new RPN();
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->assertEquals("14", $this->obj->solve("3 11 +"));
        $this->assertEquals("9", $this->obj->solve("3 11 + 5 -"));
        $this->assertEquals("-13", $this->obj->solve("3 11 5 + -"));
        $this->assertEquals("18", $this->obj->solve("2 3 11 + 5 - *"));
    }
}