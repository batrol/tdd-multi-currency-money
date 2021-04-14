<?php

use App\Dollar;

class MultiCurrencyMoneyTest extends TestCase
{
    /*
     * Use cases:
     * - TODO: add amounts in two different currencies and convert the result given a set of exchange rates
     * - multiply price per shares and number of shares and return an amount
     * - TODO: Fix multiplication issue. Amount in dollars increases on each multiplication.
     * - TODO: Fix encapsulation issue. Dollar has public properties
     */

    public function testMultiplication()
    {
        $dollar = new Dollar(5);
        $dollar->times(2);

        $this->assertEquals(10, $dollar->amount);

        $dollar->times(3);

        $this->assertEquals(15, $dollar->amount);
    }
}
