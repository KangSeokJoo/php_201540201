<?php
// 재귀함수

function recursion($i){
    echo $i--."<br>";

    if($i > 0)
    recursion($i); // 무한루프 탈출구
}

recursion(5);