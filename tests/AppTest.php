<?php


use ditibal\test\App;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testWrongPhone()
    {
        $app = new App();
        $this->assertEquals('foobar', $app->test());
    }
}