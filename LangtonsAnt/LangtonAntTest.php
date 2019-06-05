<?php
include("LangtonAnt.php");

use PHPUnit\Framework\TestCase;

class LangtonAntTest extends TestCase
{
    public function testExamples() {
        $this->assertEquals([[0,0]], ant([[1]], 0, 0, 1, 0));
        $this->assertEquals([[0,1]], ant([[0]], 0, 0, 1, 0));
        $this->assertEquals([[0,1],[0,1]], ant([[1]], 0, 0, 3, 0));
    }
}
