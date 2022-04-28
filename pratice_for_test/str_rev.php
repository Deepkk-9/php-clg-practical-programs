<?php

// echo "Program to reverse the string";

$str = "This is a string";
// $elm = "";
$elm = array("");

// for ($i = strlen($str) - 1; $i >= 0; $i--) {
//     $elm .= $str[$i];
// }

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    array_push($elm, $str[$i]);
}

$sRev = implode($elm);

echo $sRev;
// echo $elm;
