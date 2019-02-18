<?php
include "./duplicate_encode.php";

use PHPUnit\Framework\TestCase;

class MyTestCases extends TestCase {
    public function testBasics() {
        $this->assertEquals('(((', duplicate_encode('din'));
        $this->assertEquals('()()()', duplicate_encode('recede'));
        $this->assertEquals(')())())', duplicate_encode('Success'), 'should ignore case');
        $this->assertEquals('))))))', duplicate_encode('iiiiii'), 'duplicate-only-string');
        $this->assertEquals(')))))(', duplicate_encode(' ( ( )'));
    }
}

