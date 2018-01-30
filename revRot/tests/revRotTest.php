<?php
include "./revRot.php";

use PHPUnit\Framework\TestCase;

class RevRotTestCases extends TestCase {
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {        
        $this->revTest(revrot("1234", 0), "");
        $s = "733049910872815764";
        $this->revTest(revrot($s, 5), "330479108928157");
        $s = "73304991087281576455176044327690580265896";
        $this->revTest(revrot($s, 8), "1994033775182780067155464327690480265895");
    }
}