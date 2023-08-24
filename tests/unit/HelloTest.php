<?php

namespace Tests\Unit;

use App\Service\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testAdd()
    {
        $logic = new Hello();
        $ret = $logic->add(1,1);
        $this->assertSame($ret,2);
    }
}
