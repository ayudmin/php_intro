<?php 

// variable scope

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








?>