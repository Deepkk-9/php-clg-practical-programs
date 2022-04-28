<?php

$n_one = $_POST["n_one"];
$n_two = $_POST["n_two"];

echo "<b> Before Swapping: </b>
    <br> 1st number = $n_one
    <br> 2nd number = $n_two";

$temp = $n_one;
$n_one = $n_two;
$n_two = $temp;

echo "<br>";
echo "<br>";
echo "<br>";

echo "<b> After Swapping: </b> 
    <br> 1st number = $n_one
    <br> 2nd number = $n_two";
