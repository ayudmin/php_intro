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


?>