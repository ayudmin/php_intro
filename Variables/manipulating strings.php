<?php 

// $_POST['zipcode'] holds the value of the submitted form parameter 'zipcode'

$zipcode = trim($_POST['zipcode']);

// now $zipcode holds that value with any or tailing spaces removed

$zipcode_length = strlen($zipcode);

// complain if the zipcode is not 5 characters long

if ($zipcode_length != 5){
    print 'Please enter a zipcode which is 5 characters long.';
    print '<br>';
    print $zipcode_length;
    print '<br>';
    print $zipcode; // displays nothing since no zipcode has been submitted as a POST
}


// the above code can be chained as below

// if (strlen(trim($_POST['zipcode'])) != 5){
//     print 'Please enter a zipcode that is 5 characters long.';
// }


// comparing strings

if ($_POST['email'] == 'president@j1.gov'){
    print 'Welcome South Sudan President';
}

// strcasecmp function can be used to ignore capitlization

// formatting with printf()

$price = 5; $tax = 0.075;

printf("The dish costs $%.2f", $price * (1 + $tax));


// formatting dates with prinf

$zip = '6520';
$month = '2';
$day = '6';
$year = '2007';

print '<br>';
printf('Zip is %05d and the date is %02d/%02d/%d', $zip, $month, $day, $year);


// changing case using strtolower ans strtoupper

print '<br>';
print strtolower('Beef, CHICKEN, Pork, ducK');
print '<br>';
print strtoupper('Beef, CHICKEN, Pork, ducK');





?>