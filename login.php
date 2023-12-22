<?php
session_start();
include 'db.php'; 
        if (isset($_POST['password']) && isset($_POST['login'])) {
        $login = $_POST['login'];
        $password = md5($_POST['password']);
        $query = "SELECT * FROM `user` WHERE `login`='$login' AND `password`='$password'";
	$result = mysqli_query($link, $query);
	if (mysqli_num_rows($result) == 1) {
                $_SESSION['login'] = $login;
        	$_SESSION['auth'] = true;
                header('Location:index2.php');
        }else {
                echo "Неверный логин или пароль" . "<br><br>";
            }
		} 
?>
<html>
    <body>
    <form method = "post">
      <input name = "login" type="text" placeholder="Логин"><br><br>
      <input name = "password" type="password" placeholder="Пароль"><br><br>
      <button type="submit">Войти</button>
      <br><br>
      <a href = "recovery.php">Забыли пароль? Сбросить</a>
    </form>
    </body>
</html>