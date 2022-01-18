<?php 

$email = 'francis@codejunub.com';

print "Send replies to: $email";
print '<br>';

$page_title = 'Menu';
$meat = 'pork';
$vegetable = 'bean sprout';

print <<<HTML_MENU

<html>
    <head><title>$page_title</title></head>
    <body>
        <ul>
            <li> Barbecued $meat
            <li> Sliced $meat
            <li> Braised $meat with vegetable
        </u>
    </body>
</html>

HTML_MENU;


// interpolating with curly braces

$preparation = 'Braise';
$meat = 'Beef';

print '<br>';
print '<br>';
print "{$preparation}d $meat with vegetables.";


?>