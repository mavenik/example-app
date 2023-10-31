<?php
$rows = 5; // Change the value of $rows to control the number of rows in the pattern

for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo PHP_EOL;
}
?>

