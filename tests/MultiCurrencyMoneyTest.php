<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class MultiCurrencyMoneyTest extends TestCase
{
    /*
     * Use cases:
     * - add amounts in two different currencies and convert the result given a set of exchange rates
     * - multiply price per shares and number of shares and return an amount
     */

    public function testMultiplication()
    {
        $dollar = new Dollar(5);
        $dollar->times(2);

        $this->assertEquals(10, $dollar->amount);
    }
}
