<?php 

// declaring functions
// function arguments
// default values for arguments
// multiple arguments
// Multiple optional arguments
// changing argument values
//returning value from a function



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

    $total_amount = $meal + $tax_amount + $tip_amount;
    return $total_amount;
}

$price = restaurant_check(500,20,10);
print '<br>';
print "$" . "$price";

?>