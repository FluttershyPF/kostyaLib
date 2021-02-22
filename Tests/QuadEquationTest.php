<?php

use nikitenko\E;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class QuadEquationTest extends TestCase {

    /**
     * @dataProvider providerEquation
     * @param $a
     * @param $b
     * @param $c
     * @param $d
     */
    public function testSolve($a, $b, $c, $d) {
        $test = new E();
        $this->assertEquals($d, $test->discr($a, $b, $c));
    }
    public function providerEquation(): array
    {
        return array (
            array (10, 14, 0,[0, -0.5]),
            array (4, 6, -20, [3.3851648071345037, -9.385164807134505]),
            array (0, 1, 1,[-1]),
            array (0, 1, 2, [-2.0]),
        );
    }

    /**
     * @dataProvider providerQuadEquationEx
     * @param $a
     * @param $b
     * @param $c
     * @param $d
     */
    public function testSolveTwoEX($a, $b, $c, $d) {
        $this->expectException(\nikitenko\NikitenkoException::class);
        $test = new E();
        $this->assertEquals($d, $test->discr($a, $b, $c));
    }
    public function providerQuadEquationEx (): array
    {
        return array (
            array (0, 0, 0, 0),
            array (1, 3, 3, 4),
            array ('a', 'b', 'c', 0),
        );
    }
}
