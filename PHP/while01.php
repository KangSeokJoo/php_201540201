<?php

$conf = true;
$i = 0;

while($conf){ // while 은 브레이크문이 없거나 , 계속 조건이 맞으면 무한 루프다.
    
    echo "바보"."\n";
    $i++;

    if($i>5)
    break;
}