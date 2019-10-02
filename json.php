<?php

$arr = ['apple'=>"사과", 'banana'=>"바나나"]; //연상배열

print_r($arr);

$str = json_encode($arr);
echo $str;