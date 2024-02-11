<?php

function evenOddDetect($number){
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}
$number=5;
echo "Entered Number is {$number} <br/>";
echo "THIS NUMBER IS : ".evenOddDetect($number);

?>