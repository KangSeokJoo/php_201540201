<?php

class daelim
{
    public function __construct()
    {
        echo __CLASS__ . "이 생성이 되었습니다.<br>";
        // $this->hello();
    } // __CLASS__ 는 $this 란 비슷하다볼수있음

    final public function hello()
    {
        echo "학교가 너무 높아요..<br>";
    }
}

class food extends daelim
{
    public function menu(){
        echo "맛이 없어요<br>";
    }

    // public function hello()
    // {
    //     echo "학교가 너무 멀어요..<br>";
    // }
}

//default 객체

$obj1 = new food; // 호출을 안해줘도 자동으로 호출해줌
$obj1->hello();
$obj1->menu();
// 여기에 프로그램이 많이 작성....