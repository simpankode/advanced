<?php 
$name = 'prayogaea';
$wife = 'putriajeng';

$anonymousFunction = function () use ($name, $wife) : string
{
    return "Hello $name and $wife" . PHP_EOL;
};
echo $anonymousFunction();

//arrow function
$arrowFunction = fn() => "Hello $name and $wife" . PHP_EOL;
echo $arrowFunction();
?>