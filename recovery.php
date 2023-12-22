<?php
session_start();
require_once 'db.php';
    $capitalLetter = '/[A-Z]/';
    $quantity = '/\w{8,}/';
    $symbol = '/[!@#$%^&*()\/\<>]/';
    $login = $_POST['login']; 
    $password = $_POST['password'];
    $passwordNew = $_POST['passwordNew'];
    if (isset($_POST['password']) && isset($_POST['passwordNew'])) {
        if ($password == $passwordNew) {
            if (preg_match($quantity, $_POST['password'])) {
                if (preg_match($capitalLetter, $_POST['password'])) {
                    if (preg_match($symbol, $_POST['password'])) {
                            $password = md5($password);
                            $query = "UPDATE `user` SET `password` = '$password' WHERE `login` = '$login'";
                            $result = mysqli_query($link, $query);
                            header("Location: login.php");  
                    } else {
                        echo "Пароль должен содержать хотя бы один спец. символ" . "<br><br>";
                    }
                } else {
                    echo "Пароль должен содержать хотя бы одну заглавную букву" . "<br><br>";
                }
            } else {
                echo "Длинна пароля должна быть больше 8" . "<br><br>";
            }
        } else {
            echo "Пароли не совпадают!" . "<br><br>";
        }
    }
?>
<html>
    <body>
    <form action='recovery.php' method = "post">
      <input name = "login" type="text"  placeholder="Логин"><br><br>
      <input id = "password" name = "password" type="password" placeholder="Новый пароль"><br><br>
      <input id = "passwordNew" name = "passwordNew" type="password" placeholder="Новый пароль ещё раз"><br><br>
      <button type="submit">Войти</button>
    </form>
    </body>
</html>