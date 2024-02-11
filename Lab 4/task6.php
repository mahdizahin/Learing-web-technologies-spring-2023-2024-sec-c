<?php
$array = array(3,6,9,96,93,36,39,'IF I DO SOMETHING WRONG,ASTAGFIRULLAH');

$src=3;

$found;
for($i=0; $i<count($array); $i++){

    if ($array[$i] == $src) {
        $found = true;
        break; 
    }
}


if ($found==1) {
    echo "Element found in the array.\n";
} else {
    echo "Element not found in the array.\n";
}
?>