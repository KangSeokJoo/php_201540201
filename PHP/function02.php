<?php

// 함수선언
function hello($name="+", int $a, int $b):int
{ // << 이게 초기값

    $sum = $a + $b;
    echo "반가워요".$name. "=" . $sum; "<br";

    //반환값
    return $sum;
}

//함수 호출 
//자바스크립트에선 함수에 인자값을 안줘도 실행이됀다 ! 시험문제
// 함수 변수에 초기 값을 주면 호출된다.

$user = "대담이";

hello($User, 1, "2"); // << 이게 인자값 변수는 대소문자 구분한다
$s = hello();
echo "합계는 = ".$s;



//html 은 $ 안주고 . 을 + 바꾸면됀다.