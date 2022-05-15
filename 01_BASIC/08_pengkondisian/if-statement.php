<?php
$lampu = "hijau"; 

if($lampu == "hijau"){
    echo "Jalan";
}elseif($lampu == "kuning"){
    echo "siap-siap";
}elseif($lampu == "merah"){
    echo "berhenti";
}else{
    echo "warna lampu tidak ada";
}

if ($lampu == "hijau"):
    echo "jalan";    
elseif($lampu == "kuning"):
    echo "siap-siap";
elseif($lampu == "merah"):
    echo "berhenti";
else:
    echo "warna lampu tidak ada";
endif;
?>