<?php

namespace Tests\Calculator;

use Phpunit\Calculator\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
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

    public function addDataProvider() {
        return array(
            array(1,2,3),
            array(0,0,0),
            array(-1,-1,-2),
            array(1, 0.5, 1.5)
        );
    }

    /**
     * @dataProvider addDataProvider
     *
     * @param int $a
     * @param int $b
     * @param int $expected
     */
    public function testAdd($a, $b, $expected)
    {
        $result = $this->calculator->add($a, $b);
        $this->assertEquals($expected, $result);
    }

    public function testMinus()
    {
        $result = $this->calculator->minus(1, 10);
        $this->assertEquals(-9, $result);
    }
}
