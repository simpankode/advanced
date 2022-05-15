<?php 
$name1 = [
    "firstName" => "Prayoga",
    "middleName" => "Eka",
    "lastName" => "Ardiansyah"
];

$name2 = [
    "lastName" => "Ardiansyah",
    "firstName" => "Prayoga",
    "middleName" => "Eka"
 
];

var_dump($name1 == $name2);
var_dump($name1 === $name2);

$names = $name1 + $name2;
var_dump($names);
?>