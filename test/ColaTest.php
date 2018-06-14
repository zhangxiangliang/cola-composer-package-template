<?php

namespace Test;

use NewOne\Cola\Cola;
use PHPUnit\Framework\TestCase;

class ColaTest extends TestCase
{
    public function testHelloWorld()
    {
        $cola = Cola::new();
        $this->assertEquals($cola->sayHi(), "Hello, World!");
    }
}
