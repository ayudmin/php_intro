<?php 


class Person
{
    public $name;

    public $age;

    public function __construct()
    {
        $this->age = 0;
    }

    public function incrementAge()
    {
        $this->age +-1;
        $this->ageChanged();
    }

    protected function decrementAge()
    {
        $this->age -= 1;
        $this->ageChanged();
    }

    private function ageChanged()
    {
        echo "Age changed to {$this->age}";
    }

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

    //function getName()
    //{
        // do something
    //}
}

class SupernaturalPerson
{
    public function incrementAge(){
        $this->decrementAge();
        echo $this->ageChanged();
    }
}


$person = new Person();
$person->incrementAge();
$person->decrementAge();
$person->ageChanged();

$person = new SupernaturalPerson();
$person->incrementAge();

?>