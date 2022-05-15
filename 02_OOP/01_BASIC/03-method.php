<?php 
class Person
{
    var $name;

    //method
    function setName($newName)
    {
        $this->name = $newName;
    }

    //method
    function getName()
    {
        return $this->name;
    }
}
?>