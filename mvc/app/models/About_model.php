<?php 
class About_model
{
    private $name = 'Prayoga Eka Ardiansyah';
    private $age = 21;
    private $address = 'Malang, Indonesia';

    public function getAbout()
    {
        return $this->name;
        return $this->age;
        return $this->address;
    }
}
?>