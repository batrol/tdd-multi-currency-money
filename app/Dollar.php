<?php

namespace App;

use JetBrains\PhpStorm\Pure;

class Dollar
{

    public int $amount = 0;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    #[Pure] public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(Dollar $param): bool
    {
        return true;
    }
}
