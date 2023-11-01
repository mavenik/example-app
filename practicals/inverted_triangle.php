<?php
$rows = 5; // Number of rows in the pattern

// Generating the pattern
for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo PHP_EOL;
}
?>

