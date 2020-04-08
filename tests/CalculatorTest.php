<?php 

namespace Test;

use src\Calculator;
use PHPunit\Framework\TestCase;

class CalculatorTests extends TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
 
    public function testEmpty() 
    {
       $result = $this->calculator->add(1, 2);
       $this->assertEmpty($result);
    }

    public function type()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertIsInt($result);
    }
}