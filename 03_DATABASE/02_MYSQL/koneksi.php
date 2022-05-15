<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "php_database";

$connect = mysqli_connect($hostname, $username, $password, $database);

//cek koneksi database
if(!$connect){
    echo "Connection failed" . PHP_EOL;
}else{
    echo "Connection success" . PHP_EOL;
}
?>