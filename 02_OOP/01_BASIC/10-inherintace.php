<?php 
class Fruits
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function get_fruit()
    {
        echo "nama buah {$this->name} berwarna {$this->color}";
    }
}

$melon = new Fruits('melon', 'hijau');
$melon->get_fruit();


echo"\n------------------------------\n";


/*
 * inheritance atau pewarisan dalam oop
 */

class Apple extends Fruits
{
    public function get_fruit()
    {
        echo "nama buah {$this->name} berwarna {$this->color}";
    }    
}

$apple = new Fruits('apple', 'merah');
$apple->get_fruit();
?>