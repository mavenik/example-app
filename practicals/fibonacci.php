<?php
// Function to generate the Fibonacci sequence
function generateFibonacci($n) {
    $fibonacciSequence = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }
    return $fibonacciSequence;
}

// Define the number of terms in the sequence
$numberOfTerms = 10;
$result = generateFibonacci($numberOfTerms);

// Display the Fibonacci sequence
echo "Fibonacci Sequence: ";
for ($i = 0; $i < $numberOfTerms; $i++) {
    echo $result[$i];
    if ($i !== $numberOfTerms - 1) {
        echo ", ";
    }
}
echo "\n";
?>

