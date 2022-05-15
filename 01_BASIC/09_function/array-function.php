<?php 
$arr = [
    1,2,3,4,5,6,7,8,9,10
];

$data = array_map(fn(int $value) => $value * 10, $arr);
var_dump($data);

var_dump(rsort($arr));
var_dump(array_keys($arr));
var_dump(array_values($arr));

$Person = [
    //keys  =>  //values
    "name" => "prayogaea",
    "wife" => "putriajeng"
];

var_dump(array_keys($Person));
var_dump(array_values($Person));
?>