<?php
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

echo "Fibonacci Series: ";
for ($i = 0; $i <= 15; $i++) {
    echo fibonacci($i) . " ";
}