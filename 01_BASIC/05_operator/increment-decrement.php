<?php 
//increment
$inc = 1;
$x = ++$inc;

var_dump($inc);

//decrement
$dec = 1;
$y = --$dec;

var_dump($dec);

//increment
for ($i=1; $i < 5; $i++) { 
    echo $i . PHP_EOL;
}

//decrement
for ($y=5; $y > 1; $y--) { 
    echo $y . PHP_EOL;
}
?>