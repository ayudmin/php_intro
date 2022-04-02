<?php 


class Person
{
    public $name;

    final function getName()
    {
        return $this->name;
    }

    function setName($newName)
    {
        $this->name = $newName;
    }
}

class Child extends Person
{

    // syntax error

    function getName()
    {
        // do something
    }
}

?>