<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'user_db';
$conn = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo "Ошибка подключения к БД";
    exit();
} 

//echo "Успешно подключен к БД ".$database;

?>