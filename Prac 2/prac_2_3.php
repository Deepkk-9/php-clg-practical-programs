<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

$num1 = $_POST['n_one'];
$opt = $_POST['opt'];
$num2 = $_POST['n_two'];

switch ($opt) {
    case "+":
        $ans = $num1 + $num2;
        echo "<h1>Addition of $num1 + $num2 = $ans</h1>";
        break;
    case "-":
        $ans = $num1 - $num2;
        echo "<h1>Subtraction of $num1 - $num2 = $ans</h1>";
        break;
    case "*":
        $ans = $num1 * $num2;
        echo "<h1>Multiplication of $num1 * $num2 = $ans</h1>";
        break;
    case "/":
        $ans = $num1 / $num2;
        echo "<h1>Division of $num1 / $num2 = $ans</h1>";
        break;
    default:
        echo "<h1>Invalid Operation</h1>";
}
