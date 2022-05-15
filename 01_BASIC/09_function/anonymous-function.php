<?php 
$sayHello = function (string $name)
{
    echo "Hello $name" . PHP_EOL;
};

$sayHello('prayogaea');


function sayGodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGodBye("prayogaea", function (string $name): string{
    return strtoupper($name);
});


$filterFunction = function (string $name): string
{
    return strtoupper($name);
};
sayGodBye('prayogaea', $filterFunction);


$name = 'prayogaea';
$wife = 'putriajeng';

$anonymousFunction = function () use ($name, $wife)
{
    echo "Hello $name and $wife" . PHP_EOL;
};
$anonymousFunction();
?>