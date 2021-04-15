<?php

namespace App;

abstract class Money
{

    protected int $amount = 0;

    public function equals(Money $comparedObject): bool
    {
        return $this->amount === $comparedObject->amount;
    }
}
