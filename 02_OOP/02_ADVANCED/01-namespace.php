<?php 
namespace 
{
    require_once "src/Conflict.php";
    require_once "src/Helper.php";

    $conflict1 = new Data\One\Conflict();
    $conflict2 = new Data\Two\Conflict();

    echo Helper\APPLICATION . PHP_EOL;

    Helper\helpMe();
}
?>