<?php

declare(strict_types=1);

namespace MyVendor\MyPackage;

class Calculator
{
    public function add(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }

    public function subtract(int|float $a, int|float $b): int|float
    {
        return $a - $b;
    }

    public function multiply(int|float $a, int|float $b): int|float
    {
        return $a * $b;
    }

    public function divide(int|float $a, int|float $b): int|float
    {
        if ($b === 0) {
            throw new \InvalidArgumentException('Cannot divide by zero.');
        }

        return $a / $b;
    }
}