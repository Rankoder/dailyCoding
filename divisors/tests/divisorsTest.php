<?php
include "./divisors.php";

use PHPUnit\Framework\TestCase;

class DivisorsTest extends TestCase {
  public function testExamples() {
    $this->assertEquals([3, 5], divisors(15));
    $this->assertEquals([2, 3, 4, 6], divisors(12));
    $this->assertEquals('13 is prime', divisors(13));
  }
}

