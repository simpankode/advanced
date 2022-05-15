<?php 
for ($counter = 1; $counter < 10; $counter++) { 
    if($counter % 2 == 0){
        continue;
    }
    echo "counter ke -> $counter" . PHP_EOL;
}

$counter = 1;
while ($counter <= 10) {
    if($counter == 5){
        continue;
    }
    echo "counter ke -> $counter" . PHP_EOL;
    $counter++;
}
?>