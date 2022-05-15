<?php 
class Person
{
    private $name;

    function set_name($new_name)
    {
        $this->name = $new_name;
    }

    function get_name()
    {
        return $this->name;
    }
}

$person = new Person();

//akses properti secara langsung
echo "Hello " . $person->name = "prayogaea" . PHP_EOL;
//akses method secara langsung
echo $person->get_name() . PHP_EOL;


/*
 *  Jika anda mengganti jenis enkapsulasinya menjadi private,
 *  dan anda melakukan akses properti dari luar class maka akan terjadi error
 */
?>