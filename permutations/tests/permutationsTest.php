<?php
include "./permutations.php";

use PHPUnit\Framework\TestCase;

final class PermutationsTest extends TestCase {
    private function assertEquivalent(array $expected, array $actual, string $msg = '') 
    {
        sort($expected);
        sort($actual);
        $this->assertEquals($expected, $actual, $msg);
    }
    public function testDescriptionExamples() 
    {
        $this->assertEquivalent(['a'], permutations('a'));
        $this->assertEquivalent(['ab', 'ba'], permutations('ab'));
        $this->assertEquivalent(['aabb', 'abab', 'abba', 'baab', 'baba', 'bbaa'], permutations('aabb'));
    }
}