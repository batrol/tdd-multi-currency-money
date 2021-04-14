<?php

use App\Dollar;

class MultiCurrencyMoneyTest extends TestCase
{
    /*
     * Use cases:
     * - TODO: add amounts in two different currencies and convert the result given a set of exchange rates
     * - Multiply price per shares and number of shares and return an amount
     * - Fix multiplication issue. Amount in dollars increases on each multiplication.
     * - TODO: Fix encapsulation issue. Dollar has public properties
     * - Compare two Dollar objects (equals())
     * - TODO: hashCode() (applicable?)
     */

    public function testMultiplication()
    {
        $dollar = new Dollar(5);
        $product = $dollar->times(2);

        $this->assertEquals(10, $product->amount);

        $product = $dollar->times(3);

        $this->assertEquals(15, $product->amount);
    }

    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
