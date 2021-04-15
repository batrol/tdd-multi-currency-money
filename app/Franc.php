<?php

namespace App;

use JetBrains\PhpStorm\Pure;

class Franc extends Money
{

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    #[Pure] public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }
}
