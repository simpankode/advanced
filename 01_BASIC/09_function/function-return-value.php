<?php 
function sum(int $first, int $second):int
{
    $total = $first + $second;
    return $total;
}

$result = sum(10, 5);
var_dump($result);

function getLampu(int $lampu):string
{
    if($lampu == 3){
        return 'hijau';
    }elseif ($lampu == 2) {
        return 'kuning';
    }elseif ($lampu == 1) {
        return 'merah';
    }else {
        return 'lampu tidak aktif';
    }
}

$lampu = getLampu(1);
var_dump($lampu);
?>