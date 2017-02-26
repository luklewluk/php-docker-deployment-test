<?php

namespace DockerTest\Calculator;

/**
 * Class to process basic calculations
 *
 * @package DockerTest\Calculator
 * @author  Lukasz Lewandowski <luklewluk@gmail.com>
 */
class BasicOperationsCalculator
{
    /**
     * Add two numbers
     *
     * @param float $numberOne First of numbers
     * @param float $numberTwo Second of numbers
     *
     * @return float
     */
    public function addTwoNumbers(float $numberOne, float $numberTwo): float
    {
        return $numberOne + $numberTwo;
    }
}
