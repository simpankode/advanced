<?php 
class Person
{
    protected $name;

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

//properti tidak bisa di akses secara langsung, maka akan terjadi error
echo "Hello " . $person->name = "prayogaea" . PHP_EOL;

//set value dari properti name
echo $person->set_name('prayaogaea');
//akses value dari properti name
echo $person->get_name() . PHP_EOL;


/*
 *  enkapsulasi protected, jenis enkapsulasi ini biasanya digunakan untuk melindungsi informasi yang bersifat rahasia,
 *  dimana jika anda menggunakan protected pada method atau properti maka anda hanya bisa mengakses properti tersebut hanya dari dalam class tersebut.
 *  
 *  perbedaan antara private dan protected
 *  jika protected tidak bisa diakses kecuali dari dalam class itu sendiri,
 *  jika anda mengakses nya dari luar class maka akan muncul error
 */
?>