<?php


$loop = true;
$i = 1;
while($loop){
    echo "반복합니다.";
    if($i> 5){
        $loop = false; $i++ ; 
    }
}