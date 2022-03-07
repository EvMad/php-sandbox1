<!-- functions -->

<?php

function myCalculator($num01, $oper, $num02) {
    $sum;

    switch ($oper) {
        case "add":
            $sum = $num01 + $num02;
            break;
        case "sub":
            $sum = $num01 - $num02;
            break;
        default:
        $sum = "There was an error calculating the dogs and cats!";
        break;
    }

}

?>