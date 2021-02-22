<?php
use nikitenko\MyLog;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class MyLogTest extends TestCase
{
    /**
     * @dataProvider providerEquation
     * @param $str
     */
    public function testLog($str)
    {
        $this->assertEquals('',  \nikitenko\MyLog::log($str));
    }
    public function providerEquation(): array
    {
        return array (
            array ("ttt"),
            array ("fff"),
            array (1112221101),
            array (true)
        );
    }
    public function testLog2()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('',  \nikitenko\MyLog::log(null));
        $this->assertEquals('',  \nikitenko\MyLog::log());
    }
    public function testWrite()
    {
        $this->assertEquals('',   \nikitenko\MyLog::write(123));
        $this->assertEquals('',   \nikitenko\MyLog::write("test"));
        $this->assertEquals('',   \nikitenko\MyLog::write());
    }
}
