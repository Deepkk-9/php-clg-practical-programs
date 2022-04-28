<?php

// echo "Fibonacci Series program";
$lim = 0;
$num1 = 0;
$num2 = 1;
$num3;


if ($lim > 2) {
    echo "Fibonacci Series is : ";
    echo "<br> $num1 <br> $num2";

    $i = 0;
    while ($i < $lim - 2) {
        $num3 = $num1 + $num2;
        echo "<br> $num3";
        $num1 = $num2;
        $num2 = $num3;
        $i++;
    }
}
