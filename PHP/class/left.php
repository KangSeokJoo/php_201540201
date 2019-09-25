<?php

// 변수 + 함수 = 캡슐화
// 함수 => 메소드
// 변수 => 프로퍼티

class left
{    //메소드

    public $name;
    // 상수 2가지
    const ENGLISH = "en";
    
    public function greeting(){
        echo "<br> left hello";
    }

    public function daelim(){
        echo "<br>대림대학교";
    }
}