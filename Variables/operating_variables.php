<?php 

$price = 3.95;
$tax_rate = 0.08;
$tax_amount = $price * $tax_rate;
$total_cost = $price + $tax_amount;


$username = 'francis';
$domain = '@ayumefrancis.info';
$email_address = $username . $domain;

print 'The tax is ' . $tax_amount;
print "<br>"; // this prints a line break
print 'The total cost is ' .$total_cost;
print "<br>"; // this prints a line break
print $email_address;

// addition

$price = $price + 3;

print '<br>';
print $price;

// OR

$price += 3;

PRINT '<br>';
print $price;

// concatenating strings

$_usermame = 'francis';
$_domain = '@ayumefrancis.info';

// regular concatenation

$_usermame = $_usermame . $_domain;

print "<br>";
print $_usermame;

// combined increamenting

$_usermame .= '@another';

print '<br>';
print $_usermame;

// increamenting and decreamenting with ++ --

$birthday = $birthday + 1;

print '<br>';
print  $birthday;

$_newbd = $birthday;
++$_newbd;

print '<br>';
print $_newbd;

?>