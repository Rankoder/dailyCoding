<?php
include("./Kalkulator.php");

use PHPUnit\Framework\TestCase;

class KalkulatorTest extends TestCase
{
    public function testExamples() {

        $this->assertEquals(dodawanie(1, 2), 3);
    }
}
