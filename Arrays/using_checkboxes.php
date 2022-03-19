<form action="using_checkboxes.php" method="POST">
    Apples: <input type="checkbox" name="fruits[]" value="apple">
    Oranges:<input type="checkbox" name="fruits[]" value="orange">
    Peas:<input type="checkbox" name="fruits[]" value="pea">
    <input type="submit">
</form>

<?php 

$fruits = $_POST["fruits"];

echo $fruits[1];

?>