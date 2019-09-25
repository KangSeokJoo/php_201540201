<?php

// include "left.php";
// include "right.php";

// greeting();
include "autoload.php";


$obj1 = new left;

// var_dump($obj1);
$obj1->greeting();
$obj1->daelim();

$obj1 ->$name = "대림이";
echo "<br>";

$proepty = "name";
echo $obj1->$proepty. " 입니다 <br>";
echo "영어 코드는 = ". $obj1::ENGLISH . "<br>";


$obj2 = new right;
$obj2 ->name = "대숙이";
$result = $obj2->greeting();
var_dump($result);
echo "<br>";

$obj2 ->daelim();
$result ->daelim();

//매소드 체인...
echo "---<br>";
$obj2 ->greeting()->daelim()->foo()->bar();

echo "---<br>";
echo foo::$aaa;

foo::hello();