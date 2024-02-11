<?php

echo "<h2>Odd numbers between 10 to 100</h2>";
for ($i = 10; $i <= 100; $i++) {
    // Check if the number is odd
    if ($i % 2 != 0) {
        echo "<h2>$i</h2>";
    }
}



?>