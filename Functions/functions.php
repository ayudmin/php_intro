<?php 

// declaring functions
// function arguments
// default values for arguments
// multiple arguments
// Multiple optional arguments
// changing argument values
//returning value from a function
// using a return value in an if statement
// returning an array from a function
// multiple return statements


function page_header($page_id, $color = 'red', $title = 'my 1site'){
    print '<html><head><title>Welcome to ' . $title . '</title></head>';
    print '<body bg="#' . $color . '"><h1>' . $page_id .'</h1>';
}

page_header('1');
print 'Welcome, $user';

page_footer();


function page_footer(){
    print '<br>';
    print '<br>';
    print 'No time, make it.';
    print '</body></html>';
}


function countdown($top){
    while($top > 0){
        print "$top..";
        $top--;
    }
}

$counter = 5;
countdown($counter);


function restaurant_check($meal,$tax,$tip){
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    
    $total_notip = $meal + $tax_amount;
    $total_amount = $meal + $tax_amount + $tip_amount;

    return array($total_amount, $total_notip);
}

$price = restaurant_check(500,20,10);
print '<br>';
//print "$" . "$price";

$totals = restaurant_check(500,20,10);

if ($total[0] < 1000){
    print 'total amount plus tip is less than 1000';
}

if ($total[1] < 200){
    print 'Amount with no tip is less than 200';
}



$total = restaurant_check(15.22,8.25,15);

print '<br>';
print 'I only have $20 in cash, so...';

if ($total > 10){
    print 'I will pay using credit card';
} else {
    print 'I will pay using cash';
}


function payment_method($cash_in_hand, $amount){
    if ($amount > $cash_in_hand){
        return 'Credit Card';
    } else {
        return 'Cash';
    }
}

print $total[0];
$method_used = payment_method(1000,$total[1]);
print '<br>';
print $method_used;
?>