<?php 

// use the SQLite database 'dinner.db'
$db = new PDO('sqlite:dinner.db');

// define what the allowable meals are
$meals = array('breakfast','lunch','dinner');

// check if submitted form parameter "meal" is one of 'breakfast','lunch' or 'dinner'
if (in_array($_POST['meal'], $meals)){

        // if so get all the dishes for the specified meal
        $stmt = $db->prepare('SELECT dish,price FROM meals WHERE meal LIKE ?');
        $stmt->execute(array($_POST['meal']));
        $rows = $stmt->fetchAll();

        // if no dishes were found onthe server, say so

        if (count($rows) == 0 ){
            print 'No dishes Available.';
        } else {

            // print out each dish and it's price as a row in an html table
            print "<table><tr><th>Dish</th><th>Price</th></tr>";
            for each ($rows as $row){
                print "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
            }
            print "</table>";
        }
} else {
    // This  message prints if the submitted parameter "meal" isn't
    // 'breakfast', 'lunch' or 'dinner'

    print "Unknown meal.";
}

?>