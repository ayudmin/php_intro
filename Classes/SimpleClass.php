<?php

class Fruit {


    // properties

    public $name;

    public $color;

    // methods

    function set_name($name){

        $this->name = $name;

    }

    function get_name(){

        return $this->name;
    }
}


$gb = new Fruit();

$gb->set_name('garbage');

print $gb->get_name();

?>