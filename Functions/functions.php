<?php 

// declaring functions

function page_header(){
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bg="#ffffff">';
}

page_header();
print 'Welcome, $user';
page_footer();


function page_footer(){
    print '<br>';
    print '<br>';
    print 'No time, make it.';
    print '</body></html>';
}

?>