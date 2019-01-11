<?php
include "./PrimeFactors.php";

use PHPUnit\Framework\TestCase;

class PrimeFactorsTestCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $this->revTest(primeFactors(7775460),"(2**2)(3**3)(5)(7)(11**2)(17)");
        $this->revTest(primeFactors(7919),"(7919)");
        $this->revTest(primeFactors(17*17*93*677),"(3)(17**2)(31)(677)");
    }
}

