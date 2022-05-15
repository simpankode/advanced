<?php 
class Hello
{
    public static function sayHello()
    {
        echo "Hello, prayogaea";
    }
}

Hello::sayHello();

/*
 * Untuk mengakses metode statis gunakan nama kelas, titik dua ganda (::), dan nama metode:
 * Hello::sayHello();
 */


echo"\n------------------------------\n";


class Msg
{
    public static function msg()
    {
        echo "Hello, putriajeng";
    }

    public function __construct()
    {
        self::msg();
    }
}

new Msg;
/*
 * Kelas dapat memiliki metode statis dan non-statis. 
 * Metode statis dapat diakses dari metode di kelas yang sama menggunakan self kata kunci dan titik dua ganda (::):
 */


echo"\n------------------------------\n";


class Message extends Hello
{
    public static function myHello()
    {
        echo "Hello, prayogaea and putriajeng";
    }  
}

Message::myHello();
?>