<?php 
// defining a class

class Fruit{
    /* defining a class called Fruit */

    // properties

    public $name;
    public $color;

    // methods (functions)

    function set_name($name){
        $this->name = $name;
    }

    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }

    function get_name(){
        return $this->name;
    }


}

$apple = new Fruit();
$banana = new Fruit();

$banana->set_name('Banana');
$banana->set_color('Yellow');
$apple ->set_name('Apple');
$apple->set_color('Red');

echo $apple->get_name();
print('<br>');
print $banana->get_name();
print('<br>');
print $banana->get_color();


?>