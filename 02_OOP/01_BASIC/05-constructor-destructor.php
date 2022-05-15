<?php 
class Person
{
    var $name;

    //Method Constructor
    function __construct($person_name)
    {
        echo "first Class";        
    }

    function set_name($new_name)
    {
        $this->name = $new_name;
    }

    function get_name()
    {
        return $this->name;
    }

    //Method Destructor
    function __destruct()
    {
        echo "last Class";
    }
}
?>