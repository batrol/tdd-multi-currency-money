<?php

namespace App;

use JetBrains\PhpStorm\Pure;

class Franc
{

    private int $amount = 0;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    #[Pure] public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    public function equals(Franc $comparedObject): bool
    {
        return $this->amount === $comparedObject->amount;
    }
}
