<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

$num = $_POST['num'];
$fno = 0;
$sno = 1;
$i = 1;

echo "<h1>$fno <br>";
echo $sno . "<br>";

do {
    $tno = $fno + $sno;
    echo $tno . "<br>";
    $fno = $sno;
    $sno = $tno;
    $i++;
} while ($i < $num - 1);

echo "</h1>";
