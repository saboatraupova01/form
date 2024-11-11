<?php
require_once('connection.php');
if (isset($_POST['login']) && !empty($_POST['login'])
&& isset($_POST['password']) && !empty($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE `login` = '$login' and `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    print_r($row);
    if(mysqli_num_rows($result) > 0){
        echo "<br>";
        echo 'Добро пожаловать', ' ', $login;
    }
    else{
        echo "<br>";
        echo "Этот логин не существует!";
    }
}
?>
