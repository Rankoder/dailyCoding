<?php
include "./ipv4_address.php";

use PHPUnit\Framework\TestCase;

class MyTestCases extends TestCase
{
    // test function names should start with "test"
    public function testBasics() {
      $this->assertEquals( False,ipv4_address(""));
      $this->assertEquals( True,ipv4_address("127.0.0.1"));
      $this->assertEquals( True,ipv4_address("0.0.0.0"));
      $this->assertEquals( True,ipv4_address("255.255.255.255"));
      $this->assertEquals( True,ipv4_address("10.20.30.40"));
      $this->assertEquals( False,ipv4_address("10.256.30.40"));
      $this->assertEquals( False,ipv4_address("10.20.030.40"));
      $this->assertEquals( False,ipv4_address("127.0.1"));
      $this->assertEquals( False,ipv4_address("127.0.0.0.1"));
      $this->assertEquals( False,ipv4_address("..255.255"));
      $this->assertEquals( False,ipv4_address("127.0.0.1\n"));
      $this->assertEquals( False,ipv4_address("\n127.0.0.1"));
      $this->assertEquals( False,ipv4_address(" 127.0.0.1"));
      $this->assertEquals( False,ipv4_address("127.0.0.1 "));
      $this->assertEquals( False,ipv4_address(" 127.0.0.1 "));
    }
}