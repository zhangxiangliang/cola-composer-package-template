<?php

namespace NewOne\Cola;

class Cola
{
    public static function new()
    {
        return new Cola;
    }

    public function sayHi()
    {
        return 'Hello, World!';
    }
}
