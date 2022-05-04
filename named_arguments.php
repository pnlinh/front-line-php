<?php

setcookie('mycooki', secure: true);

function myFunction(string $a, string $b = '', string $c = '')
{
    echo "{$a}-{$b}-{$c}";
}

myFunction('I am a', c: 'I am c', b: 'I am b');

class CustomerData
{
    public function __construct(
        public string $name,
        public string $email,
        public int $age
    ) {
    }
}

$values = [
    'name' => 'John Doe',
    'email' => 'foo@bar.com',
    'age' => 30,
];

//$customerData = new CustomerData('John Doe', 'foo@bar.com', 30);
$customerData = new CustomerData(...$values);
var_dump($customerData);
