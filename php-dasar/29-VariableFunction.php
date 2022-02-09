<?php
function foo()
{
    echo "Foo" . PHP_EOL;
}
function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionName = "Foo";
$functionName();

$functionName = "Bar";
$functionName();

//penggunaan variable function
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}
function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello("Lerry", "strtoupper");
sayHello("Lerry", "strtolower");
sayHello("Lerry", "sampleFunction");
