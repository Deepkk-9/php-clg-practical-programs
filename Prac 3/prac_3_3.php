<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

$num = $_POST['num'];
$i = 2;
$flag = true;

while ($i < $num) {
    if ($num % $i == 0) {
        $flag = false;
    }
    $i++;
}

if ($flag == true) {
    echo "<h1>Number $num is Prime</h1>";
} else {
    echo "<h1>Number $num is Composite or non-prime</h1>";
}
