<?php 
// defining a class

class Fruit{
    /* defining a class called Fruit */

    // properties

    public $name;
    public $color;

    // methods (functions)

    function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }

    function get_name(){
        return $this->name;
    }


}

$apple = new Fruit('Apple','Red');
$banana = new Fruit('Banana','Yello');

echo $apple->get_name();
print('<br>');
print $banana->get_name();
print('<br>');
print $banana->get_color();
print('<br>');
// instance of

var_dump($apple instanceof Fruit);


?>