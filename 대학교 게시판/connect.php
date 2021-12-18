<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'root';
    $dbName = 'myClass';
    $mysqli = new mysqli('localhost', 'root', '123456', 'test');
 
    if($mysqli){
        echo "MySQL 접속 성공";
    }else{
        echo "MySQL 접속 실패";
    }
?>