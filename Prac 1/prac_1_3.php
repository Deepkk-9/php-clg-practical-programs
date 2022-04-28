<?php

$n_one = $_POST["n_one"];
$n_two = $_POST["n_two"];

$max = $n_one > $n_two ?  "$n_one is Greater" : "$n_two is Greater";

echo "<h1> $max </h1>";
