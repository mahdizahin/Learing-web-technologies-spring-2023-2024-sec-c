<?php

function vatcalculation($amount){
 $vatRate = 0.15;
 return $amount*$vatRate;
}

$amount=1000;
echo "Vat of {$amount} is : ". vatcalculation($amount);

?>