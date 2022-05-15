<?php 
function sayHello (string $name, callable $filter)
{
    $finalName = call_user_func($filter , $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello('prayogaea', 'strtolower');
sayHello('prayogaea', 'strtoupper');


sayHello('prayogaea', function (string $name): string{
    return strtoupper($name);
});


sayHello('prayogaea', fn($name) => strtolower($name));
?>