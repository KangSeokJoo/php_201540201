<?php

include "index7.php";

// use \sseokkoo\aaa;

// $obj = new aaa;
// 인덱스 7에서 이름 안맞추면

use \sseokkoo as bbbb;

$obj = new bbbb\aaa; //이런식으로가능


$obj->hello();
