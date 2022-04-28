<?php

class Rectangle1
{
    function perm_area($l, $b)
    {
        $ansP = 2 * ($l + $b);
        $ansA = $l * $b;
        echo "The Perimeter of rectangle is : $ansP";
        echo "<br> The Area of rectangle is : $ansA";
    }
}

$rec = new Rectangle1();
$rec->perm_area(9, 3);
