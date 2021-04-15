<?php

use App\Dollar;
use App\Franc;

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
     * - Franc multiplication
     * - TODO: remove code duplication (Dollar and Franc)
     * - TODO: generalize equals()
     * - TODO: generalize times()
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

    public function testFrancMultiplication()
    {
        $franc = new Franc(5);

        $this->assertEquals(new Franc(10), $franc->times(2));
        $this->assertEquals(new Franc(15), $franc->times(3));
    }
}
