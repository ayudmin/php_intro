<?php 


// defining classes
// creating objects from classes
// Defining a static method
// Calling a static method
// Initializing an object with a constructor
// Calling constructors
// Throwing an exception



class Entree{
    public $name;
    public $ingredients = array();

    public function __construct($name, $ingredients){
        if (! array($ingredients)){
            throw new Exception ('$ingredients must be an array');
        }

        $this->name = $name;
        $this->ingredients = $ingredients;
        
    }

    public function hasIngredient($ingredient){
        return in_array($ingredient, $this->ingredients);
    }

    public static function get_sizes(){
        return array('large','medium','small');
    }
}


$soup = new Entree('Chicken Soup', array('Chicken','water'));


$sandwitch = new Entree('Sandwitch', array('bread','Chicken'));


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


$sizes = Entree::get_sizes();

print $sizes[1];

?>