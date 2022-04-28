<?php

interface Shape
{
    function calcArea();
}

class Circle implements Shape
{
    public $radius;

    function __construct($r)
    {
        $this->radius = $r;
    }

    function calcArea()
    {
        $this->ans = $this->radius * $this->radius;
        echo "Area of Circle is : $this->ans<br>";
    }
}

class Rectangle implements Shape
{
    public $Width, $Length;

    function __construct($w, $l)
    {
        $this->Width = $w;
        $this->Length = $l;
    }

    function calcArea()
    {
        $this->ans = $this->Length * $this->Width;
        echo "Area of Rectangle is : $this->ans<br>";
    }
}

$c = new Circle(3);
$r = new Rectangle(3, 9);

$c->calcArea();
$r->calcArea();
