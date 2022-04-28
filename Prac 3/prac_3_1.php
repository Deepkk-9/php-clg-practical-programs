<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<?php

$num = $_POST['num'];

$fact = 1;

for ($i = 1; $i <= $num; $i++) {
    $fact = $fact * $i;
}

echo "<h2>The factorial of $num is: $fact</h2>";
