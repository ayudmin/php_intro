<?php 

// variable scope
// $GLOBALS array
// modifying a variable with $BLOBALS
// global keyword

$dinner =   'Curry Cuttlefish';

function vegetarian_dinner(){
    print "Dinner is $dinner, or ";
    $dinnner = 'Sauteed Pea Shoots';
    print $dinner;
    print '<br>';
}


function kosher_dinner(){
    print "Dinner is $dinner, or ";
    $dinner = 'Kung Pao Chicken';
    print $dinner;
    print '<br>';
}


print "Vegetarian";
print '<br>';
vegetarian_dinner();
print "Kosher";
print '<br>';
kosher_dinner();

print "Regular dinner is $dinner";




function microbiotic_dinner(){
    $dinner = 'some veg';
    print "Dinner is $dinner";
    print "But i would rather have, ";
    print $GLOBALS['dinner'];
    print '<br>';

}
print '<br>';
print '<br>';
microbiotic_dinner();
print '<br>';
print "Regular dinner is $dinner";


function hungry_dinner(){
    $GLOBALS['dinner'] .= ' and Deep-Fried Taro';
}

print '<br>';
print '<br>';
print "$dinner 1" ;
print '<br>';
print '<br>';
hungry_dinner();
print '<br>';
print '<br>';
print "$dinner 2" ;


$dinner = 'Chappati';

function korofo_dinner(){
    global $dinner;
    print '<br>';
    print '<br>';
    print "Dinner was $dinner, but now it is";
    $dinner = 'Korofo';
    print '<br>';
    print '<br>';
    print $dinner;
}


korofo_dinner()

?>