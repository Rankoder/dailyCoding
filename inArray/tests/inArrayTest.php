<?php
include "./inArray.php";

use PHPUnit\Framework\TestCase;

class inArrayTest extends TestCase {
    private function revTest($actual, $expected) 
    {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() 
    {
        $a2 = ["lively", "alive", "harp", "sharp", "armstrong"];
        $a1 = ["arp", "live", "strong"];
        $this->revTest(inArray($a1, $a2), ["arp", "live", "strong"]);
        $a1 = ["xyz", "live", "strong"];
        $this->revTest(inArray($a1, $a2), ["live", "strong"]);
        $a1 = ["live", "strong", "arp"];
        $this->revTest(inArray($a1, $a2), ["arp", "live", "strong"]);
    }
}