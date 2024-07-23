<?php
namespace tests\Unit;
use app\Name;
use PHPUnit\Framework\TestCase;
class NameClassTest extends TestCase
{
    public function test_nameClass() : void{
        $expected = 'Ivan';

        $name = new Name();
        $result = $name->prepare(' ivan');

        $this->assertEquals($expected, $result);
    }
}