<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

$num = $_POST['num'];
$temp = $num;
$rem = 0;
$rev = 0;

while ($num > 0) {
    $rem = (int)($num % 10);
    $rev = $rev * 10 + $rem;
    $num = (int)($num / 10);
}

echo "<h1> The reverse of $temp is: $rev";
?>