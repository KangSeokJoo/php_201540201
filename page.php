<?php
$body = file_get_contents("page.htm"); // 파일을 갖구오는 키워드
$first = $_GET['v1'];
$body = str_replace("{{first}}", $first, $body);

$last = $_GET['v2'];
$body = str_replace("{{last}}",$last,$body);

echo $body;