<?php 
$num = array(1,2,5,7,9,3,1.5);
var_dump($num);

$names = ['Prayoga','Eka','Ardiansyah'];
var_dump($names);

$yoga = array(
    "id" => 1,
    "name" => "prayogaea",
    "address" => array(
        "city" => "malang",
        "country" => "Indonesia"
    )
);

var_dump($yoga);

$ajeng = [
    "id" => 2,
    "name" => "putriajeng",
    "address" => [
        "city" => "malang",
        "country" => "Indonesia"
    ]
];

var_dump($ajeng);
?>