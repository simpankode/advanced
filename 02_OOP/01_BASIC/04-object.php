<?php 
//class eksternal
require_once('03-method.php');

//object
$name = new Person();
$name->setName('Prayoga Eka Ardiansyah');
echo "Names : " . $name->getName();


//class internal
/*--------------------------------------*/
class Person
{
    var $name;

    function setName($newName)
    {
        $this->name = $newName;
    }

    function getName()
    {
        return $this->name;
    }
}

//object
$name = new Person();
$name->setName('Prayoga Eka Ardiansyah');
echo "Names : " . $name->getName();
?>