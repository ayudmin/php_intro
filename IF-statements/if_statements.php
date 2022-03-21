<?php 

$is_male = FALSE;
$is_tall = FALSE;

if ($is_male && $is_tall){
    echo "You are a tall male";
} elseif ($is_male && !$is_tall){

    echo "You are a short male";
}
 elseif (!$is_male && $is_tall){

    echo "You are a tall female";

 } else {
    echo "You are not male nor tall";
}

?>