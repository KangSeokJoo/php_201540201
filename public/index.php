<?php

$layout = file_get_contents("../theme/index.html");

$filename = $_SERVER['REQUEST_URI'].".html";

if(file_exists("../".$filename)){  //파일이 uri에서 검색한 .html 일때
    $body = file_get_contents("../".$filename); // 그거에 들어가라
    $layout = str_replace("{{main}}", $body, $layout);
}else {
    $body = file_get_contents("../home.html"); //아니면 201540201에 있는 home.html이 켜지게 됀다.
    $layout = str_replace("{{main}}", $body, $layout);
}


echo $layout;

// echo "내가 처음이야";
