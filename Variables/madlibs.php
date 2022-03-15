<form action="madlibs.php" method="GET">
    Color: <input type="test" name="color">
    Plural Noun: <input type="test" name="noun">
    Celebrity: <input type="test" name="celebrity">
    <input type="submit">
</form>

<?php 

$color = $_GET["color"];

$noun = $_GET["noun"];

$celebrity = $_GET["celebrity"];

echo "Roses are $color" . "<br>";

echo "$noun are blue". "<br>";

echo "I love $celebrity";

?>