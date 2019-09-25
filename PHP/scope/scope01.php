<?php


$a = 5;

echo "start= ".$a ."<br>";

function num()
{
    // $a = 2;
    global $a;
    echo "num = ".$a . "<br>";

    $a = 6;
}
num();
echo "end = ".$a;