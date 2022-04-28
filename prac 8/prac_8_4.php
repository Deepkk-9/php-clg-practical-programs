<?php
class ParentClass
{
    function pFunc()
    {
        echo "We are in Parent class.<br>";
    }
}

class Child1 extends ParentClass
{
    function cFunc1()
    {
        echo "We are in Child1 class.<br>";
    }
}

class Child2 extends Child1
{
    function cFunc2()
    {
        echo "We are in Child2 class.<br>";
    }
}

$c2 = new Child2();

$c2->pFunc();
$c2->cFunc1();
$c2->cFunc2();
