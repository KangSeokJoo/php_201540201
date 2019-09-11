<?php

$a = 1;
$b = &$a; // a를 할당한 메모리를 찾음
echo $a."\n";
echo $b."\n";

$a = 2;
echo $a."\n";
echo $b."\n";
