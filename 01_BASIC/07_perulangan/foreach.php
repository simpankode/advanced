<?php 
$names = ['Prayoga','Eka','Ardiansyah'];

foreach ($names as $id => $name) {
    echo "Data ke $id : $name" . PHP_EOL;
}

foreach ($names as $id => $name):
    echo "Data ke $id : $name" . PHP_EOL;
endforeach;


$Person = [
    "firstName" => "Prayoga",
    "middleName" => "Eka",
    "lastName" => "Ardisnasyah" 
];

foreach ($Person as $key => $name) {
    echo "$key : $name" . PHP_EOL;
}

foreach ($Person as $key => $name):
    echo "$key : $name" . PHP_EOL;
endforeach;
?>