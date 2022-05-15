<?php 
$hostname = "localhost";
$port = 3306;
$username = "root";
$password = "";
$database = "php_database";

try {
   $connect = new PDO("mysql:host=$hostname:$port;dbname=$database", $username, $password);
   echo "Connection success" . PHP_EOL;

   // menutup koneksi
   $connect = null;
} catch (PDOException $exception) {
    echo "Connection failed " . $exception->getMessage() . PHP_EOL;
}
?>