<?php 
class Database{
    var $hostname = 'localhost';
    var $username = 'root';
    var $password = '';
    var $database = 'php_database';

    function __construct()
    {
        $koneksi = mysqli_connect(
            $this->hostname,
            $this->username,
            $this->password,
            $this->database
        );

        if(!$koneksi)
        {
            echo "Database Not Connection";
        }
        else
        {
            echo "Database Connection";
        }
    }
}

$db = new Database();
?>