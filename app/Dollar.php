<?php

namespace App;

class Dollar
{

    public int $amount = 0;

    public function __construct(int $int)
    {
    }

    public function times(int $multiplier): void
    {
        $this->amount = 5 * 2;
    }
}
