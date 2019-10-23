<?php

$arr = ['apple'=>"사과", 'banana'=>"바나나"]; //연상배열

print_r($arr);

$str = json_encode($arr);
echo $str; // 문자열로 전송하는 포맷 그 문자열은 자바스크립트가 함