<?php 


// defining classes
// creating objects from classes

class Entree{
    public $name;
    public $ingredients = array();

    public function hasIngredient($ingredient){
        return in_array($ingredient, $this->ingredients);
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