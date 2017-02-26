<?php

namespace DockerTest\Tests\Calculator;

use DockerTest\Calculator\BasicOperationsCalculator;
use PHPUnit\Framework\TestCase;

/**
 * Tests for BasicOperationsCalculator
 *
 * @package DockerTest\Tests\Calculator
 * @author  Lukasz Lewandowski <luklewluk@gmail.com>
 */
class BasicOperationsCalculatorTest extends TestCase
{
    /**
     * Test addition of two numbers
     *
     * @param float $numberOne      First of numbers
     * @param float $numberTwo      Second of numbers
     * @param float $expectedResult Expected result
     *
     * @dataProvider numbersToAddProvider
     */
    public function testAddingTwoNumbers($numberOne, $numberTwo, $expectedResult)
    {
        $basicOperations = new BasicOperationsCalculator();
        $this->assertEquals($expectedResult, $basicOperations->addTwoNumbers($numberOne, $numberTwo));
    }

    /**
     * Provider of numbers to test their addition
     */
    public function numbersToAddProvider()
    {
        return [
            ['5', 2, 7],
            [-2, 4, 2],
            ['-6', '-10', -16],
            [1024, 1024, 2048],
            [1.23, 1.55, 2.78],
            [5.01, -0.01, 5],
        ];
    }
}
