<?php

session_start();

echo $_SESSION["username"]. "로그인 합니다. <br>";
echo "학번은 = " .$_COOKIE["mynum"] . "쿠키로 확인 <br>";