<?php 
class Person
{
    public $name;

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
?>