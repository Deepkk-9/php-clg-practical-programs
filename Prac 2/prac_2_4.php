<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

$num1 = $_POST['n_one'];
$num2 = $_POST['n_two'];
$num3 = $_POST['n_three'];

if ($num1 > $num2 and $num1 > $num3) {
    echo "<h1>$num1 is Greater</h1>";
} elseif ($num2 > $num1 and $num2 > $num3) {
    echo "<h1>$num2 is Greater</h1>";
} else {
    echo "<h1>$num3 is Greater</h1>";
}
