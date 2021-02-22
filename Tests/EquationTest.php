<?php
use nikitenko\D;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class EquationTest extends TestCase {
    /**
     * @dataProvider providerEquation
     * @param $a
     * @param $b
     * @param $c
     */

    public function testEquation($a, $b, $c){
        $test = new D();
        $this->assertEquals([$c], $test->line($a, $b));
    }

    public function providerEquation(): array
    {
        return array (
            array (7, 8, -5),
            array (-9, 8, 1),
            array (1111, 123, -0.150)
        );
    }

    /**
     * @dataProvider providerEquationEx
     * @param $a
     * @param $b
     * @param $c
     */
    public function testEquationEx($a, $b, $c) {
        $this->expectException(\nikitenko\NikitenkoException::class);
        $test = new D();
        $this->assertEquals($c, $test->line($a, $b));
    }
    public function providerEquationEx (): array
    {
        return array (
            array (1, 1, -1),
            array (0, 0, 0),
            array (null, null, 0),

        );
    }
}