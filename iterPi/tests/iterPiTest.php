<?php
include "./iterPi.php";

use PHPUnit\Framework\TestCase;

class PiApproxTestCases extends TestCase {
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {        
        $this->revTest(iterPi(0.1), [10, 3.0418396189]);
        $this->revTest(iterPi(0.01), [100, 3.1315929036]);
        $this->revTest(iterPi(0.001), [1000, 3.1405926538]);
        $this->revTest(iterPi(1.0E-5), [100001, 3.1416026535000001]);
    }
}