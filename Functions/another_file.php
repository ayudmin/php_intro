<?php 

// running code in another file

require 'restaurants-functions.php';


/* $25 check, plus 8.87% tax, plus 20% tip */

$total_bill = restaurant_check(25, 8.87, 20);

/* i have got $30 */

$cash = 30;

print "I need to pay with " . payment_method($cash, $total_bill);


?>