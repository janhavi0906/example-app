<?php
function generateFibonacci($n) {
    $fibonacci = array();
    
    if ($n >= 1) {
        $fibonacci[] = 0; // The first Fibonacci number
    }
    
    if ($n >= 2) {
        $fibonacci[] = 1; // The second Fibonacci number
    }
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    return $fibonacci;
}

$n = 10; // Change this to the number of Fibonacci numbers you want to generate

$fibonacciNumbers = generateFibonacci($n);

foreach ($fibonacciNumbers as $number) {
    echo $number . " ";
}

?>

