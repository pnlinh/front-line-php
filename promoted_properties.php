<?php

class MyClass
{
    public function __construct(
        public string $a = 'first',
        private string $b = 'second'
    ) {}
}

echo (new MyClass('something else'))->a;
