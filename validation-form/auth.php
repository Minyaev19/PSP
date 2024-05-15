<?php

$mysql = new mysqli('localhost', 'root', 'root', 'vmlogist');
if ($mysql->connect_error) {
    die("Ошибка подключения: ". $mysql->connect_error);
}

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$password = md5($password. "gcoypqwhw235egegd");
$result = $mysql->query("SELECT * FROM `users` WHERE `login`= '$login' AND `password`= '$password'");
if ($result->num_rows == 0) {
    echo "Такой пользователь не найден";
    exit();
}
$user = $result->fetch_assoc();
setcookie('user', $user['name'], time() + 3600, "/");
$mysql->close();
header('Location: /site');
?>