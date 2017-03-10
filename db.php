<?php

$dsn    = 'mysql:host=localhost;dbname=fast';
$root   = 'root';
$pass   = '0237417599';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'
);

try{
    $conn = new PDO($dsn, $root, $pass, $option);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo 'Faild to connect ' . $e->getMessage();
}