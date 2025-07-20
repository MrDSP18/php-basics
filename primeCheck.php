<?php
$n = 13;
$p = true;
if ($n < 2)
    $p = false;
for ($i = 2; $i <= sqrt($n); $i++) {
    if ($n % $i == 0) {
        $p = false;
        break;
    }
}
echo $p ? "$n is prime" : "$n is not prime";
?>
