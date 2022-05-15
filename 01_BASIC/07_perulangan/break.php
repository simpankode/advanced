<?php 
for ($counter = 0; $counter < 10; $counter++) { 
    if($counter >= 10){
        break;
    }
    echo "counter ke -> $counter" . PHP_EOL;
}

$counter = 0;
while ($counter <= 10) {
    if($counter == 5){
        break;
    }
    echo "counter ke -> $counter" . PHP_EOL;
    $counter++;
}

$counter = 0;
do {
    if($counter == 5){
        break;
    }
    echo "counter ke -> $counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);
?>