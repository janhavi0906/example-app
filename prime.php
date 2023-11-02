<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

for ($i = 2; $i <= 10; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
?>

