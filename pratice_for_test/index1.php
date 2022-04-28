<?php

// echo "Hello World! <br> ";

// $arr = array("d" => "Deep ", " Drashti ", " and ", " their ", " childrens ");

// foreach ($arr as $key) {
//     echo $key;
// }



// star pattern practice

// *
// * *
// * * *


// for ($i = 1; $i <= 3; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo "<br>";
// }

// echo "<br>";
// echo "<br>";
// echo "<br>";

// for ($i = 1; $i <= 3; $i++) {
//     for ($j = 3; $j >= $i; $j--) {
//         echo "*";
//     }
//     echo "<br>";
// }

// echo "<br>";
// echo "<br>";
// echo "<br>";

// for ($i = 1; $i <= 3; $i++) {
//     for ($j = 3; $j >= $i; $j--) {
//         echo "*";
//     }
//     echo "<br>";
// }


// a  //b


$len = 4;
$i = 4;
$ss;

echo "<h1>";
while ($i > 0) {
    $j = 4;
    while ($j > $i) {
        echo "&nbsp &nbsp";
        $j--;
    }

    $m = 0;
    while ($m < $i) {
        echo "* ";
        $m++;
    }

    echo "<br>";
    $i--;
}

for ($i = 4; $i > 0; $i--) {
    for ($j = 4; $j > $i; $j--) {
        echo "&nbsp &nbsp";
    }

    for ($m = 0; $m < $i; $m++) {
        echo "* ";
    }
    echo "<br>";
}
