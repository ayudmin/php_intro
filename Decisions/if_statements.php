<?php 

$logged_in = True;

if ($logged_in){
    print 'Welcome, trusted user';
}

print '<br>';
print '<br>';
print " *********** Starting execution ******** \n";
if ($logged_in){

    print '<br>';print '<br>';
    print 'Welcome, user';
    print '<br>';print '<br>';
    print 'This is only printed when $logged_in evaluates to true';
}
print '<br>';print '<br>';
print ' ********* End of execution ********';

// using else in statements

print '<br>';
print '<br>';
$signee_in = FALSE;
if ($signee_in){
    print 'Asap! Hello Dude?';
} else {
    print '<br>';print '<br>';
    print 'Howdy, Stranger.';
}

// using elseif in statements

$logged_in = FALSE;
$messages = FALSE;
$emergency = FALSE;

if ($logged_in){
    print '<br>';
    print 'Hello, user';
} elseif ($messages){
    print '<br>';
    print 'Hello stranger yo have some messages';
} elseif ($emergency) {
    print '<br>';
    print 'Hello stranger you dont have messages but emmergency';
}

// combinig if elseif and else statements on a program

$base_case = FALSE;
$case_1 = FALSE;
$case_2 = true;


if ($base_case){
    print '<br>';print '<br>';
    print 'base case';
} elseif ($case_1){
    print '<br>';print '<br>';
    print 'case_1';
} elseif ($case_2){
    print '<br>';print '<br>';
    print 'case 2';
} else {
    print '<br>';print '<br>';
    print 'Hey, i dont know u!';
    print '<br>';print '<br>';
}



// comparisons in making decisions

if ($new_messages == 10){
    print 'You have 10 new messages';
}

if ($new_messages == $max_messeges){

    // this gets printed since $max and $new are empty and equal
    print '<br>';
    print 'you have the maximum number of messages';
}

if ($laham == 'goat meat'){
    print 'Yum! i love goat meat';
}


// checking for inequality

if ($messages != 10){

    // this gets executed since $message is empty and not equal to 10
    print '<br>';
    print '<br>';
    print 'You dont have 10 new messages.';
}

if ($dinner != 'porredge'){
    print '<br>';
    print '<br>';
    print 'I guess we are out of floor';
}


    // use of greater, less 

if ($age > 17){
    print 'You are old enough to download the movie';
}

if ($age >= 65){
    print 'You are old enough for the discount';

}

// logical operators

if (($age >= 13) && ($age < 65)){
    print "You are too old for a kid's discount and too young for an adult's";
}


?>