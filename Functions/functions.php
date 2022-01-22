<?php 

// declaring functions
// function arguments
// default values for arguments
// multiple arguments

function page_header($color = 'red', $title = 'my 1site'){
    print '<html><head><title>Welcome to ' . $title . '</title></head>';
    print '<body bg="#' . $color . '">';
}

page_header('cc3399',"francis' blog");
print 'Welcome, $user';
page_footer();


function page_footer(){
    print '<br>';
    print '<br>';
    print 'No time, make it.';
    print '</body></html>';
}





?>