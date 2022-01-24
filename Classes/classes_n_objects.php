<?php 


// defining classes
// creating objects from classes
// Defining a static method

class Entree{
    public $name;
    public $ingredients = array();

    public function hasIngredient($ingredient){
        return in_array($ingredient, $this->ingredients);
    }

    public static function get_sizes(){
        return array('large','medium','small');
    }
}


$soup = new Entree;
$soup->name = 'Chicken Soup';
$soup->ingredients = array('Chicken','water');

$sandwitch = new Entree;
$sandwitch->name = 'Chicken Sandwich';
$sandwitch->ingredients = array('Chicken', 'bread');


foreach (['Chicken','water','bread','lemon'] as $ing ){
    if ($soup->hasIngredient($ing)){
        print "Soup contains $ing.";
        print '<br>';
    }
    if ($sandwitch->hasIngredient($ing)){
        print "Sandwitch contains $ing.";
        print '<br>';
    }
}

?>