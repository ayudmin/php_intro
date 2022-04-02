<?php 


class Person
{
    public $name = "";

    function getName()
    {
        return $this->name;
    }

    function setName($newName)
    {
        $this->name = $newName;
    }
}

?>