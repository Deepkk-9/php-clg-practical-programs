<?php

// echo "Reverse the number program";

$num = 123;
$numcp = $num;
$rev = 0;

while ($numcp > 0) {
    $r = $numcp % 10;
    $rev = $rev * 10 + $r;
    $numcp = (int)($numcp / 10);
}

echo "The reverse of $num number is $rev";
