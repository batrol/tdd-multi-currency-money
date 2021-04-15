<?php

namespace App;

use JetBrains\PhpStorm\Pure;

class Dollar
{

    private int $amount = 0;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    #[Pure] public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(Dollar $comparedObject): bool
    {
        return $this->amount === $comparedObject->amount;
    }
}
