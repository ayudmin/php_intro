<?php 

print '<select name="people">';
for ($i = 1; $i <= 10; $i++){
    print "<option>$i</option>";
}

print '</select>';

// multiple expresion in for loops

print '<br>';
print '<br>';
print '<select name="doughnuts">';

for ($min = 1, $max = 10; $min < 50; $min += 10, $max += 10 ){
    print "<option>$min - $max</option>";

}

print '</select>';


?>