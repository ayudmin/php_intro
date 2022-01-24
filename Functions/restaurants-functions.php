<?php 

// definning functions intheir own file


function restaurant_check($meal, $tax, $tip){
    $total_tax = $meal + ($tax / 100);
    $total_tip = $meal + ($tip / 100);
    $total_amount = $meal + $total_tax + $total_tip;

    return $total_amount;
}


function payment_method($cash_in_hand, $amount){
    if ($amount > $cash_in_hand){
        return 'Credit Card';
    } else{
        return 'Cash';
    }
}


?>