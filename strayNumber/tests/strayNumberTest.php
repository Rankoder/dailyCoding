<?php
include "./strayNumber.php";

use PHPUnit\Framework\TestCase;

class strayNumberTest extends TestCase {
    public function testStaticOperations() {
        $this->assertEquals(stray([1, 1, 2]), 2);
        $this->assertEquals(stray([4, 2, 2, 2, 2]), 4);
        $this->assertEquals(stray([4, 4, 4, 5, 4, 4, 4]), 5);
    }
}

