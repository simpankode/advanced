<?php 
$x = 10;
$y = 3;
/*-----------------------*/
echo $x += $y , "\n";
echo $x -= $y , "\n";
echo $x *= $y , "\n";
echo $x /= $y , "\n";
echo $x %= $y , "\n";
echo $x **= $y , "\n";
/*-----------------------*/

$teh = 3000;
$kopi = 4000;
$gelas = 5;
$diskon = 5000;
$total = 0;

$total += $teh;
$total += $kopi;
$total *= $gelas;
$total -= $diskon;
var_dump($total);
?>