<?php
$i = 0;
for (; $i < 5;){
    echo $i."반복문입니다"."\n";
    $i++;

    if($i==2){
        echo "2번째는 똑똑해";
        // break;
    }
}