<?php

// defining variables in php denoted by a $ followed by the variable name 

$plates = 5;
$dinner = 'Beef';
$cost_of_dinner = 8.95;
$cost_of_lunch = $cost_of_dinner;


$footer_content = 'This is the footer content.';

// assignment also works with here documents as well

$page_header = <<<HTML_HEADER

<html>
<head><title>Menu</title></head>
<body bgcolor="#fffed9">
<h1>Dinner</h1>
<p>$dinner</p>
<p>$plates</p>
<p>$cost_of_lunch</p>
HTML_HEADER;

$page_footer = <<<HTML_FOOTER

</body>
<footer>
    <p>$footer_content</p>
<footer>
</html>

HTML_FOOTER;

print $page_header;
print $page_footer;


// Variable names may only contain
// uppercase or lowercase basic latin letters (A - Z and a - z)
// digits (0 - 9)
// umderscore (_)
// starts with a letter or underscore but not number or special character allowed or included (* + - / @)

?>