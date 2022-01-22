<?php 

// declaring functions
// function arguments
// default values for arguments
// multiple arguments
// Multiple optional arguments

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





?>