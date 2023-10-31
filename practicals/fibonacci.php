<?php
function fibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

// Define the number of terms you want in the sequence
$number_of_terms = 10;
$result = fibonacci($number_of_terms);

// Display the Fibonacci sequence
echo "Fibonacci Sequence: ";
for ($i = 0; $i < $number_of_terms; $i++) {
    echo $result[$i];
    if ($i != $number_of_terms - 1) {
        echo ", ";
    }
}
echo "\n";
?>

