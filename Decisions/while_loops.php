<?php 

$i = 1;
print '<select name="people">';
while ($i <= 10){
    print "<option>$i</option>";
    $i ++;
}
print '</select>';

?>