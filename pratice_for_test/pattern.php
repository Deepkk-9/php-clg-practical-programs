<?php

// echo "This is a pattern program";

$lim = 5;


// *
// **
// ***
// ****
for ($i = 1; $i <= $lim; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";

// ****
// ***
// **
// *
for ($i = $lim; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


echo "<br>";
echo "<br>";

// ****
//  ***
//   **
//    *

for ($i = $lim; $i > 0; $i--) {
    for ($m = $i; $m < $lim; $m++) {
        echo "&nbsp ";
    }

    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";

// * * * *
//  * * *
//   * *
//    *

for ($i = $lim; $i > 0; $i--) {
    for ($m = $i; $m < $lim; $m++) {
        echo "&nbsp";
    }

    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}



echo "<br>";
echo "<br>";

//    *
//   * *
//  * * *
// * * * *

for ($i = 1; $i <= $lim; $i++) {
    for ($m = $i; $m < $lim; $m++) {
        echo "&nbsp";
    }

    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


echo "<br>";
echo "<br>";

//     *
//    **
//   ***
//  ****

for ($i = $lim; $i > 0; $i--) {
    for ($m = 0; $m < $i; $m++) {
        echo "&nbsp ";
    }

    for ($j = $i; $j <= $lim; $j++) {
        echo "*";
    }
    echo "<br>";
}
