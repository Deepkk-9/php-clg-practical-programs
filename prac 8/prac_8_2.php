<?php

class Student
{
    public $sName;
    public $sRno;

    function __construct($sn, $sr)
    {
        $this->sName = $sn;
        $this->sRno = $sr;
    }

    function getDtls()
    {
        echo "The name of the Student is : <b>$this->sName</b>";
        echo "<br>The Roll No of $this->sName is : <b>$this->sRno</b>";
    }
}


$s = new Student("Deep", 48);
$s->getDtls();
