<?php 

$vegetables = array("mango","pawpaw");                            

$dinner = array(
    0 => 'Bamiya and lam',
    1 => 'Ruzz and samak',
    2 => 'Braised bamboo fangus'

);


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

print '<br>';
print '<br>';
print $age['Peter'];


print '<br>';
print '<br>';
print "hello $vegetables[0]";

print '<br>';
print '<br>';

print "hello $dinner[0]";


// declaration of arrays

$cars = array("Volvo", "Bmw", "Toyota");

print '<br>';
print '<br>';
print "I like $cars[1] cars";


// length array

print '<br>';
print '<br>';
print count($cars);


echo $addresses[0];

echo $addresses;

$addresses[0] = "spam@cyperpromo.net";
print $addresses;

// assigning of indexed arrays

$addresses[0] = "root@example.com";
$addresses[1] = "abuse@example.com";
$addresses[2] = "spam@example.com";


// assigning an associative array

$price['gasket'] = 15.29;
$price['wheel'] = 20.5;
$price['tire'] = 50.00;


// initializing an array using the array() construct


$addresses = array("spam@cyberpromo.net","abuse@example.com","root@example.com");

print '<br>';
print '<br>';

// creating associative arrays using the array() construct

$price = array(
    'gasket' => 15.29,
    'wheel' => 20.5,
    'tire' => 50.00

);

print $price['gasket'];
print '<br>';
print '<br>';
print $addresses[0];

// adding values to the end of an array

$family = array('Fred','William');
$family[] = 'Francis';


print '<br>';
print '<br>';
print "$family[0] $family[1]$family[2]";

$PERSON = array(
    'name' => "person1"
);

$PERSON[] = 'Dorin';

print '<br>';
print '<br>';
print $PERSON['name'];
print $PERSON['0'];

// assigning range values

$numbers = range(2,5);

print '<br>';
print '<br>';
print "$numbers[0], $numbers[1], $numbers[2]";

$letters = range('a','z');
print '<br>';
print "$letters[0], $letters[1], $letters[2], $letters[3], $letters[4], $letters[5], $letters[6], ...., $letters[25]";
print '<br>';
print count($letters);
?>