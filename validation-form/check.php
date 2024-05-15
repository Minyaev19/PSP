<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $surname = filter_var(trim($_POST['surname']),
    FILTER_SANITIZE_STRING);
    if(mb_strlen($login)<5 || mb_strlen($login)>100){
        echo "Недопустимая длина логина (от 5 до 100 символов)";
        exit();
    } else if(mb_strlen($password)<6 || mb_strlen($password)>12){
        echo "Недопустимая длина пароля (от 6 до 12 символов)";
        exit();
    } else if(mb_strlen($name)<1 || mb_strlen($name)>50){
        echo "Недопустимая длина имени (от 1 до 50 символов)";
        exit();
    } else if(mb_strlen($surname)<2 || mb_strlen($login)>50){
        echo "Недопустимая длина фамилии (от 2 до 50 символов)";
        exit();
    }

    $password= md5($password."gcoypqwhw235egegd");

$mysql = new mysqli('localhost', 'root', 'root', 'vmlogist');
$mysql->query("INSERT INTO `users` (`login`, `password`, `name`, `surname`) VALUES('$login','$password','$name', '$surname')");
$mysql->close();

header('Location: /site');
?>