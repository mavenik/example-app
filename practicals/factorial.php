<?php
// Function to calculate the factorial
function factorial($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Define the number for which you want to find the factorial
$number = 5;
$result = factorial($number);

// Display the factorial
echo "Factorial of $number is: $result\n";
?>

