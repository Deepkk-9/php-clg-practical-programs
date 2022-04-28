<?php

// echo "Prime number program";

$num = 17;

if ($num == 1 or $num == 2) {
    echo "$num is a Prime Number";
} elseif ($num < 0) {
    echo "Please enter number greater than 0";
} elseif ($num == 0) {
    echo "$num is neither Prime nor Composite";
} else {
    $countd = 0;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $countd++;
        }
    }

    if ($countd > 0) {
        echo "$num is a Composite number";
    } else {
        echo "$num is a Prime number";
    }
}
