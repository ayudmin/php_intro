<?php 

// declaring functions
// function arguments
// default values for arguments

function page_header($color = 'red'){
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bg="#' . $color . '">';
}

page_header('cc3399');
print 'Welcome, $user';
page_footer();


function page_footer(){
    print '<br>';
    print '<br>';
    print 'No time, make it.';
    print '</body></html>';
}





?>