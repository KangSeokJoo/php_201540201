<?php

// $body = file_get_contents("for01.php"); //바디 변수에 포01.php 파일 읽어온다

// echo $body;

$filename = "for01.php";
$filepoint = fopen($filename,"r"); //파일을 읽기형식으로 킨다
$count = 0;
while(!feof($filepoint)){
    // echo fgetc($fp); // 한글자식읽어서 출력
    $shift_F4 = fgetc($filepoint);
    if($shift_F4 == "$")
    $count++;
}// 파일의 끝이 아니면 계속 실행해달라

fclose($filepoint);
echo "소스에 $ 기호가" .$count. "있다";