<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        function getmax($num1, $num2, $num3){

            if ($num1 >= $num2 && $num1 >= $num3){
                
                return $num1;

            }elseif($num2 >= $num1 && $num2 >= $num3){

                return $num2;

            } else {
                return $num3;
            }
        }
        

        echo getmax(300 , 1010000, 10000);
    ?>
</body>
</html>