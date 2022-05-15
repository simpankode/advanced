<?php 
$lampu = "hijau";

switch ($lampu) {
    case 'hijau':
        echo 'jalan';
        break;
    case 'kuning':
        echo 'siap-siap';
        break;
    case 'merah':
        echo 'berhenti';
        break;
    default:
        echo 'warna lampu tidak ada';
        break;
}

switch ($lampu):
    case 'hijau':
        echo 'jalan';
        break;
    case 'kuning':
        echo 'siap-siap';
        break;
    case 'merah':
        echo 'berhenti';
        break;
    default:
        echo 'warna lampu tidak ada';
        break;
endswitch;
?>