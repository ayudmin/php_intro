<?php 


// defining classes

class Entree{
    public $name;
    public $ingredients = array();

    public function hasIngredients($ingredients){
        return in_array($ingredients, $this->ingredients);
    }
}




?>