<?php
function checkIsPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
        return true;
    }
}

function printIsPrime($number)
{
    for ($a = 0; $a <= $number; $a++) {
        if (checkIsPrime($a)) {
            echo "$a" . ",";
        }
    }
}

printIsPrime(100);


?>