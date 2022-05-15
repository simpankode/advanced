<?php 
function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionYangDipanggil = "foo";
$functionYangDipanggil();

$functionYangDipanggil = "bar";
$functionYangDipanggil();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string{
    return "sample $name";
}

sayHello("Ajeng", "strtoupper");
sayHello("Ajeng", "strtolower");
?>