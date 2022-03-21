
<form action="associative_arrays.php" method="POST">

    <input type="text" name="student">
    <input type="submit">

</form>

<?php 

$grades = array("Jim" => "A+", "John" => "B+", "yason" => "B+", "23" => 'B+'); 

// $test_grades = {

//     "Andy" => "A+",
//     "Francis" => "B+",
//     3 => 98.2
// }


echo $grades[$_POST["student"]];

?>