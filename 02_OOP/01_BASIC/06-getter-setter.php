<?php 
class Person
{
    public $name;

    //setter
    public function set_name($new_name)
    {
        $this->name = $new_name;
    }

    //getter
    public function get_name()
    {
        return "Name: {$this->name}";
    }
}

$person = new Person();
$person->set_name('prayogaea');
echo $person->get_name();
?>