<?php 
function sayHello($firstName, $lastName = "")
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello('prayoga');
sayHello('ganteng');
sayHello('prayogaea','ganteng');

function sumAll(... $values)
{
    $total = 0;
    foreach ($values as $value) 
    {
        $total += $value;
    }
    echo "Total " . implode(',', $values) . " = $total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5];

sumAll(1, 2, 3, 4, 5);
sumAll(...$values);
?>