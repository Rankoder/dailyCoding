<?php
include "./CaesarCipher.php";

use PHPUnit\Framework\TestCase;

class CaesarCipherHelperTestCases extends TestCase {
  public function testExamples() {
    $c = new CaesarCipher(5);
    $this->assertEquals($c->encode('Codewars'), 'HTIJBFWX');
    $this->assertEquals($c->decode('Htijbfwx'), 'CODEWARS');
  }
  public function testForSix() {
    $c = new CaesarCipher(6);
    $this->assertEquals($c->encode('Code'), 'IUJK');
    $this->assertEquals($c->decode('IUJK'), 'CODE');
  }
}