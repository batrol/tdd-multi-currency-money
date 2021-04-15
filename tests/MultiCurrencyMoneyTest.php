<?php

use App\Dollar;

class MultiCurrencyMoneyTest extends TestCase
{
    /*
     * Use cases:
     * - TODO: add amounts in two different currencies and convert the result given a set of exchange rates
     * - Multiply price per shares and number of shares and return an amount
     * - Fix multiplication issue. Amount in dollars increases on each multiplication.
     * - Fix encapsulation issue. Dollar has public properties
     * - Compare two Dollar objects (equals())
     * - TODO: hashCode() (applicable?)
     * - TODO: compare with null
     * - TODO: compare with other objects
     */

    public function testMultiplication()
    {
        $dollar = new Dollar(5);

        $this->assertEquals(new Dollar(10), $dollar->times(2));
        $this->assertEquals(new Dollar(15), $dollar->times(3));
    }

    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
