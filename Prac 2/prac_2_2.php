<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<?php

$n_one = $_POST["n_one"];

if ($n_one > 0) {
    echo "<h1> $n_one is Positive </h1>";
} elseif ($n_one == 0) {
    echo "<h1> $n_one is zero... </h1>";
} elseif ($n_one == null) {
    echo "<h1>Invalid...</h1>";
} else {
    echo "<h1> $n_one is Negative </h1>";
}
