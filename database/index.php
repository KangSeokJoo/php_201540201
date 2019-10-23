<?php

// 윈도우 os : 파일명 대소문자 구분 없음
// 리눅스 os : 파일명 대소문자 구별,

$config = include "dbconf.php";

require "database.php";
require "table.php";
 // 키값이 있는 연상배열

$db = new Database($config);
// 3 방금 메소드 체인 한줄로 바꿈 , 4 Table($db)를 불러옴
/// $db->setTable(new Table($db))->getTable()->createTable(); // 2테이블 객체를 생성해서 연결
 // 1연결된 객체를 읽어옴
// database 클래스에 Table 프로퍼티 갖구와서 거기에 Table 클래스 객체생성

$db->getTable()->createTable(
    "members2", // << $name
    [
        'Last'=>"varchar(50)",
        'First'=>"varchar(50)",
        'Age'=>"varchar(50)",
    ]);

if($db->isTable("members")){
    echo "테이블존재함";
}else{
    echo "테이블 없음";
}

// // phpinfo();

// // 서버정보
// // $host = "localhost";
// // $user = "phpuser";
// // $passwd = "multi1004";
// // $database = "php";
// include "dbconf.php";

// // mysql 접속
// $connect = new mysqli($host, $user, $passwd, $database);
// // 성공 : connect_errno = 0
// // 실패 : connect_errno = 1

// if(!$connect->connect_errno){
//     echo "DB 접속 성공이에요";
// }else{
//     echo "접속이 안돼요 ㅜ";
// }

// $query = "
// CREATE TABLE `members` (
//     `id` int(11) NOT NULL AUTO_INCREMENT,
//     `LastName` varchar(255),
//     `FirstName` varchar(255),
//     PRIMARY KEY(`id`)
//     ) ENGINE=innodb default charset=utf8;
//     ";

//     // mysqli 쿼리 에 콘넥트 변수에 쿼리를 씌우겠다??
//     if(mysqli_query($connect,$query)){
//         echo "테이블 생성 성공";
//     }else{
//         print "테이블 생성 실패";
//     }
//     빽틱이랑 작은따움표를 구분을한다
// errno 는 프롬퍼티
