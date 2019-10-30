<?php

include "test.php";

$obj = Test::make();
$obj->factory("Table"); // new Table 과 같음 근데 이름 수정하면 바꿔야돼는데 이건 괄호안만 바꾸면됌

// 게임 으로 비유하면 칼모드 , 총모드 같이 할수있다 실시간으로 변경가능 니달리 생각하면 편함
// $obj->strage(object $algorism);