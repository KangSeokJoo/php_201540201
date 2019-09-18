<?php

//선언
function korean(){

    //함수의 내용
    echo "안녕하세요.";
}

function english(){

    //함수의 내용
    echo "hello.";
}
$lang = "ko";
if($lang == "en"){
    // $fff = "english";
    english();
}
else{
    // $fff = "korean";
    korean();
}


// 함수 호출
hello();

// 가변 함수
$fff = "hello";

$fff();