<?php 
function devide($devidend, $devisor)
{
    if($devisor == 0){
        throw new Exception("Division by zero");
    }
    return $devidend / $devisor;
}

//exception atau pengecualian
try {
    echo devide(5, 0);
} catch (Exception $e) {
    echo 'Unable to devide'. PHP_EOL;
} finally {
    echo 'Process complete'. PHP_EOL;
}
?>