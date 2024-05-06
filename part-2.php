<?php
    $selected = $_POST["order_name"];
    $quantity = $_POST["number_order"];
    $cash = $_POST["order_cash"];
    $value = null;
    $total_payment = null;
    $total = null;

    switch ($selected){
        case "Fishball":
            $value = 30;
            break;
        case "Kikiam":
            $value = 40;
            break;
        case "Corndog":
            $value = 50;
            break;  
        default:
            break;

    }

    $total_payment = ($quantity * $value);
    $total = ($cash - $total_payment);

    echo nl2br("Your Total Payment is: " . $total_payment . "\n" ); 
    echo nl2br("Your Change is: " . $total . "\n");
    echo "Thank you for Ordering!";




    ?>