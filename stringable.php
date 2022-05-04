<?php

class MyClass
{
    public function __toString(): string
    {
        return 'String from MyClass';
    }
}

function myFunction(string|Stringable $stringable)
{
    echo (string)$stringable;
}

myFunction('hi');
myFunction(new MyClass());
